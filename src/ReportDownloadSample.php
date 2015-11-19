<?php
require_once(dirname(__FILE__).'/../conf/api_config.php');
require_once(dirname(__FILE__).'/SoapUtils.class.php');

/**
 * Sample Program for Report Download.
 * Copyright (C) 2012 Yahoo Japan Corporation. All Rights Reserved.
 */

//=================================================================
// ReportDefinitionService
//=================================================================
$reportDefinitionService = SoapUtils::getService('ReportDefinitionService');

//-----------------------------------------------
// call ReportDefinitionService::getReportFields
//-----------------------------------------------
// request
$getReportFieldsParam = array(
    'reportCategory' => 'AD',
);

// call API
$getReportFieldsResponse = $reportDefinitionService->invoke('getReportFields', $getReportFieldsParam);

//-----------------------------------------------
// call ReportDefinitionService::mutate(ADD)
//-----------------------------------------------
// request
$addReportDefinitionParam = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            'reportName' => 'ACCOUNT-REPORT',
            'dateRangeType' => 'YESTERDAY',
            'sortFields' => '+ACCOUNT_ID',
            'fields' => array(
            		'ACCOUNT_ID','AD_ID'),
            'format' => 'CSV',
            'encode' => 'SJIS',
            'lang' => 'EN',
            'addTemplate' => 'YES',
        ),
    ),
);

// call API
$addReportDefinitionResponse = $reportDefinitionService->invoke('mutate', $addReportDefinitionParam);

// reportId
if(isset($addReportDefinitionResponse->rval->values->reportDefinition->reportId)){
    $reportId = $addReportDefinitionResponse->rval->values->reportDefinition->reportId;
}else{
    echo 'Fail to add report definition.';
    exit();
}

//-----------------------------------------------
// call ReportDefinitionService::mutate(ADD) - REACH_FREQUENCY
//-----------------------------------------------
// request
$addFrequencyReportDefinitionParam = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            'reportName' => 'REACH-FREQUENCY-REPORT',
            'dateRangeType' => 'YESTERDAY',
            'sortFields' => '+FREQUENCY',
            'fields'     => array(
            		'ACCOUNT_ID','ACCOUNT_NAME','FREQUENCY','IMPS','CLICK','UNIQUE_USERS'),
        	'frequencyRange' => 'DAILY',
            'format' => 'CSV',
            'encode' => 'SJIS',
            'lang' => 'EN',
            'addTemplate' => 'YES',
        ),
    ),
);

// call API
$addFrequencyReportDefinitionResponse = $reportDefinitionService->invoke('mutate', $addFrequencyReportDefinitionParam);

// reportId
if(isset($addFrequencyReportDefinitionResponse->rval->values->reportDefinition->reportId)){
    $frequencyReportId = $addFrequencyReportDefinitionResponse->rval->values->reportDefinition->reportId;
}else{
    echo 'Fail to add report definition of ReachFrequency.';
    exit();
}

//-----------------------------------------------
// call ReportDefinitionService::get
//-----------------------------------------------
// request
$getReportDefinitionParam = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'reportIds' => array($reportId),
    ),
);

// call API
$getReportDefinitionResponse = $reportDefinitionService->invoke('get', $getReportDefinitionParam);

// reportId
if(isset($getReportDefinitionResponse->rval->values->reportDefinition->reportId)){
    $reportId = $getReportDefinitionResponse->rval->values->reportDefinition->reportId;
}else{
    echo 'Fail to get report definition.';
    exit();
}

//=================================================================
// ReportService
//=================================================================
$reportService = SoapUtils::getService('ReportService');

//-----------------------------------------------
// call ReportService::getClosedDate
//-----------------------------------------------
//request
$getClosedDateRequest = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
    ),
);

//call API
$getClosedDateResponse = $reportService->invoke('getClosedDate', $getClosedDateRequest);

//closed date
if(isset($getClosedDateResponse->rval->values)){
    $closedDateRecords = $getClosedDateResponse->rval->values;
}else{
    echo 'Fail to get report closed date.';
    exit();
}

//-----------------------------------------------
// call ReportService::mutate(ADD)
//-----------------------------------------------
// request
$addReportParam = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            'reportId' => $reportId,
        ),
    )
);

// call API
$addReportResponse = $reportService->invoke('mutate', $addReportParam);

// reportJobId
if(isset($addReportResponse->rval->values->reportRecord->reportJobId)){
    $reportJobId =  $addReportResponse->rval->values->reportRecord->reportJobId;
}else{
    echo 'Fail to add report job.';
    exit();
}

//-----------------------------------------------
// call ReportService::get
//-----------------------------------------------
// request
$getReportParam = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'reportJobIds' => array($reportJobId),
    ),
);

//call 30sec sleep * 30 = 15minute
for($i=0; $i<30; $i++){
    // sleep 30 second.
    echo "\n***** sleep 30 seconds for Report Download Job *****\n";
    sleep(30);

    // call API
    $getReportResponse = $reportService->invoke('get', $getReportParam);

    // status
    if(isset($getReportResponse->rval->values->reportRecord->status)){
        $jobStatus = $getReportResponse->rval->values->reportRecord->status;
        if($jobStatus === 'COMPLETED'){
            break;
        }else if($jobStatus === 'ACCEPTED' || $jobStatus === 'IN_PROGRESS'){
            continue;
        }else{
            echo 'Report job status failed.';
            exit();
        }
    }else{
        echo 'Fail to get report job status';
        exit();
    }
}

if(!isset($jobStatus)){
    echo 'Report job in process on long time. please wait.';
    exit();
}

//-----------------------------------------------
// call ReportService::getDownloadUrl
//-----------------------------------------------
// request
$getDownloadUrlParam = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'reportJobIds' => array($reportJobId),
    ),
);

// call API
$getDownloadUrlResponse = $reportService->invoke('getDownloadUrl', $getDownloadUrlParam);

if(isset($getDownloadUrlResponse->rval->values->reportDownloadUrl->downloadUrl)){
    $download_url = $getDownloadUrlResponse->rval->values->reportDownloadUrl->downloadUrl;
}else{
    echo 'Fail to get Report download URL.';
    exit();
}

//-----------------------------------------------
// download report
//-----------------------------------------------
// file name
$format = $addReportDefinitionResponse->rval->values->reportDefinition->format;
$fileext = strtolower($format);
$file_name = 'Report_'.$reportJobId.'.'.$fileext;

// download
SoapUtils::download($download_url, $file_name);

//-----------------------------------------------
// call ReportService::mutate(REMOVE)
//-----------------------------------------------
// request
$removeReportParam = array(
    'operations' => array(
        'operator' => 'REMOVE',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            'reportJobId' => $reportJobId,
        ),
    ),
);

// call API
$removeReportResponse = $reportService->invoke('mutate', $removeReportParam);

if(isset($removeReportResponse->rval->values->reportRecord->reportJobId)){
    // OK
}else{
    echo 'Fail to remove Report Job.';
    exit();
}

//-----------------------------------------------
// call ReportDefinitionService::mutate(REMOVE)
//-----------------------------------------------
// request
$removeReportDefinitionParam = array(
    'operations' => array(
        'operator' => 'REMOVE',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            'reportId' => $reportId,
        ),
    ),
);

// call API
$removeReportDefinitionResponse = $reportDefinitionService->invoke('mutate', $removeReportDefinitionParam);

// reportId
if(isset($removeReportDefinitionResponse->rval->values->reportDefinition->reportId)){
    $reportId = $removeReportDefinitionResponse->rval->values->reportDefinition->reportId;
}else{
    echo 'Fail to remove report definition.';
    exit();
}

//-----------------------------------------------
// call ReportDefinitionService::mutate(REMOVE) - REACH_FREQUENCY
//-----------------------------------------------
// request
$removeFrequencyReportDefinitionParam = array(
    'operations' => array(
        'operator' => 'REMOVE',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            'reportId' => $frequencyReportId,
        ),
    ),
);

// call API
$removeFrequencyReportDefinitionResponse = $reportDefinitionService->invoke('mutate', $removeFrequencyReportDefinitionParam);

// reportId
if(isset($removeFrequencyReportDefinitionResponse->rval->values->reportDefinition->reportId)){
    $frequencyReportId = $removeFrequencyReportDefinitionResponse->rval->values->reportDefinition->reportId;
}else{
    echo 'Fail to remove report definition of ReachFrequency.';
    exit();
}
