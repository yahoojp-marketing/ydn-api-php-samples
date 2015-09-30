<?php
require_once(dirname(__FILE__).'/../conf/api_config.php');
require_once(dirname(__FILE__).'/SoapUtils.class.php');

/**
 * Sample Program for SearchKeywordIdeaService,SearchKeywordListService.
 * Copyright (C) 2013 Yahoo Japan Corporation. All Rights Reserved.
 */

$accountId = SoapUtils::getAccountId();
$searchKeywordIds = array();
$searchKeywordListId = 0;

//=================================================================
// SearchKeywordIdeaService
//=================================================================
$searchKeywordIdeaService = SoapUtils::getService('SearchKeywordIdeaService');

//-----------------------------------------------
// SearchKeywordIdeaService::get
//-----------------------------------------------
//request
$getSearchKeywordIdeaRequest = array(
       'selector' => array(
             'keywords' => array('gizmo','vlookup')
        )
);

//call API
$getSearchKeywordIdeaResponse = $searchKeywordIdeaService->invoke('get', $getSearchKeywordIdeaRequest);

// response
if(isset($getSearchKeywordIdeaResponse->rval->values)){
   $searchKeywordIds = convertArray($getSearchKeywordIdeaResponse->rval->values);
}else{
   echo 'Fail to get SearchKeyword.';
   exit();
}

//=================================================================
// SearchKeywordlistService
//=================================================================
$searchKeywordListService = SoapUtils::getService('SearchKeywordListService');

//-----------------------------------------------
// SearchKeywordListService::mutate(ADD)
//-----------------------------------------------
//request
$searchKeyword = array();
foreach ($searchKeywordIds as $value){
       if(isset($value['searchKeywordIdea']['searchKeywordId'])){
          array_push($searchKeyword, array(
                               'searchKeywordId' => $value['searchKeywordIdea']['searchKeywordId']
                            )
          );
       }
}
$addRequest = array(
   'operations' => array(
        'operator'  => 'ADD',
        'accountId' => $accountId,
        'operand'   => array(
           0 => array(
             'accountId'                    => $accountId,
             'searchKeywordListName'        => 'SampleSearchKeywordList_CreateOn_' . SoapUtils::getCurrentTimestamp(),
             'searchKeywordListDescription' => 'SampleSearchKeywordListDescription_CreateOn_' . SoapUtils::getCurrentTimestamp(),
             'searchKeyword'                => $searchKeyword
            )
         )
    )
);

//call API
$addResponse = $searchKeywordListService->invoke('mutate', $addRequest);

//response
if(isMutateSuccess($addResponse)){
   $searchKeywordListId = $addResponse->rval->values->searchKeywordList->searchKeywordListId;
}else{
   echo 'Fail to add SearchKeywordList.';
   exit();
}

//-----------------------------------------------
// SearchKeywordListService::get
//-----------------------------------------------
//request
$getSearchKeywordListRequest = array(
     'selector' => array(
            'accountId'            => $accountId,
            'searchKeywordListIds' => array($searchKeywordListId),
            'paging'               => array(
                        'startIndex'    => 1,
                        'numberResults' => 20
             )
      )
);

//call API
$getSearchKeywordListResponse = $searchKeywordListService->invoke('get', $getSearchKeywordListRequest);

//response
if(!isset($getSearchKeywordListResponse->rval->values)){
   echo 'Fail to get SearchKeywordList.';
   exit();
}

//-----------------------------------------------
// SearchKeywordListService::mutate(SET)
//-----------------------------------------------
//request
$searchKeyword = array();
if(count($searchKeywordIds) > 0
    && isset($searchKeywordIds[0]['searchKeywordIdea']['searchKeywordId'])){
   array_push($searchKeyword, array('searchKeywordId' => $searchKeywordIds[0]['searchKeywordIdea']['searchKeywordId']));
}

$setRequest = array(
    'operations' => array(
       'operator'  => 'SET',
       'accountId' => $accountId,
       'operand'   => array(
         0 => array(
            'accountId'                    => $accountId,
            'searchKeywordListId'          => $searchKeywordListId,
            'searchKeywordListName'        => 'SampleSearchKeywordList_UpdateOn_' . SoapUtils::getCurrentTimestamp(),
            'searchKeywordListDescription' => 'SampleSearchKeywordListDescription_UpdateOn_' . SoapUtils::getCurrentTimestamp(),
            'searchKeyword'                => $searchKeyword
            )
        )
    )
);

//call API
$setResponse = $searchKeywordListService->invoke('mutate', $setRequest);

//response
if(!isMutateSuccess($setResponse)){
   echo 'Fail to set SearchKeywordList.';
   exit();
}

//-----------------------------------------------
// SearchKeywordListService::mutate(REMOVE)
//-----------------------------------------------
//request
$removeRequest = array(
      'operations' => array(
          'operator'  => 'REMOVE',
          'accountId' => $accountId,
          'operand'   => array(
              0 => array(
                      'accountId'           => $accountId,
                      'searchKeywordListId' => $searchKeywordListId
                   )
           )
       )
);

//call API
$removeResponse = $searchKeywordListService->invoke('mutate', $removeRequest);

//response
if(!isMutateSuccess($removeResponse)){
   echo 'Fail to remove SearchKeywordList.';
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
