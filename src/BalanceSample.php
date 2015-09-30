<?php
require_once(dirname(__FILE__).'/../conf/api_config.php');
require_once(dirname(__FILE__).'/SoapUtils.class.php');

/**
 * Sample Program for BalanceService.
 * Copyright (C) 2012 Yahoo Japan Corporation. All Rights Reserved.
 */

//=================================================================
// BalanceService
//=================================================================
$balanceService = SoapUtils::getService('BalanceService');

//-----------------------------------------------
// BalanceService::get
//-----------------------------------------------
//request
$getBalanceRequest = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
    ),
);

//call API
$getBalanceResponse = $balanceService->invoke('get', $getBalanceRequest);

//response
if(isset($getBalanceResponse->rval->values->balance->balance)){
    $balance = $getBalanceResponse->rval->values->balance->balance;
}else{
    echo 'Fail to get Balance.';
    exit();
}
