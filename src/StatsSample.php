<?php
require_once(dirname(__FILE__).'/../conf/api_config.php');
require_once(dirname(__FILE__).'/SoapUtils.class.php');

/**
 * Sample Program for StatsService.
 * Copyright (C) 2014 Yahoo Japan Corporation. All Rights Reserved.
 */

$accountId = SoapUtils::getAccountId();
$stats = array();
//=================================================================
// StatsService
//=================================================================
$statsService = SoapUtils::getService('StatsService');

//-----------------------------------------------
// StatsService::get
//-----------------------------------------------
//request
$getStatsRequest = array(
       'selector' => array(
           'accountId' => $accountId,
           'statsPeriod' => 'REALTIME_MONTH',
           'statsType' => 'AD'
       )
);

//call API
$getStatsResponse = $statsService->invoke('get', $getStatsRequest);

// response
if(isset($getStatsResponse->rval->values)){
   $stats = convertArray($getStatsResponse->rval->values);
}else{
   echo 'Fail to get Stats.';
   exit();
}

//-----------------------------------------------
// StatsService::get use CustomDate
//-----------------------------------------------
//request
$getCustomDateStatsRequest = array(
    'selector' => array(
        'accountId' => $accountId,
        'statsPeriod' => 'CUSTOM_DATE',
        'statsType' => 'AD',
        'statsPeriodCustomDate' => array(
            'statsStartDate' => date("Ymd"),
            'statsEndDate' => date("Ymd", strtotime("1 month"))
        )
    )
);

//call API
$getCustomDateStatsResponse = $statsService->invoke('get', $getCustomDateStatsRequest);

// response
if(isset($getCustomDateStatsResponse->rval->values)){
    $stats = convertArray($getCustomDateStatsResponse->rval->values);
}else{
    echo 'Fail to get Stats.';
    exit();
}

//-------------------------------------------------------------------
// utility function
//
//-------------------------------------------------------------------
/**
 * convert from Soap Response Object to array
 * @param object $soapResponseObject
 * @return array soap response
 */
function convertArray($soapResponseObject){
   $list = (array)$soapResponseObject;
   
   foreach ($list as $key => $value){
     if(is_object($value) || is_array($value)){
       $list[$key] = convertArray($value);
     }
   }
   return $list;
}
