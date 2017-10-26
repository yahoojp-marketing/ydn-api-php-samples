<?php
require_once(dirname(__FILE__).'/../conf/api_config.php');
require_once(dirname(__FILE__).'/SoapUtils.class.php');

/**
 * Sample Program for DictionaryService.
 * Copyright (C) 2013 Yahoo Japan Corporation. All Rights Reserved.
 */

//=================================================================
// DictionaryService
//=================================================================
$dictionaryService = SoapUtils::getService('DictionaryService');

//-----------------------------------------------
// DictionaryService::getDisapprovalReason
//-----------------------------------------------
//request
$getDisapprovalReasonRequest = array(
    'selector' => array(
        'lang' => 'JA',
    ),
);

//call API
$getDisapprovalReasonResponse = $dictionaryService->invoke('getDisapprovalReason',$getDisapprovalReasonRequest);

//response
if(!isset($getDisapprovalReasonResponse->rval->values)){
    echo 'Fail to getDisapprovalReason.';
    exit();
}

//-----------------------------------------------
// DictionaryService::getGeographicLocation
//-----------------------------------------------
//request
$getGeographicLocationRequest = array(
    'selector' => array(
        'lang' => 'JA',
    ),
);

//call API
$getGeographicLocationResponse = $dictionaryService->invoke('getGeographicLocation',$getGeographicLocationRequest);

//response
if(!isset($getGeographicLocationResponse->rval->values)){
    echo 'Fail to getGeographicLocation.';
    exit();
}

//-----------------------------------------------
// DictionaryService::getInterestCategory
//-----------------------------------------------
//request
$getInterestCategoryRequest = array(
    'selector' => array(
        'lang' => 'JA',
    ),
);

//call API
$getInterestCategoryResponse = $dictionaryService->invoke('getInterestCategory', $getInterestCategoryRequest);

//response
if(!isset($getInterestCategoryResponse->rval->values)){
    echo 'Fail to get InterestCategory.';
    exit();
}

//-----------------------------------------------
// DictionaryService::getSiteCategory
//-----------------------------------------------
$getSiteCategoryRequest = array(
    'selector' => array(
        'lang' => 'JA',
    ),
);

//call API
$getSiteCategoryResponse = $dictionaryService->invoke('getSiteCategory', $getSiteCategoryRequest);

//response
if(!isset($getSiteCategoryResponse->rval->values)){
    echo 'Fail to get SiteCategory.';
    exit();
}

//-----------------------------------------------
// DictionaryService::getColorSet
//-----------------------------------------------
$getColorSetRequest = array(
        'selector' => array(
            'lang' => 'JA',
        ),
);

//call API
$getColorSetResponse = $dictionaryService->invoke('getColorSet', $getColorSetRequest);

//response
if(!isset($getColorSetResponse->rval->values)){
	echo 'Fail to get ColorSet.';
	exit();
}

//-----------------------------------------------
// DictionaryService::getOsVersion
//-----------------------------------------------
$getOsVersionRequest = array(
    'selector' => array(
        'osType' => 'ANDROID',
    ),
);
//call API
$getOsVersionResponse = $dictionaryService->invoke('getOsVersion', $getOsVersionRequest);

//response
if(!isset($getOsVersionResponse->rval->values)){
    echo 'Fail to get OsVersion.';
    exit();
}

//-----------------------------------------------
// DictionaryService::getMediaAdFormat
//-----------------------------------------------
//call API
$getMediaAdFormatResponse = $dictionaryService->invoke('getMediaAdFormat', null);

//response
if(!isset($getMediaAdFormatResponse->rval->values)){
    echo 'Fail to get MediaAdFormat.';
    exit();
}
