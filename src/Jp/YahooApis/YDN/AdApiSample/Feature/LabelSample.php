<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Feature;

require_once __DIR__ . '/../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Basic\{
    AdGroup\AdGroupServiceSample,
    AdGroupAd\AdGroupAdServiceSample,
    AdGroupAdLabel\AdGroupAdLabelServiceSample,
    AdGroupLabel\AdGroupLabelServiceSample,
    Campaign\CampaignServiceSample,
    CampaignLabel\CampaignLabelServiceSample,
    Label\LabelServiceSample
};
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201903\{
    AdGroup\Operator as AdGroupOperator,
    AdGroupAd\AdType,
    AdGroupAd\Operator as AdGroupAdOperator,
    AdGroupAdLabel\Operator as AdGroupAdLabelOperator,
    AdGroupLabel\Operator as AdGroupLabelOperator,
    Campaign\CampaignType,
    Campaign\Operator as CampaignOperator,
    CampaignLabel\Operator as CampaignLabelOperator,
    Label\Operator as LabelOperator
};

/**
 * example Label operation and Utility method collection.
 */
class LabelSample
{

    /**
     * example Label operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        // =================================================================
        // Setup
        // =================================================================
        $valuesHolder = new ValuesHolder();
        $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);
        $accountId = SoapUtils::getAccountId();
        $campaignId = null;
        $adGroupId = null;
        $adId = null;
        $labelId = null;

        try {
            // =================================================================
            // CampaignService
            // =================================================================
            // ADD
            $addRequestCampaign = CampaignServiceSample::buildExampleMutateRequest(
                CampaignOperator::ADD, $accountId, [CampaignServiceSample::createExampleStandardCampaign()]
            );
            $addResponseCampaign = CampaignServiceSample::mutate($addRequestCampaign);

            $valuesHolder->setCampaignValuesList($addResponseCampaign->getRval()->getValues());
            $campaignId = $valuesRepositoryFacade->getCampaignValuesRepository()->findCampaignId(CampaignType::STANDARD);

            // GET
            $getRequestCampaign = CampaignServiceSample::buildExampleGetRequest($accountId, [$campaignId]);
            $getRequestCampaign->getSelector()->setContainsLabelIdFlg(true);
            CampaignServiceSample::get($getRequestCampaign);

            // =================================================================
            // AdGroupService
            // =================================================================
            // ADD
            $addRequestAdGroup = AdGroupServiceSample::buildExampleMutateRequest(
                AdGroupOperator::ADD, $accountId, [AdGroupServiceSample::createExampleStandardAdGroup($campaignId)]
            );
            $addResponseAdGroup = AdGroupServiceSample::mutate($addRequestAdGroup);

            $valuesHolder->setAdGroupValuesList($addResponseAdGroup->getRval()->getValues());
            $adGroupId = $valuesRepositoryFacade->getAdGroupValuesRepository()->findAdGroupId($campaignId);

            // GET
            $getRequestAdGroup = AdGroupServiceSample::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getAdGroupValuesRepository()->getAdGroups());
            $getRequestAdGroup->getSelector()->setContainsLabelIdFlg(true);
            AdGroupServiceSample::get($getRequestAdGroup);

            // =================================================================
            // AdGroupAdService
            // =================================================================
            // ADD
            $addRequestAdGroupAd = AdGroupAdServiceSample::buildExampleMutateRequest(
                AdGroupAdOperator::ADD, $accountId, [AdGroupAdServiceSample::createExampleExtendedTextAd($campaignId, $adGroupId),]
            );
            $addResponseAdGroupAd = AdGroupAdServiceSample::mutate($addRequestAdGroupAd);

            $valuesHolder->setAdGroupAdValuesList($addResponseAdGroupAd->getRval()->getValues());
            $adId = $valuesRepositoryFacade->getAdGroupAdValuesRepository()->findAdId($campaignId, $adGroupId, AdType::TEXT_LONG_AD1);

            // GET
            $getRequestAdGroupAd = AdGroupAdServiceSample::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getAdGroupAdValuesRepository()->getAdGroupAds());
            $getRequestAdGroupAd->getSelector()->setContainsLabelIdFlg(true);
            AdGroupAdServiceSample::get($getRequestAdGroupAd);

            // =================================================================
            // LabelService
            // =================================================================
            // ADD
            $addRequestLabel = LabelServiceSample::buildExampleMutateRequest(LabelOperator::ADD, $accountId, [LabelServiceSample::createExampleLabel()]);
            $addResponseLabel = LabelServiceSample::mutate($addRequestLabel);

            $valuesHolder->setLabelValuesList($addResponseLabel->getRval()->getValues());
            $labelId = $valuesRepositoryFacade->getLabelValuesRepository()->getLabelIds()[0];

            // SET
            $setRequestLabel = LabelServiceSample::buildExampleMutateRequest(LabelOperator::SET, $accountId,
                LabelServiceSample::createExampleSetRequest($valuesRepositoryFacade->getLabelValuesRepository()->getLabels())
            );
            LabelServiceSample::mutate($setRequestLabel);

            // GET
            $getRequestLabel = LabelServiceSample::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getLabelValuesRepository()->getLabelIds());
            LabelServiceSample::get($getRequestLabel);

            // =================================================================
            // CampaignLabelService
            // =================================================================
            // ADD
            $addRequestCampaignLabel = CampaignLabelServiceSample::buildExampleMutateRequest(CampaignLabelOperator::ADD, $accountId,
                [CampaignLabelServiceSample::createCampaignLabel($campaignId, $labelId)]
            );
            CampaignLabelServiceSample::mutate($addRequestCampaignLabel);

            // =================================================================
            // CampaignService
            // =================================================================
            // GET
            CampaignServiceSample::get($getRequestCampaign);

            // =================================================================
            // AdGroupLabelService
            // =================================================================
            // ADD
            $addRequestAdGroupLabel = AdGroupLabelServiceSample::buildExampleMutateRequest(AdGroupLabelOperator::ADD, $accountId,
                [AdGroupLabelServiceSample::createAdGroupLabel($campaignId, $adGroupId, $labelId)]
            );
            AdGroupLabelServiceSample::mutate($addRequestAdGroupLabel);

            // =================================================================
            // AdGroupService
            // =================================================================
            // GET
            AdGroupServiceSample::get($getRequestAdGroup);

            // =================================================================
            // AdGroupAdLabelService
            // =================================================================
            // ADD
            $addRequest = AdGroupAdLabelServiceSample::buildExampleMutateRequest(AdGroupAdLabelOperator::ADD, $accountId,
                [AdGroupAdLabelServiceSample::createAdGroupAdLabel($campaignId, $adGroupId, $adId, $labelId)]
            );
            AdGroupAdLabelServiceSample::mutate($addRequest);

            // =================================================================
            // AdGroupAdService
            // =================================================================
            // GET
            AdGroupAdServiceSample::get($getRequestAdGroupAd);

            // =================================================================
            // LabelService
            // =================================================================
            // GET
            LabelServiceSample::get($getRequestLabel);

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;

        } finally {
            // =================================================================
            // Cleanup
            // =================================================================
            LabelServiceSample::cleanup($valuesHolder);
            AdGroupAdServiceSample::cleanup($valuesHolder);
        }
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    LabelSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
