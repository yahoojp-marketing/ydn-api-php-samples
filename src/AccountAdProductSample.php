<?php
require_once(dirname(__FILE__).'/../conf/api_config.php');
require_once(dirname(__FILE__).'/SoapUtils.class.php');

/**
 * Sample Program for AccountAdProductService.
 * Copyright (C) 2013 Yahoo Japan Corporation. All Rights Reserved.
 */

//=================================================================
// AccountAdProductService
//=================================================================
$accountAdProductService = SoapUtils::getService('AccountAdProductService');

//-----------------------------------------------
// AccountAdProductService::get
//-----------------------------------------------
//request
$getRequest = array(
    'selector' => array(
        'accountIds' => SoapUtils::getAccountId(),
    ),
);

//call API
$getResponse = $accountAdProductService->invoke('get',$getRequest);

//response
if(!isset($getResponse->rval->values)){
    echo 'Fail to get AccountAdProduct.';
    exit();
}

