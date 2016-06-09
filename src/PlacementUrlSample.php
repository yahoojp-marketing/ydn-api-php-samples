<?php
require_once(dirname(__FILE__).'/../conf/api_config.php');
require_once(dirname(__FILE__).'/SoapUtils.class.php');

/**
 * Sample Program for PlacementUrlIdeaService,PlacementUrlListService.
 * Copyright (C) 2014 Yahoo Japan Corporation. All Rights Reserved.
 */

$accountId = SoapUtils::getAccountId();
$placementUrls = array();
$placementUrlListId = 0;

//=================================================================
// PlacementUrlIdeaService
//=================================================================
$placementUrlIdeaService = SoapUtils::getService('PlacementUrlIdeaService');

//-----------------------------------------------
// PlacementUrlIdeaService::get
//-----------------------------------------------
//request
$getPlacementUrlIdeaRequest = array(
       'selector' => array(
           'keyword' => 'iphone',
           'siteCategories' => array(
               'TC-SC-16777217'
               ),
           'adFormats' => array(
               'adStyle' => 'IMAGE',
               'mediaAdFormat' => 'SQUARE_300'
           )
       )
);

//call API
$getPlacementUrlIdeaResponse = $placementUrlIdeaService->invoke('get', $getPlacementUrlIdeaRequest);

// response
if(isset($getPlacementUrlIdeaResponse->rval->values)){
   $placementUrls = convertArray($getPlacementUrlIdeaResponse->rval->values);
}else{
   echo 'Fail to get PlacementUrl.';
   exit();
}

//=================================================================
// PlacementUrlListService
//=================================================================
$placementUrlListService = SoapUtils::getService('PlacementUrlListService');

//-----------------------------------------------
// PlacementUrlListService::mutate(ADD)
//-----------------------------------------------
//request
$urlList = array();
foreach ($placementUrls as $value){
       if(isset($value['placementUrlIdea']['searchUrl']) && $value['placementUrlIdea']['searchUrl'] !== 'UNKNOWN_URL'){
          array_push($urlList, array(
                               'placementUrl' => $value['placementUrlIdea']['searchUrl'],
                               'activeFlg'    => 'ACTIVE'
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
             'accountId'         => $accountId,
             'urlListName'       => 'SamplePlacementUrlList_CreateOn_' . SoapUtils::getCurrentTimestamp(),
             'description'       => 'SamplePlacementUrlListDescription_CreateOn_' . SoapUtils::getCurrentTimestamp(),
             'isUnknownDomain'   => 'TRUE',
           	 'urls'              => $urlList
            )
         )
    )
);

//call API
$addResponse = $placementUrlListService->invoke('mutate', $addRequest);

//response
if(isMutateSuccess($addResponse)){
   $placementUrlListId = $addResponse->rval->values->urlList->urlListId;
}else{
   echo 'Fail to add PlacementUrlList.';
   exit();
}

//-----------------------------------------------
// PlacementUrlListService::get
//-----------------------------------------------
//request
$getPlacementUrlListRequest = array(
     'selector' => array(
            'accountId'     => $accountId,
            'urlListIds'    => array($placementUrlListId),
            'paging'               => array(
                        'startIndex'    => 1,
                        'numberResults' => 20
             )
      )
);

//call API
$getPlacementUrlListResponse = $placementUrlListService->invoke('get', $getPlacementUrlListRequest);

//response
if(!isset($getPlacementUrlListResponse->rval->values)){
   echo 'Fail to get PlacementUrlList.';
   exit();
}

//-----------------------------------------------
// PlacementUrlListService::mutate(SET)
//-----------------------------------------------
//request
$urlList = array();
if(count($placementUrls) > 0
    && isset($placementUrls[0]['placementUrlIdea']['searchUrl'])){
   array_push($urlList,
       array(
           'placementUrl' => $placementUrls[0]['placementUrlIdea']['searchUrl'],
           'activeFlg'    => 'ACTIVE'
       )
   );
}

$setRequest = array(
    'operations' => array(
       'operator'  => 'SET',
       'accountId' => $accountId,
       'operand'   => array(
         0 => array(
            'accountId'          => $accountId,
            'urlListId'          => $placementUrlListId,
            'urlListName'        => 'SamplePlacementUrlList_UpdateOn_' . SoapUtils::getCurrentTimestamp(),
            'description'        => 'SamplePlacementUrlListDescription_UpdateOn_' . SoapUtils::getCurrentTimestamp(),
            'urlList'            => $urlList
            )
        )
    )
);

//call API
$setResponse = $placementUrlListService->invoke('mutate', $setRequest);

//response
if(!isMutateSuccess($setResponse)){
   echo 'Fail to set PlacementUrlList.';
   exit();
}

//-----------------------------------------------
// PlacementUrlListService::mutate(REMOVE)
//-----------------------------------------------
//request
$removeRequest = array(
      'operations' => array(
          'operator'  => 'REMOVE',
          'accountId' => $accountId,
          'operand'   => array(
              0 => array(
                      'accountId' => $accountId,
                      'urlListId' => $placementUrlListId
                   )
           )
       )
);

//call API
$removeResponse = $placementUrlListService->invoke('mutate', $removeRequest);

//response
if(!isMutateSuccess($removeResponse)){
   echo 'Fail to remove PlacementUrlList.';
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
