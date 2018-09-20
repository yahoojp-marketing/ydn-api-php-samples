<?php
require_once(dirname(__FILE__).'/../conf/api_config.php');
require_once(dirname(__FILE__).'/SoapUtils.class.php');

/**
 * Sample Program for ConversionTrackerService.
 * Copyright (C) 2014 Yahoo Japan Corporation. All Rights Reserved.
 */

$accountId = SoapUtils::getAccountId();
$conversionTrackerId = 0;

//=================================================================
// ConversionTrackerService
//=================================================================
$conversionTrackerService = SoapUtils::getService('ConversionTrackerService');

//-----------------------------------------------
// ConversionTrackerService::mutate(ADD)
//-----------------------------------------------
//request
$addRequest = array(
   'operations' => array(
        'operator'  => 'ADD',
        'accountId' => $accountId,
        'operand'   => array(
           0 => array(
             'accountId'                   => $accountId,
             'conversionTrackerName'       => 'SampleConversionTracker_CreateOn_' . SoapUtils::getCurrentTimestamp(),
             'status'                      => 'ENABLED',
             'category'                    => 'PURCHASE',
           	 'conversionTrackerType'       => 'WEB_CONVERSION',
             'countingType'                => 'MANY_PER_CLICK',
             'excludeFromBidding'          => 'FALSE',
            )
         )
    )
);
//xsi:type for operand of WebConversion
$addRequest['operations']['operand'][0] =
    SoapUtils::encodingSoapVar($addRequest['operations']['operand'][0], 'WebConversion','ConversionTracker' , 'operand');

//call API
$addResponse = $conversionTrackerService->invoke('mutate', $addRequest);

//response
if(isMutateSuccess($addResponse)){
   $conversionTrackerId = $addResponse->rval->values->conversionTracker->conversionTrackerId;
}else{
   echo 'Fail to add ConversionTracker.';
   exit();
}

//-----------------------------------------------
// ConversionTrackerService::get
//-----------------------------------------------
//request
$getConversionTrackerRequest = array(
    'selector' => array(
        'accountId'            => $accountId,
        'conversionTrackerIds' => array($conversionTrackerId),
        'paging'               => array(
            'startIndex'    => 1,
            'numberResults' => 20
        )
    )
);

//call API
$getConversionTrackerResponse = $conversionTrackerService->invoke('get', $getConversionTrackerRequest);

//response
if(!isset($getConversionTrackerResponse->rval->values)){
    echo 'Fail to get ConversionTracker.';
    exit();
}

//-----------------------------------------------
// ConversionTrackerService::get use CustomDate
//-----------------------------------------------
//request
$getCustomDateConversionTrackerRequest = array(
    'selector' => array(
        'accountId'             => $accountId,
        'conversionTrackerIds'  => array($conversionTrackerId),
        'statsPeriod'           => 'CUSTOM_DATE',
        'statsPeriodCustomDate' => array(
            'statsStartDate'    => date("Ymd"),
            'statsEndDate'      => date("Ymd", strtotime("1 month"))
        ),
        'paging'               => array(
            'startIndex'    => 1,
            'numberResults' => 20
        )
    )
);

//call API
$getCustomDateConversionTrackerResponse = $conversionTrackerService->invoke('get', $getCustomDateConversionTrackerRequest);

//response
if(!isset($getCustomDateConversionTrackerResponse->rval->values)){
    echo 'Fail to get ConversionTracker.';
    exit();
}


//-----------------------------------------------
// ConversionTrackerService::mutate(SET)
//-----------------------------------------------
//request
$setRequest = array(
    'operations' => array(
       'operator'  => 'SET',
       'accountId' => $accountId,
       'operand'   => array(
         0 => array(
            'accountId'                    => $accountId,
            'conversionTrackerId'          => $conversionTrackerId,
            'conversionTrackerName'        => 'SampleConversionTracker_UpdateOn_' . SoapUtils::getCurrentTimestamp(),
            'status'                       => 'DISABLED',
            'category'                     => 'PAGE_VIEW',
            'userRevenueValue'             => 300,
            'conversionTrackerType'        => 'WEB_CONVERSION',
            'countingType'                 => 'MANY_PER_CLICK',
            'excludeFromBidding'           => 'FALSE',
            )
        )
    )
);

//call API
$setResponse = $conversionTrackerService->invoke('mutate', $setRequest);

//response
if(!isMutateSuccess($setResponse)){
   echo 'Fail to set ConversionTracker.';
   exit();
}


//-------------------------------------------------------------------
// utility function
//
//-------------------------------------------------------------------

/**
 * validate the results of mutate method
 * 
 * @param object $soapResponse
 * @return true:suceess / false:failure
 */
function isMutateSuccess($soapResponse){
  return isset($soapResponse->rval->values->operationSucceeded) &&
           $soapResponse->rval->values->operationSucceeded === true;
}