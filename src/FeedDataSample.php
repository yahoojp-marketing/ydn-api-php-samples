<?php
require_once(dirname(__FILE__) . '/../conf/api_config.php');
require_once(dirname(__FILE__) . '/SoapUtils.class.php');

/**
 * Sample Program for FeedDataService,FeedHolderService..
 * Copyright (C) 2018 Yahoo Japan Corporation. All Rights Reserved.
 */

//=================================================================
// FeedDataService,FeedHolderService
//=================================================================
$feedDataService = SoapUtils::getService('FeedDataService');
$feedHolderService = SoapUtils::getService('FeedHolderService');

//-----------------------------------------------
// FeedHolderService::mutate(ADD)
//-----------------------------------------------
//request
$addFeedHolderServiceRequest = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'feedHolderName' => 'SampleFeedHolder_' . SoapUtils::getCurrentTimestamp() . '.jpg',
            ),
        ),
    ),
);

//call API
$addFeedHolderResponse = $feedHolderService->invoke('mutate', $addFeedHolderServiceRequest);

//response
if (isset($addFeedHolderResponse->rval->values->feedHolder)) {
    $feedHolder = $addFeedHolderResponse->rval->values->feedHolder;
} else {
    if (isset($addFeedHolderResponse->rval->values[0]->feedHolder)) {
        $feedHolder = $addFeedHolderResponse->rval->values[0]->feedHolder;
    } else {
        echo 'Fail to add FeedHolder.';
        exit();
    }
}

//-----------------------------------------------
// FeedHolderService::get
//-----------------------------------------------
//request
$getFeedHolderRequest = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'feedHolderIds' => array($feedHolder->feedHolderId),
        'paging' => array(
            'startIndex' => 1,
            'numberResults' => 20,
        ),
    ),
);

//call API
$getFeedHolderResponse = $feedHolderService->invoke('get', $getFeedHolderRequest);

//response
if (isset($getFeedHolderResponse->rval->values->feedHolder)) {
    $feedHolder = $getFeedHolderResponse->rval->values->feedHolder;
} else {
    if (isset($getFeedHolderResponse->rval->values[0]->feedHolder)) {
        $feedHolder = $getFeedHolderResponse->rval->values[0]->feedHolder;
    } else {
        echo 'Fail to get FeedHolder.';
        exit();
    }
}

//-----------------------------------------------
// FeedHolderService::mutate(SET)
//-----------------------------------------------
//request
$setFeedHolderRequest = array(
    'operations' => array(
        'operator' => 'SET',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'feedHolderId' => $feedHolder->feedHolderId,
                'feedHolderName' => 'SampleFeedHolderMod_' . SoapUtils::getCurrentTimestamp(),
            ),
        ),
    ),
);

//call API
$setFeedHolderResponse = $feedHolderService->invoke('mutate', $setFeedHolderRequest);

//response
if (isset($setFeedHolderResponse->rval->values->feedHolder)) {
    $feedHolder = $setFeedHolderResponse->rval->values->feedHolder;
} else {
    if (isset($setFeedHolderResponse->rval->values[0]->feedHolder)) {
        $feedHolder = $setFeedHolderResponse->rval->values[0]->feedHolder;
    } else {
        echo 'Fail to set FeedHolder.';
        exit();
    }
}

//-----------------------------------------------
// FeedDataService::getUploadUrl
//-----------------------------------------------

//request
$getUploadUrlRequest = array(
    'accountId' => SoapUtils::getAccountId(),
    'itemListUploadType' => 'UPDATE_ALL',
    'feedHolderId' => $feedHolder->feedHolderId,

);

//call API
$getUploadUrlResponse = $feedDataService->invoke('getUploadUrl', $getUploadUrlRequest);

//response
if (isset($getUploadUrlResponse->rval->uploadUrl)) {
    $uploadUrl = $getUploadUrlResponse->rval->uploadUrl;
} else {
    echo 'Fail to get UploadUrl.';
    exit();
}

//-----------------------------------------------
// FeedDataService::upload
//-----------------------------------------------
$file_path = dirname(__FILE__) . '/../upload/SampleFeedUpload.zip';
$file = file_get_contents($file_path);
if (!$file) {
    echo 'Fail to upload FeedData.';
    exit();
}
//upload
$uploadFeedDataResponse = SoapUtils::upload($uploadUrl, 'SampleFeedUpload.zip');
if ($uploadFeedDataResponse === false) {
    exit();
}

//parse response
$doc = new DOMDocument();
$doc->loadXML($uploadFeedDataResponse);
$nodeList = $doc->getElementsByTagName('itemListUploadId');
//get upload job ID
$itemListUploadId = $nodeList->item(0)->nodeValue;

//-----------------------------------------------
// FeedDataService::getUploadStatus
//-----------------------------------------------
//request
$getUploadStatusRequest = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'feedHolderIds' => array($feedHolder->feedHolderId),
        'itemListUploadIds' => array($itemListUploadId),
        'dateRange' => array(
            'startDate' => date("Ym01", time()),
            'endDate' => date("Ymd")
        ),
        'paging' => array(
            'startIndex' => 1,
            'numberResults' => 20,
        ),
    ),
);

//call 30sec sleep * 30 = 15minute
for ($i = 0; $i < 30; $i++) {
    // sleep 30 second.
    echo "\n***** sleep 30 seconds for FeedData Upload Job *****\n";
    sleep(30);

    // call API
    $getUploadStatusResponse = $feedDataService->invoke('getUploadStatus', $getUploadStatusRequest);

    // url
    if (isset($getUploadStatusResponse->rval->values->feedData->itemListUploadStatus)) {
        $jobStatus = $getUploadStatusResponse->rval->values->feedData->itemListUploadStatus;

        if (isset($getUploadStatusResponse->rval->values->feedData->errorListDownloadUrl)) {
            $errorListDownloadUrl =
                $getUploadStatusResponse->rval->values->feedData->errorListDownloadUrl;
            echo 'errorListDownloadUrl = ' . $errorListDownloadUrl;
            // download
            SoapUtils::download($errorListDownloadUrl, 'SampleFeedDataUploadErrorFile.zip');
        }

        if ($jobStatus === 'COMPLETED') {
            break;
        } else {
            if ($jobStatus === 'UPLOADED') {
                continue;
            } else {
                echo 'Error : Job Status failed.';
                exit();
            }
        }
    } else {
        echo 'Fail to get FeedDataUploadJob Status.';
        exit();
    }
}

//-----------------------------------------------
// FeedHolderService::mutate(REMOVE)
//-----------------------------------------------
//request
$removeFeedHolderRequest = array(
    'operations' => array(
        'operator' => 'REMOVE',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'feedHolderId' => $feedHolder->feedHolderId,
            ),
        ),
    ),
);

//call API
$removeFeedHolderResponse = $feedHolderService->invoke('mutate', $removeFeedHolderRequest);

//response
if (isset($removeFeedHolderResponse->rval->values->feedHolder)) {
    $removedFeedHolder = $removeFeedHolderResponse->rval->values->feedHolder;
} else {
    if (isset($removeFeedHolderResponse->rval->values[0]->feedHolder)) {
        $removedFeedHolder = $removeFeedHolderResponse->rval->values[0]->feedHolder;
    } else {
        echo 'Fail to remove FeedHolder.';
        exit();
    }
}

