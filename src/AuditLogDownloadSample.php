<?php
require_once(dirname(__FILE__).'/../conf/api_config.php');
require_once(dirname(__FILE__).'/SoapUtils.class.php');

/**
 * Sample Program for AuditLog Download.
 * Copyright (C) 2012 Yahoo Japan Corporation. All Rights Reserved.
 */

//=================================================================
// AuditLogService
//=================================================================
$auditLogService = SoapUtils::getService('AuditLogService');

//-----------------------------------------------
// AuditLogService::getAuditLogDownload
//-----------------------------------------------
// request
$getAuditLogDownloadParam = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'updateSources' => array(
            'CAMPAIGN_MANAGEMENT_TOOL',
            'API'
            ),
        'dateRange' => array(
            'startDate' => date("Ymd"),
            'endDate' => date("Ymd")
            ),
        'auditLogJob' => array(
            'auditLogJobName' => 'sample_job_name'
            ),
        'lang' => 'JA'
    ),
);

// call API
$getAuditLogDownloadResponse = $auditLogService->invoke('getDownload', $getAuditLogDownloadParam);

// jobId
if(isset($getAuditLogDownloadResponse->rval->values->auditLogJob->auditLogJobId)){
    $auditLogJobId = $getAuditLogDownloadResponse->rval->values->auditLogJob->auditLogJobId;
}else{
    echo 'Fail to get auditLog download job Id.';
    exit();
}

//-----------------------------------------------
// AuditLogService::getAuditLogDownloadStatus
//-----------------------------------------------
// request
$getDownloadStatusParam = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'auditLogJobIds' => array($auditLogJobId),
    ),
);

//call 30sec sleep * 30 = 15minute
for($i=0; $i<30; $i++){
    // sleep 30 second.
    echo "\n***** sleep 30 seconds for AuditLog Download Job *****\n";
    sleep(30);

    // call API
    $getAuditLogDownloadStatusResponse = $auditLogService->invoke('getDownloadStatus', $getDownloadStatusParam);

    // url
    if(isset($getAuditLogDownloadStatusResponse->rval->values->auditLogJob->auditLogJobStatus)){
        $jobStatus = $getAuditLogDownloadStatusResponse->rval->values->auditLogJob->auditLogJobStatus;
        if($jobStatus === 'COMPLETED'){
            $download_url = $getAuditLogDownloadStatusResponse->rval->values->auditLogJob->downloadAuditLogDownloadUrl;
            break;
        }else if($jobStatus === 'IN_PROGRESS'){
            continue;
        }else{
            echo 'Error : Job Status failed.';
            exit();
        }
    }else{
        echo 'Fail to get AuditLogDownloadJob Status.';
        exit();
    }
}

if(!isset($download_url)){
    echo 'AuditLogDownload job in process on long time. please wait.';
    exit();
}

//-----------------------------------------------
// download auditLog
//-----------------------------------------------
// file name
$file_name = 'AuditLogDownload_'.$auditLogJobId.'.csv';

// download
SoapUtils::download($download_url, $file_name);
