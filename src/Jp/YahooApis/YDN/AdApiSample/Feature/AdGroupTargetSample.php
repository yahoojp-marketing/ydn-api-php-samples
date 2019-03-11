<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Feature;

require_once __DIR__ . '/../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Basic\{AdGroup\AdGroupServiceSample,
    AdGroupAd\AdGroupAdServiceSample,
    AdGroupTarget\AdGroupTargetServiceSample,
    Campaign\CampaignServiceSample,
    Dictionary\DictionaryServiceSample,
    PlacementUrlIdea\PlacementUrlIdeaServiceSample,
    PlacementUrlList\PlacementUrlListServiceSample};
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201903\{
    AdGroup\Operator as AdGroupOperator,
    AdGroupTarget\Operator as AdGroupTargetOperator,
    AdGroupAd\Operator as AdGroupAdOperator,
    Campaign\CampaignType,
    Campaign\Operator as CampaignOperator,
    PlacementUrlList\Operator as PlacementUrlListOperator,
};

/**
 * example AdGroupTarget operation and Utility method collection.
 */
class AdGroupTargetSample
{

    /**
     * example AdGroupTarget operation.
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
        $urlList = null;

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

            // =================================================================
            // PlacementUrlIdeaService
            // =================================================================
            // GET
            $getRequestPlacementUrlIdea = PlacementUrlIdeaServiceSample::buildExampleGetRequest();
            $getResponsePlacementUrlIdea = PlacementUrlIdeaServiceSample::get($getRequestPlacementUrlIdea);
            $valuesHolder->setPlacementUrlIdeaValuesList($getResponsePlacementUrlIdea->getRval()->getValues());
            $urlList = PlacementUrlListServiceSample::getUrlList($valuesHolder);

            // =================================================================
            // PlacementUrlListService
            // =================================================================
            // ADD
            $addRequestPlacementUrlList = PlacementUrlListServiceSample::buildExampleMutateRequest(
                PlacementUrlListOperator::ADD, $accountId, [PlacementUrlListServiceSample::createExamplePlacementUrlList($urlList)]
            );
            $addResponsePlacementUrlList = PlacementUrlListServiceSample::mutate($addRequestPlacementUrlList);
            $valuesHolder->setPlacementUrlListValuesList($addResponsePlacementUrlList->getRval()->getValues());

            // =================================================================
            // DictionaryService
            // =================================================================
            // GET
            $getRequestDictionary = DictionaryServiceSample::buildExampleGetInterestCategoryRequest();
            $getResponseDictionary = DictionaryServiceSample::getInterestCategory($getRequestDictionary);

            // =================================================================
            // AdGroupTargetService
            // =================================================================
            // ADD
            $addRequestAdGroupTarget = AdGroupTargetServiceSample::buildExampleMutateRequest(AdGroupTargetOperator::ADD, $accountId, [
                AdGroupTargetServiceSample::createExamplePlacementTarget($campaignId, $adGroupId, $valuesRepositoryFacade->getPlacementUrlListValuesRepository()->getPlacementUrlIdLists()[0]),
                AdGroupTargetServiceSample::createExampleInterestCategoryTarget($campaignId, $adGroupId, $getResponseDictionary->getRval()->getValues()[0]->getCategory()->getChild()[0]->getCode()),
                AdGroupTargetServiceSample::createExampleAgeTarget($campaignId, $adGroupId),
            ]);
            AdGroupTargetServiceSample::mutate($addRequestAdGroupTarget);

            // =================================================================
            // AdGroupAdService
            // =================================================================
            // ADD
            $addRequestAdGroupAd = AdGroupAdServiceSample::buildExampleMutateRequest(AdGroupAdOperator::ADD, $accountId, [
                AdGroupAdServiceSample::createExampleExtendedTextAd($campaignId, $adGroupId),
            ]);
            AdGroupAdServiceSample::mutate($addRequestAdGroupAd);


        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;

        } finally {
            // =================================================================
            // Cleanup
            // =================================================================
            PlacementUrlListServiceSample::cleanup($valuesHolder);
            AdGroupAdServiceSample::cleanup($valuesHolder);
        }
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    AdGroupTargetSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
