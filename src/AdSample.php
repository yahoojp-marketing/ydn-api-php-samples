<?php
require_once(dirname(__FILE__) . '/../conf/api_config.php');
require_once(dirname(__FILE__) . '/SoapUtils.class.php');

/**
 * Sample Program for CampaignService, AdGroupService, AdGroupAdService, AdGroupTargetService.
 * Copyright (C) 2012 Yahoo Japan Corporation. All Rights Reserved.
 */

//=================================================================
// CampaignService
//=================================================================
$campaignService = SoapUtils::getService('CampaignService');

//-----------------------------------------------
// CampaignService::mutate(ADD)
//-----------------------------------------------
//request
$addCampaignRequest = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignName' => 'SampleCampaign_CreateOn_' . SoapUtils::getCurrentTimestamp(),
                'userStatus' => 'ACTIVE',
                'startDate' => '20300101',
                'endDate' => '20301231',
                'budget' => array(
                    'amount' => 1000,
                    'deliveryMethod' => 'STANDARD',
                ),
                'biddingStrategy' => array(
                    'type' => 'MANUAL_CPC',
                ),
                'adProductType' => 'TARGET_MATCH',
                'frequencyCap' => array(
                    'level' => 'CAMPAIGN',
                    'timeUnit' => 'WEEK',
                    'impression' => '10',
                ),
            ),
        ),
    ),
);

//xsi:type for biddingStrategy
$addCampaignRequest['operations']['operand'][0]['biddingStrategy'] =
    new SoapVar($addCampaignRequest['operations']['operand'][0]['biddingStrategy'],
        SOAP_ENC_OBJECT, 'ManualCPC', API_NS, 'biddingStrategy', XMLSCHEMANS);

//call API
$addCampaignResponse = $campaignService->invoke('mutate', $addCampaignRequest);

//response
if (isset($addCampaignResponse->rval->values->campaign)) {
    $campaign = $addCampaignResponse->rval->values->campaign;
} else {
    if (isset($addCampaignResponse->rval->values[0]->campaign)) {
        $campaign = $addCampaignResponse->rval->values[0]->campaign;
    } else {
        echo 'Fail to add Campaign.';
        exit();
    }
}

//-----------------------------------------------
// CampaignService::get
//-----------------------------------------------
//request
$getCampaignRequest = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'campaignIds' => array($campaign->campaignId),
        'userStatus' => array('ACTIVE', 'PAUSED'),
        'paging' => array(
            'startIndex' => 1,
            'numberResults' => 20,
        ),
    ),
);

//call API
$getCampaignResponse = $campaignService->invoke('get', $getCampaignRequest);

//response
if (isset($getCampaignResponse->rval->values->campaign)) {
    $campaign = $getCampaignResponse->rval->values->campaign;
} else {
    if (isset($getCampaignResponse->rval->values[0]->campaign)) {
        $campaign = $getCampaignResponse->rval->values[0]->campaign;
    } else {
        echo 'Fail to get Campaign.';
        exit();
    }
}

//-----------------------------------------------
// CampaignService::mutate(SET)
//-----------------------------------------------
//request
$setCampaignRequest = array(
    'operations' => array(
        'operator' => 'SET',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'campaignName' => 'SampleCampaign_UpdateOn_' . SoapUtils::getCurrentTimestamp(),
                'userStatus' => 'PAUSED',
                'startDate' => '20300101',
                'endDate' => '20301231',
                'budget' => array(
                    'amount' => 2000,
                    'deliveryMethod' => 'STANDARD',
                ),
                'biddingStrategy' => array(
                    'type' => 'MANUAL_CPC',
                ),
                'frequencyCap' => array(
                    'level' => 'AD_GROUP',
                    'timeUnit' => 'DAY',
                    'impression' => '5',
                ),
            ),
        ),
    ),
);

//xsi:type for biddingStrategy
$setCampaignRequest['operations']['operand'][0]['biddingStrategy'] =
    new SoapVar($setCampaignRequest['operations']['operand'][0]['biddingStrategy'],
        SOAP_ENC_OBJECT, 'ManualCPC', API_NS, 'biddingStrategy', XMLSCHEMANS);

//call API
$setCampaignResponse = $campaignService->invoke('mutate', $setCampaignRequest);

//response
if (isset($setCampaignResponse->rval->values->campaign)) {
    $campaign = $setCampaignResponse->rval->values->campaign;
} else {
    if (isset($setCampaignResponse->rval->values[0]->campaign)) {
        $campaign = $setCampaignResponse->rval->values[0]->campaign;
    } else {
        echo 'Fail to set Campaign.';
        exit();
    }
}

//=================================================================
// AdGroupService
//=================================================================
$adGroupService = SoapUtils::getService('AdGroupService');

//-----------------------------------------------
// AdGroupService::mutate(ADD)
//-----------------------------------------------
//request
$addAdGroupRequest = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'campaignId' => $campaign->campaignId,
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupName' => 'SampleAdGroup_CreateOn_' . SoapUtils::getCurrentTimestamp(),
                'userStatus' => 'ACTIVE',
                'bid' => array(
                    'type' => 'MANUAL_CPC',
                    'maxCpc' => '120',
                ),
                'device' => 'SMARTPHONE',
                'deviceApp' => 'APP',
                'deviceOs' => 'IOS',
                'smartDeviceCarriers' => 'DOCOMO',
                'dynamicImageExtensions' => 'ACTIVE',
            ),
        ),
    ),
);

//xsi:type for bid
$addAdGroupRequest['operations']['operand'][0]['bid'] =
    new SoapVar($addAdGroupRequest['operations']['operand'][0]['bid'],
        SOAP_ENC_OBJECT, 'ManualCPCAdGroupBid', API_NS, 'bid', XMLSCHEMANS);

//call API
$addAdGroupResponse = $adGroupService->invoke('mutate', $addAdGroupRequest);

//response
if (isset($addAdGroupResponse->rval->values->adGroup)) {
    $adGroup = $addAdGroupResponse->rval->values->adGroup;
} else {
    if (isset($addAdGroupResponse->rval->values[0]->adGroup)) {
        $adGroup = $addAdGroupResponse->rval->values[0]->adGroup;
    } else {
        echo 'Fail to add AdGroup.';
        exit();
    }
}

//-----------------------------------------------
// AdGroupService::get
//-----------------------------------------------
//request
$getAdGroupRequest = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'campaignIds' => array($campaign->campaignId),
        'adGroupIds' => array($adGroup->adGroupId),
        'userStatus' => array('ACTIVE', 'PAUSED'),
        'paging' => array(
            'startIndex' => 1,
            'numberResults' => 20,
        ),
    ),
);

//call API
$getAdGroupResponse = $adGroupService->invoke('get', $getAdGroupRequest);

//response
if (isset($getAdGroupResponse->rval->values->adGroup)) {
    $adGroup = $getAdGroupResponse->rval->values->adGroup;
} else {
    if (isset($getAdGroupResponse->rval->values[0]->adGroup)) {
        $adGroup = $getAdGroupResponse->rval->values[0]->adGroup;
    } else {
        echo 'Fail to get AdGroup.';
        exit();
    }
}

//-----------------------------------------------
// AdGroupService::mutate(SET)
//-----------------------------------------------
//request
$setAdGroupRequest = array(
    'operations' => array(
        'operator' => 'SET',
        'accountId' => SoapUtils::getAccountId(),
        'campaignId' => $campaign->campaignId,
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'adGroupName' => 'SampleAdGroup_UpdateOn_' . SoapUtils::getCurrentTimestamp(),
                'userStatus' => 'PAUSED',
                'bid' => array(
                    'type' => 'MANUAL_CPC',
                    'maxCpc' => '110',
                ),
                'dynamicImageExtensions' => 'PAUSED',
                'device' => array(
                    'TABLET', 'SMARTPHONE'
                ),
                'deviceApp' => array(
                    'APP', 'WEB'
                ),
                'deviceOs' => array(
                    'IOS', 'ANDROID'
                ),
                'smartDeviceCarriers' => array(
                    'DOCOMO', 'KDDI', 'SOFTBANK'
                )
            ),
        ),
    ),
);

//xsi:type for bid
$setAdGroupRequest['operations']['operand'][0]['bid'] =
    new SoapVar($setAdGroupRequest['operations']['operand'][0]['bid'],
        SOAP_ENC_OBJECT, 'ManualCPCAdGroupBid', API_NS, 'bid', XMLSCHEMANS);

//call API
$setAdGroupResponse = $adGroupService->invoke('mutate', $setAdGroupRequest);

//response
if (isset($setAdGroupResponse->rval->values->adGroup)) {
    $adGroup = $setAdGroupResponse->rval->values->adGroup;
} else {
    if (isset($setAdGroupResponse->rval->values[0]->adGroup)) {
        $adGroup = $setAdGroupResponse->rval->values[0]->adGroup;
    } else {
        echo 'Fail to set AdGroup.';
        exit();
    }
}

//=================================================================
// AdGroupAdService
//=================================================================
$adGroupAdService = SoapUtils::getService('AdGroupAdService');

//-----------------------------------------------
// AdGroupAdService::mutate(ADD)
//-----------------------------------------------
//request
$addAdGroupAdRequest = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'adName' => 'SampleAd_CreateOn_' . SoapUtils::getCurrentTimestamp(),
                'adStyle' => 'TEXT',
                'userStatus' => 'ACTIVE',
                'bid' => array(
                    'type' => 'MANUAL_CPC',
                    'maxCpc' => '50',
                ),
                'ad' => array(
                    'type' => 'TEXT_LONG_AD1',
                    'url' => 'http://www.yahoo.co.jp/',
                    'displayUrl' => 'www.yahoo.co.jp',
                    'headline' => 'sample headline',
                    'description' => 'sample ad desc',
                    'description2' => 'sample ad desc2',
                )
            ),
        ),
    ),
);

//xsi:type for bid
$addAdGroupAdRequest['operations']['operand'][0]['bid'] =
    new SoapVar($addAdGroupAdRequest['operations']['operand'][0]['bid'],
        SOAP_ENC_OBJECT, 'ManualCPCAdGroupAdBid', API_NS, 'bid', XMLSCHEMANS);

//xsi:type for ad
$addAdGroupAdRequest['operations']['operand'][0]['ad'] =
    new SoapVar($addAdGroupAdRequest['operations']['operand'][0]['ad'],
        SOAP_ENC_OBJECT, 'TextAd', API_NS, 'ad', XMLSCHEMANS);

//call API
$addAdGroupAdResponse = $adGroupAdService->invoke('mutate', $addAdGroupAdRequest);

//response
if (isset($addAdGroupAdResponse->rval->values->adGroupAd)) {
    $adGroupAd = $addAdGroupAdResponse->rval->values->adGroupAd;
} else {
    if (isset($addAdGroupAdResponse->rval->values[0]->adGroupAd)) {
        $adGroupAd = $addAdGroupAdResponse->rval->values[0]->adGroupAd;
    } else {
        echo 'Fail to add AdGroupAd.';
        exit();
    }
}

//-----------------------------------------------
// AdGroupAdService::get
//-----------------------------------------------
//request
$getAdGroupAdRequest = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'campaignIds' => array($campaign->campaignId),
        'adGroupIds' => array($adGroup->adGroupId),
        'adIds' => array($adGroupAd->adId),
        'userStatus' => array('ACTIVE', 'PAUSED'),
        'paging' => array(
            'startIndex' => 1,
            'numberResults' => 20,
        ),
    ),
);

//call API
$getAdGroupAdResponse = $adGroupAdService->invoke('get', $getAdGroupAdRequest);

//response
if (isset($getAdGroupAdResponse->rval->values->adGroupAd)) {
    $adGroupAd = $getAdGroupAdResponse->rval->values->adGroupAd;
} else {
    if (isset($getAdGroupAdResponse->rval->values[0]->adGroupAd)) {
        $adGroupAd = $getAdGroupAdResponse->rval->values[0]->adGroupAd;
    } else {
        echo 'Fail to get AdGroupAd.';
        exit();
    }
}

//sleep 10 second for review
echo "\n***** sleep 10 seconds for ad review *****\n";
sleep(10);

//-----------------------------------------------
// AdGroupAdService::mutate(SET)
//-----------------------------------------------
//request
$setAdGroupAdRequest = array(
    'operations' => array(
        'operator' => 'SET',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'adId' => $adGroupAd->adId,
                'adName' => 'SampleAd_UpdateOn_' . SoapUtils::getCurrentTimestamp(),
                'userStatus' => 'PAUSED',
                'bid' => array(
                    'type' => 'MANUAL_CPC',
                    'maxCpc' => '60',
                ),
                'ad' => array(
                    'type' => 'TEXT_LONG_AD1',
                    'url' => 'http://www.yahoo.co.jp/',
                    'displayUrl' => 'www.yahoo.co.jp',
                    'headline' => 'sample headline',
                    'description' => 'sample ad desc',
                    'description2' => 'sample ad desc2',
                )
            ),
        ),
    ),
);

//xsi:type for bid
$setAdGroupAdRequest['operations']['operand'][0]['bid'] =
    new SoapVar($setAdGroupAdRequest['operations']['operand'][0]['bid'],
        SOAP_ENC_OBJECT, 'ManualCPCAdGroupAdBid', API_NS, 'bid', XMLSCHEMANS);

//xsi:type for ad
$setAdGroupAdRequest['operations']['operand'][0]['ad'] =
    new SoapVar($setAdGroupAdRequest['operations']['operand'][0]['ad'],
        SOAP_ENC_OBJECT, 'TextAd', API_NS, 'ad', XMLSCHEMANS);

//call API
$setAdGroupAdResponse = $adGroupAdService->invoke('mutate', $setAdGroupAdRequest);

//response
if (isset($setAdGroupAdResponse->rval->values->adGroupAd)) {
    $adGroupAd = $setAdGroupAdResponse->rval->values->adGroupAd;
} else {
    if (isset($setAdGroupAdResponse->rval->values[0]->adGroupAd)) {
        $adGroupAd = $setAdGroupAdResponse->rval->values[0]->adGroupAd;
    } else {
        echo 'Fail to set AdGroupAd.';
        exit();
    }
}

//=================================================================
// AdGroupTargetService
//=================================================================
$adGroupTargetService = SoapUtils::getService('AdGroupTargetService');

//-----------------------------------------------
// AdGroupTargetService::mutate(ADD) AD_SCHEDULE_TARGET
//-----------------------------------------------
//request
$addScheduleAdGroupTargetRequest = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'campaignId' => $campaign->campaignId,
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'bidMultiplier' => 1.15,
                'target' => array(
                    'type' => 'AD_SCHEDULE_TARGET',
                    'dayOfWeek' => 'MONDAY',
                    'startHour' => '13',
                    'endHour' => '14',
                )
            ),
        ),
    ),
);

//xsi:type for targets of AdScheduleTarget
$addScheduleAdGroupTargetRequest['operations']['operand'][0]['target'] =
    new SoapVar($addScheduleAdGroupTargetRequest['operations']['operand'][0]['target'],
        SOAP_ENC_OBJECT, 'AdScheduleTarget', API_NS, 'target', XMLSCHEMANS);
//call API
$addScheduleAdGroupTargetResponse = $adGroupTargetService->invoke('mutate', $addScheduleAdGroupTargetRequest);

//response
if (isset($addScheduleAdGroupTargetResponse->rval->values->adGroupTargetList)) {
    $scheduleTargetList = $addScheduleAdGroupTargetResponse->rval->values->adGroupTargetList;
} else {
    if (isset($addScheduleAdGroupTargetResponse->rval->values[0]->adGroupTargetList)) {
        $scheduleTargetList = $addScheduleAdGroupTargetResponse->rval->values[0]->adGroupTargetList;
    } else {
        echo 'Fail to add AdGroupTarget of . AD_SCHEDULE_TARGET';
        exit();
    }
}

//-----------------------------------------------
// AdGroupTargetService::mutate(ADD) AGE_TARGET
//-----------------------------------------------
//request
$addAgeAdGroupTargetRequest = array(
    'operations' => array(
        'operator' => 'ADD',
        'accountId' => SoapUtils::getAccountId(),
        'campaignId' => $campaign->campaignId,
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'bidMultiplier' => 1.35,
                'target' => array(
                    'type' => 'AGE_TARGET',
                    'age' => 'GT_UNKNOWN',
                ),
            )
        ),
    ),
);

//xsi:type for targets of AgeTarget
$addAgeAdGroupTargetRequest['operations']['operand'][0]['target'] =
    new SoapVar($addAgeAdGroupTargetRequest['operations']['operand'][0]['target'],
        SOAP_ENC_OBJECT, 'AgeTarget', API_NS, 'target', XMLSCHEMANS);

//call API
$addAgeAdGroupTargetResponse = $adGroupTargetService->invoke('mutate', $addAgeAdGroupTargetRequest);

//response
if (isset($addAgeAdGroupTargetResponse->rval->values->adGroupTargetList)) {
    $ageTargetList = $addAgeAdGroupTargetResponse->rval->values->adGroupTargetList;
} else {
    if (isset($addAgeAdGroupTargetResponse->rval->values[0]->adGroupTargetList)) {
        $ageTargetList = $addAgeAdGroupTargetResponse->rval->values[0]->adGroupTargetList;
    } else {
        echo 'Fail to set AdGroupTarget of AGE_TARGET.';
        exit();
    }
}

//-----------------------------------------------
// AdGroupTargetService::mutate(SET)
//-----------------------------------------------
//request
$setAdGroupTargetRequest = array(
    'operations' => array(
        'operator' => 'SET',
        'accountId' => SoapUtils::getAccountId(),
        'campaignId' => $campaign->campaignId,
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'bidMultiplier' => 1.95,
                'target' => array(
                    'targetId'=> $scheduleTargetList->target->targetId,
                    'type' => 'AD_SCHEDULE_TARGET',
                )
            ),
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'bidMultiplier' => 0.25,
                'target' => array(
                    'targetId'=> $ageTargetList->target->targetId,
                    'type' => 'AGE_TARGET',
                )
            )
        ),
    ),
);

//xsi:type for targets of AdScheduleTarget
$setAdGroupTargetRequest['operations']['operand'][0]['target'] =
    new SoapVar($setAdGroupTargetRequest['operations']['operand'][0]['target'],
        SOAP_ENC_OBJECT, 'AdScheduleTarget', API_NS, 'target', XMLSCHEMANS);
//xsi:type for targets of AgeTarget
$setAdGroupTargetRequest['operations']['operand'][1]['target'] =
    new SoapVar($setAdGroupTargetRequest['operations']['operand'][1]['target'],
        SOAP_ENC_OBJECT, 'AgeTarget', API_NS, 'target', XMLSCHEMANS);

//call API
$setAdGroupTargetResponse = $adGroupTargetService->invoke('mutate', $setAdGroupTargetRequest);

//response
if (isset($setAdGroupTargetResponse->rval->values->adGroupTargetList)) {
    $targetList = $setAdGroupTargetResponse->rval->values->adGroupTargetList;
} else {
    if (isset($setAdGroupTargetResponse->rval->values[0]->adGroupTargetList)) {
        $targetList = $setAdGroupTargetResponse->rval->values[0]->adGroupTargetList;
    } else {
        echo 'Fail to set AdGroupTarget.';
        exit();
    }
}

//-----------------------------------------------
// AdGroupTargetService::replace
//-----------------------------------------------
//request
$replaceGenderAdGroupTargetRequest = array(
    'operations' => array(
        'accountId' => SoapUtils::getAccountId(),
        'campaignId' => $campaign->campaignId,
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'bidMultiplier' => 1.101,
                'target' => array(
                    'type' => 'GENDER_TARGET',
                    'gender' => 'ST_MALE',
                ),
            )
        ),
    ),
);

//xsi:type for targets of AgeTarget
$replaceGenderAdGroupTargetRequest['operations']['operand'][0]['target'] =
    new SoapVar($replaceGenderAdGroupTargetRequest['operations']['operand'][0]['target'],
        SOAP_ENC_OBJECT, 'GenderTarget', API_NS, 'target', XMLSCHEMANS);

//call API
$replaceGenderAdGroupTargetResponse = $adGroupTargetService->invoke('replace', $replaceGenderAdGroupTargetRequest);

//response
if (isset($replaceGenderAdGroupTargetResponse->rval->values->adGroupTargetList)) {
    $replaceTargetList = $replaceGenderAdGroupTargetResponse->rval->values->adGroupTargetList;
} else {
    if (isset($replaceGenderAdGroupTargetResponse->rval->values[0]->adGroupTargetList)) {
        $replaceTargetList = $replaceGenderAdGroupTargetResponse->rval->values[0]->adGroupTargetList;
    } else {
        echo 'Fail to replace AdGroupTarget.';
        exit();
    }
}

//-----------------------------------------------
// AdGroupTargetService::replace(remove)
//-----------------------------------------------
//request
$replaceGenderAdGroupTargetRequest = array(
    'operations' => array(
        'accountId' => SoapUtils::getAccountId(),
        'campaignId' => $campaign->campaignId,
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'target' => array(
                    'type' => 'GENDER_TARGET',
                    'isRemove' => true,
                ),
            )
        ),
    ),
);

//xsi:type for targets of AgeTarget
$replaceGenderAdGroupTargetRequest['operations']['operand'][0]['target'] =
    new SoapVar($replaceGenderAdGroupTargetRequest['operations']['operand'][0]['target'],
        SOAP_ENC_OBJECT, 'GenderTarget', API_NS, 'target', XMLSCHEMANS);

//call API
$replaceGenderAdGroupTargetResponse = $adGroupTargetService->invoke('replace', $replaceGenderAdGroupTargetRequest);

//-----------------------------------------------
// AdGroupTargetService::get
//-----------------------------------------------
//request
$getAdGroupTargetRequest = array(
    'selector' => array(
        'accountId' => SoapUtils::getAccountId(),
        'campaignIds' => array($campaign->campaignId),
        'adGroupIds' => array($adGroup->adGroupId),
        'paging' => array(
            'startIndex' => 1,
            'numberResults' => 20,
        ),
    ),
);

//call API
$getAdGroupTargetResponse = $adGroupTargetService->invoke('get', $getAdGroupTargetRequest);

//response
if (isset($getAdGroupTargetResponse->rval->values->adGroupTargetList)) {
    $targetList = $getAdGroupTargetResponse->rval->values->adGroupTargetList;
} else {
    if (isset($getAdGroupTargetResponse->rval->values[0]->adGroupTargetList)) {
        $targetList = $getAdGroupTargetResponse->rval->values[0]->adGroupTargetList;
    } else {
        echo 'Fail to get AdGroupTarget.';
        exit();
    }
}

//=================================================================
// remove AdGroupAd, AdGroup, Campaign
//=================================================================
//-----------------------------------------------
// AdGroupAdService::mutate(REMOVE)
//-----------------------------------------------
//request
$removeAdGroupAdRequest = array(
    'operations' => array(
        'operator' => 'REMOVE',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'adId' => $adGroupAd->adId,
            ),
        ),
    ),
);

//call API
$removeAdGroupAdResponse = $adGroupAdService->invoke('mutate', $removeAdGroupAdRequest);

//response
if (isset($removeAdGroupAdResponse->rval->values->adGroupAd)) {
    $removedAdGroupAd = $removeAdGroupAdResponse->rval->values->adGroupAd;
} else {
    if (isset($removeAdGroupAdResponse->rval->values[0]->adGroupAd)) {
        $removedAdGroupAd = $removeAdGroupAdResponse->rval->values[0]->adGroupAd;
    } else {
        echo 'Fail to remove AdGroupAd.';
        exit();
    }
}

//-----------------------------------------------
// AdGroupTargetService::mutate(REMOVE)
//-----------------------------------------------
//request
$removeAdGroupTargetRequest = array(
    'operations' => array(
        'operator' => 'REMOVE',
        'accountId' => SoapUtils::getAccountId(),
        'campaignId' => $campaign->campaignId,
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'bidMultiplier' => 1.95,
                'target' => array(
                    'targetId'=> $scheduleTargetList->target->targetId,
                    'type' => 'AD_SCHEDULE_TARGET',
                )
            ),
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
                'bidMultiplier' => 0.25,
                'target' => array(
                    'targetId'=> $ageTargetList->target->targetId,
                    'type' => 'AGE_TARGET',
                )
            )
        ),
    ),
);

//xsi:type for targets of AdScheduleTarget
$removeAdGroupTargetRequest['operations']['operand'][0]['target'] =
    new SoapVar($removeAdGroupTargetRequest['operations']['operand'][0]['target'],
        SOAP_ENC_OBJECT, 'AdScheduleTarget', API_NS, 'target', XMLSCHEMANS);
//xsi:type for targets of AgeTarget
$removeAdGroupTargetRequest['operations']['operand'][1]['target'] =
    new SoapVar($removeAdGroupTargetRequest['operations']['operand'][1]['target'],
        SOAP_ENC_OBJECT, 'AgeTarget', API_NS, 'target', XMLSCHEMANS);

//call API
$removeAdGroupTargetResponse = $adGroupTargetService->invoke('mutate', $removeAdGroupTargetRequest);

//response
if (isset($removeAdGroupTargetResponse->rval->values->adGroupTargetList)) {
    $targetList = $removeAdGroupTargetResponse->rval->values->adGroupTargetList;
} else {
    if (isset($removeAdGroupTargetResponse->rval->values[0]->adGroupTargetList)) {
        $targetList = $removeAdGroupTargetResponse->rval->values[0]->adGroupTargetList;
    } else {
        echo 'Fail to remove AdGroupTarget.';
        exit();
    }
}

//-----------------------------------------------
// AdGroupService::mutate(REMOVE)
//-----------------------------------------------
//request
$removeAdGroupRequest = array(
    'operations' => array(
        'operator' => 'REMOVE',
        'accountId' => SoapUtils::getAccountId(),
        'campaignId' => $campaign->campaignId,
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
                'adGroupId' => $adGroup->adGroupId,
            ),
        ),
    ),
);

//call API
$removeAdGroupResponse = $adGroupService->invoke('mutate', $removeAdGroupRequest);

//response
if (isset($removeAdGroupResponse->rval->values->adGroup)) {
    $removedAdGroup = $removeAdGroupResponse->rval->values->adGroup;
} else {
    if (isset($removeAdGroupResponse->rval->values[0]->adGroup)) {
        $removedAdGroup = $removeAdGroupResponse->rval->values[0]->adGroup;
    } else {
        echo 'Fail to remove AdGroup.';
        exit();
    }
}

//-----------------------------------------------
// CampaignService::mutate(REMOVE)
//-----------------------------------------------
//request
$removeCampaignRequest = array(
    'operations' => array(
        'operator' => 'REMOVE',
        'accountId' => SoapUtils::getAccountId(),
        'operand' => array(
            array(
                'accountId' => SoapUtils::getAccountId(),
                'campaignId' => $campaign->campaignId,
            ),
        ),
    ),
);

//call API
$removeCampaignResponse = $campaignService->invoke('mutate', $removeCampaignRequest);

//response
if (isset($removeCampaignResponse->rval->values->campaign)) {
    $removedCampaign = $removeCampaignResponse->rval->values->campaign;
} else {
    if (isset($removeCampaignResponse->rval->values[0]->campaign)) {
        $removedCampaign = $removeCampaignResponse->rval->values[0]->campaign;
    } else {
        echo 'Fail to remove Campaign.';
        exit();
    }
}

