<?php
require_once(dirname(__FILE__).'/../conf/api_config.php');
require_once(dirname(__FILE__).'/SoapUtils.class.php');

/**
 * Sample Program for RetargetingTagService,RetargetingListService.
 * Copyright (C) 2012 Yahoo Japan Corporation. All Rights Reserved.
 */

//=================================================================
// RetargetingTagService
//=================================================================
$retargetingTagService = SoapUtils::getService('RetargetingTagService');

//-----------------------------------------------
// RetargetingTagService::mutate(ADD)
//-----------------------------------------------
//request
$addRetargetingTagRequest = array(
        'operations' => array(
                'operator' => 'ADD',
                'accountId' => SoapUtils::getAccountId(),
        ),
);

//call API
$addRetargetingTagResponse = $retargetingTagService->invoke('mutate', $addRetargetingTagRequest);

//response
$retargetingTag = null;
if(isset($addRetargetingTagResponse->rval->values->retargetingTag)){
    $retargetingTag = $addRetargetingTagResponse->rval->values->retargetingTag;
}else{
    echo 'Fail to add RetargetingTag.';
}

//-----------------------------------------------
// RetargetingTagService::get
//-----------------------------------------------
//request
$getRetargetingTagRequest = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
    ),
);

//call API
$getRetargetingTagResponse = $retargetingTagService->invoke('get', $getRetargetingTagRequest);

//response
if(isset($getRetargetingTagResponse->rval->values->retargetingTag)){
    $retargetingTag = $getRetargetingTagResponse->rval->values->retargetingTag;
}else if(isset($getRetargetingTagResponse->rval->values[0]->retargetingTag)){
    $retargetingTag = $getRetargetingTagResponse->rval->values[0]->retargetingTag;
}else{
    echo 'Fail to get RetargetingTag.';
    exit();
}

//=================================================================
// RetargetingListService
//=================================================================
$retargetingListService = SoapUtils::getService('RetargetingListService');

//-----------------------------------------------
// RetargetingListService::mutate(ADD) - Rule
//-----------------------------------------------
//request
$addRuleRetargetingListRequest = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'targetListType' => 'RULE',
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'targetListName' => 'SampleRule_CreateOn_'.SoapUtils::getCurrentTimestamp(),
                'description' => 'SampleRule_CreateOn_'.SoapUtils::getCurrentTimestamp(),
                'targetList' => array(
                    'targetListType' => 'RULE',
                    'retargetingTagId' => $retargetingTag->retargetingTagId,
                    'isPreset' => 'TRUE',
                    'isOpen' => 'TRUE',
                    'reachPeriod' => '7',
                    'rules' => array(
                        array(
                            'ruleConditions' => array(
                                array(
                                    'type' => 'LABEL',
                                    'compareOperator' => 'END_WITH',
                                    'value' => 'SampleLabel1',
                                 ),
                                array(
                                    'type' => 'URL',
                                    'compareOperator' => 'EQUAL',
                                    'value' => 'sampleurl2.aaa',
                                ),
                            ),
                        ),
                        array(
                            'ruleConditions' => array(
                                array(
                                    'type' => 'LABEL',
                                    'compareOperator' => 'INCLUDED',
                                    'value' => 'SampleLabel3',
                                ),
                                array(
                                    'type' => 'URL',
                                    'compareOperator' => 'NOT_END_WITH',
                                    'value' => 'sampleurl4.bbb',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);

//xsi:type for targetList of RuleTargetList
$addRuleRetargetingListRequest['operations']['operand'][0]['targetList'] =
    SoapUtils::encodingSoapVar($addRuleRetargetingListRequest['operations']['operand'][0]['targetList'], 'RuleTargetList','RetargetingList' , 'targetList');

//call API
$addRuleRetargetingListResponse = $retargetingListService->invoke('mutate', $addRuleRetargetingListRequest);

//response
if(isset($addRuleRetargetingListResponse->rval->values->retargetingList)){
    $ruleRetargetingList = $addRuleRetargetingListResponse->rval->values->retargetingList;
}else if(isset($addRuleRetargetingListResponse->rval->values[0]->retargetingList)){
    $ruleRetargetingList = $addRuleRetargetingListResponse->rval->values[0]->retargetingList;
}else{
    echo 'Fail to add RetargetingList of Rule.';
    exit();
}

//-----------------------------------------------
// RetargetingListService::mutate(ADD) - Combination
//-----------------------------------------------
//request
$addCombinationRetargetingListRequest = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'targetListType' => 'COMBINATION',
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'targetListName' => 'SampleCombination_CreateOn_'.SoapUtils::getCurrentTimestamp(),
                'description' => 'SampleCombination_CreateOn_'.SoapUtils::getCurrentTimestamp(),
                'targetList' => array(
                    'targetListType' => 'COMBINATION',
                    'combinations' => array(
                        'logicalOperator' => 'AND',
                        'targetLists' => array(
                            array(
                                'targetListId' => $ruleRetargetingList->targetListId,
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);

//xsi:type for targetList of CombinationTargetList
$addCombinationRetargetingListRequest['operations']['operand'][0]['targetList'] =
    SoapUtils::encodingSoapVar($addCombinationRetargetingListRequest['operations']['operand'][0]['targetList'], 'CombinationTargetList','RetargetingList' , 'targetList');

//call API
$addCombinationRetargetingListResponse = $retargetingListService->invoke('mutate', $addCombinationRetargetingListRequest);

//response
if(isset($addCombinationRetargetingListResponse->rval->values->retargetingList)){
    $combinationRetargetingList = $addCombinationRetargetingListResponse->rval->values->retargetingList;
}else if(isset($addCombinationRetargetingListResponse->rval->values[0]->retargetingList)){
    $combinationRetargetingList = $addCombinationRetargetingListResponse->rval->values[0]->retargetingList;
}else{
    echo 'Fail to add RetargetingList of Combination.';
    exit();
}

//-----------------------------------------------
// RetargetingListService::mutate(ADD) - Similarity
//-----------------------------------------------
//get targetingListId of DefaultTargetList
//request
$getDefaultRetargetingListRequest = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'targetListTypes' => array('DEFAULT_LIST'),
        'paging' => array(
            'startIndex' => 1,
            'numberResults' => 20,
        ),
    ),
);

//call API
$getDefaultRetargetingListResponse = $retargetingListService->invoke('get', $getDefaultRetargetingListRequest);

//response
if(isset($getDefaultRetargetingListResponse->rval->values->retargetingList)){
    $defaultRetargetingList = $getDefaultRetargetingListResponse->rval->values->retargetingList;
}else if(isset($getDefaultRetargetingListResponse->rval->values[0]->retargetingList)){
    $defaultRetargetingList = $getDefaultRetargetingListResponse->rval->values[0]->retargetingList;
}else{
    echo 'Fail to get RetargetingList of Default.';
    exit();
}

//request
$addSimilarityRetargetingListRequest = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'targetListType' => 'SIMILARITY',
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'targetListName' => 'SampleSimilarity_CreateOn_'.SoapUtils::getCurrentTimestamp(),
                'description' => 'SampleSimilarity_CreateOn_'.SoapUtils::getCurrentTimestamp(),
                'targetList' => array(
                    'targetListType' => 'SIMILARITY',
                    'targetListId' => $defaultRetargetingList->targetListId,
                ),
            ),
        ),
    ),
);

//xsi:type for targetList of SimilarityTargetList
$addSimilarityRetargetingListRequest['operations']['operand'][0]['targetList'] =
    SoapUtils::encodingSoapVar($addSimilarityRetargetingListRequest['operations']['operand'][0]['targetList'], 'SimilarityTargetList','RetargetingList' , 'targetList');

//call API
$addSimilarityRetargetingListResponse = $retargetingListService->invoke('mutate', $addSimilarityRetargetingListRequest);

//response
if(isset($addSimilarityRetargetingListResponse->rval->values->retargetingList)){
    $similarityRetargetingList = $addSimilarityRetargetingListResponse->rval->values->retargetingList;
}else if(isset($addSimilarityRetargetingListResponse->rval->values[0]->retargetingList)){
    $similarityRetargetingList = $addSimilarityRetargetingListResponse->rval->values[0]->retargetingList;
}else{
    echo 'Fail to add RetargetingList of Similarity.';
    exit();
}

//-----------------------------------------------
// RetargetingListService::get
//-----------------------------------------------
//request
$getRetargetingListRequest = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'targetListTypes' => array('COMBINATION' , 'RULE', 'DEFAULT_LIST', 'SIMILARITY'),
        'paging' => array(
            'startIndex' => 1,
            'numberResults' => 20,
        ),
    ),
);

//call API
$getRetargetingListResponse = $retargetingListService->invoke('get', $getRetargetingListRequest);

//response
if(isset($getRetargetingListResponse->rval->values->retargetingList)){
    $retargetingList = $getRetargetingListResponse->rval->values->retargetingList;
}else if(isset($getRetargetingListResponse->rval->values[0]->retargetingList)){
    $retargetingList = $getRetargetingListResponse->rval->values[0]->retargetingList;
}else{
    echo 'Fail to get RetargetingList.';
    exit();
}

//-----------------------------------------------
// RetargetingListService::mutate(SET) - Rule
//-----------------------------------------------
//request
$setRuleRetargetingListRequest = array(
    'operations' => array(
        'operator' => 'SET',
        'accountId' => SoapUtils::getAccountId(),
        'targetListType' => 'RULE',
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'targetListId' => $ruleRetargetingList->targetListId,
                'targetListName' => 'SampleRule_UpdateOn_'.SoapUtils::getCurrentTimestamp(),
                'description' => 'SampleRule_UpdateOn_'.SoapUtils::getCurrentTimestamp(),
                'targetList' => array(
                    'targetListType' => 'RULE',
                    'rules' => array(
                        array(
                            'ruleConditions' => array(
                                array(
                                    'type' => 'LABEL',
                                    'compareOperator' => 'END_WITH',
                                    'value' => 'SampleLabel1',
                                ),
                                array(
                                    'type' => 'URL',
                                    'compareOperator' => 'EQUAL',
                                    'value' => 'sampleurl2.aaa',
                                ),
                            ),
                        ),
                        array(
                            'ruleConditions' => array(
                                array(
                                    'type' => 'LABEL',
                                    'compareOperator' => 'INCLUDED',
                                    'value' => 'SampleLabel3',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);

//xsi:type for targetList of RuleTargetList
$setRuleRetargetingListRequest['operations']['operand'][0]['targetList'] =
    SoapUtils::encodingSoapVar($setRuleRetargetingListRequest['operations']['operand'][0]['targetList'], 'RuleTargetList','RetargetingList' , 'targetList');

//call API
$setRuleRetargetingListResponse = $retargetingListService->invoke('mutate', $setRuleRetargetingListRequest);

//response
if(isset($setRuleRetargetingListResponse->rval->values->retargetingList)){
    $ruleRetargetingList = $setRuleRetargetingListResponse->rval->values->retargetingList;
}else if(isset($setRuleRetargetingListResponse->rval->values[0]->retargetingList)){
    $ruleRetargetingList = $setRuleRetargetingListResponse->rval->values[0]->retargetingList;
}else{
    echo 'Fail to set RetargetingList of Rule.';
    exit();
}

//-----------------------------------------------
// RetargetingListService::mutate(SET) - Combination
//-----------------------------------------------
//request
$setCombinationRetargetingListRequest = array(
    'operations' => array(
        'operator' => 'SET',
        'accountId' => SoapUtils::getAccountId(),
        'targetListType' => 'COMBINATION',
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'targetListId' => $combinationRetargetingList->targetListId,
                'targetListName' => 'SampleCombination_UpdateOn_'.SoapUtils::getCurrentTimestamp(),
                'description' => 'SampleCombination_UpdateOn_'.SoapUtils::getCurrentTimestamp(),
                'targetList' => array(
                    'targetListType' => 'COMBINATION',
                    'combinations' => array(
                        'logicalOperator' => 'OR',
                        'targetLists' => array(
                            array(
                                'targetListId' => $ruleRetargetingList->targetListId,
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);

//xsi:type for targetList of CombinationTargetList
$setCombinationRetargetingListRequest['operations']['operand'][0]['targetList'] =
    SoapUtils::encodingSoapVar($setCombinationRetargetingListRequest['operations']['operand'][0]['targetList'], 'CombinationTargetList','RetargetingList' , 'targetList');

//call API
$setCombinationRetargetingListResponse = $retargetingListService->invoke('mutate', $setCombinationRetargetingListRequest);

//response
if(isset($setCombinationRetargetingListResponse->rval->values->retargetingList)){
    $combinationRetargetingList = $setCombinationRetargetingListResponse->rval->values->retargetingList;
}else if(isset($setCombinationRetargetingListResponse->rval->values[0]->retargetingList)){
    $combinationRetargetingList = $setCombinationRetargetingListResponse->rval->values[0]->retargetingList;
}else{
    echo 'Fail to set RetargetingList of Combination.';
    exit();
}

//-----------------------------------------------
// RetargetingListService::mutate(SET) - Similarity
//-----------------------------------------------
//request
$setSimilarityRetargetingListRequest = array(
    'operations' => array(
        'operator' => 'SET',
        'accountId' => SoapUtils::getAccountId(),
        'targetListType' => 'SIMILARITY',
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'targetListId' => $similarityRetargetingList->targetListId,
                'targetListName' => 'SampleSimilarity_UpdateOn_'.SoapUtils::getCurrentTimestamp(),
                'description' => 'SampleSimilarity_UpdateOn_'.SoapUtils::getCurrentTimestamp(),
                'targetList' => array(
                    'targetListType' => 'SIMILARITY',
                ),
            ),
        ),
    ),
);

//call API
$setSimilarityRetargetingListResponse = $retargetingListService->invoke('mutate', $setSimilarityRetargetingListRequest);

//response
if(isset($setSimilarityRetargetingListResponse->rval->values->retargetingList)){
    $similarityRetargetingList = $setSimilarityRetargetingListResponse->rval->values->retargetingList;
}else if(isset($setSimilarityRetargetingListResponse->rval->values[0]->retargetingList)){
    $similarityRetargetingList = $setSimilarityRetargetingListResponse->rval->values[0]->retargetingList;
}else{
    echo 'Fail to set RetargetingList of Similarity.';
    exit();
}

//-----------------------------------------------
// RetargetingListService::mutate(REMOVE)
//-----------------------------------------------
//request
$removeRetargetingListRequest = array(
    'operations' => array(
        'operator' => 'REMOVE',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'targetListId' => $combinationRetargetingList->targetListId,
            ),
            array(
                'accountId' => SoapUtils::getAccountId(),
                'targetListId' => $ruleRetargetingList->targetListId,
            ),
            array(
                'accountId' => SoapUtils::getAccountId(),
                'targetListId' => $similarityRetargetingList->targetListId,
            ),
        ),
    ),
);

//call API
$removeRetargetingListResponse = $retargetingListService->invoke('mutate', $removeRetargetingListRequest);

//response
if(isset($removeRetargetingListResponse->rval->values->retargetingList)){
    $removedRetargetingList =$removeRetargetingListResponse->rval->values->retargetingList;
}else if(isset($removeRetargetingListResponse->rval->values[0]->retargetingList)){
    $removedRetargetingList =$removeRetargetingListResponse->rval->values[0]->retargetingList;
}else{
    echo 'Fail to remove RetargetingList.';
    exit();
}
