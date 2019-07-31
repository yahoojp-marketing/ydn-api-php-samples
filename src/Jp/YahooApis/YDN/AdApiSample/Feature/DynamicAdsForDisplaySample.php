<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Feature;

require_once __DIR__ . '/../../../../../../vendor/autoload.php';

use Exception;
use DOMDocument;
use Jp\YahooApis\YDN\AdApiSample\Basic\{AdGroup\AdGroupServiceSample,
    AdGroupAd\AdGroupAdServiceSample,
    Campaign\CampaignServiceSample,
    FeedData\FeedDataServiceSample,
    FeedHolder\FeedHolderServiceSample,
    FeedSet\FeedSetServiceSample,
    Media\MediaServiceSample};
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201907\{
    AdGroupAd\Operator as AdGroupAdOperator,
    Campaign\CampaignType,
    Campaign\Operator as CampaignOperator,
    FeedHolder\Operator as FeedHolderOperator,
    Media\LogoFlg,
    Media\Operator as MediaOperator};
use Jp\YahooApis\YDN\V201907\{
    AdGroup\Operator as AdGroupOperator,
    FeedSet\Operator as FeedSetOperator};

/**
 * example DynamicAdsForDisplay operation and Utility method collection.
 */
class DynamicAdsForDisplaySample
{
    /**
     * example DynamicAdsForDisplay operation.
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

        $fileName = 'feedDataUploadSample.zip';

        try {
            // =================================================================
            // FeedHolderService
            // =================================================================
            // ADD
            $addRequestFeedHolder = FeedHolderServiceSample::buildExampleMutateRequest(
                FeedHolderOperator::ADD, $accountId, [FeedHolderServiceSample::createExampleFeedHolderRecordRequest($accountId)]
            );
            $addResponseFeedHolder = FeedHolderServiceSample::mutate($addRequestFeedHolder);
            $valuesHolder->setFeedHolderValuesList($addResponseFeedHolder->getRval()->getValues());
            $feedHolderId = $valuesRepositoryFacade->getFeedHolderValuesRepository()->getFeedHolderIds()[0];

            // =================================================================
            // FeedDataService
            // =================================================================
            // getUploadUrl
            $getUploadUrlRequest = FeedDataServiceSample::buildExampleGetUploadUrlRequest($accountId, $feedHolderId);
            $getUploadUrlResponse = FeedDataServiceSample::getUploadUrl($getUploadUrlRequest);
            $uploadUrl = $getUploadUrlResponse->getRval()->getUploadUrl();

            // upload
            $uploadResponse = SoapUtils::upload($uploadUrl, $fileName);
            if ($uploadResponse === false) {
                exit();
            }
            $doc = new DOMDocument();
            $doc->loadXML($uploadResponse);
            $nodeList = $doc->getElementsByTagName('itemListUploadId');
            $itemListUploadId = $nodeList->item(0)->nodeValue;

            // check job status
            FeedDataServiceSample::checkUploadStatus([$feedHolderId], [$itemListUploadId]);

            // =================================================================
            // FeedSetService
            // =================================================================
            $addRequestFeedSet = FeedSetServiceSample::buildExampleMutateRequest(
                FeedSetOperator::ADD, $accountId, [FeedSetServiceSample::createExampleFeedSetRequest($feedHolderId)]
            );
            $addResponseFeedSet = FeedSetServiceSample::mutate($addRequestFeedSet);
            $feedSetId = $addResponseFeedSet->getRval()->getValues()[0]->getFeedSet()->getFeedSetId();

            // =================================================================
            // MediaService
            // =================================================================
            $mediaIds = [];

            // ADD(Logo1)
            $addRequestMedia1 = MediaServiceSample::buildExampleMutateRequest(MediaOperator::ADD, $accountId, [
                              MediaServiceSample::createExampleMedia('LogoMedia1.jpg', LogoFlg::TRUE)
            ]);
            $addResponseMedia1 = MediaServiceSample::mutate($addRequestMedia1);
            $valuesHolder->setMediaValuesList($addResponseMedia1->getRval()->getValues());
            $mediaIds[] = $addResponseMedia1->getRval()->getValues()[0]->getMediaRecord()->getMediaId();

            // ADD(Logo2)
            $addRequestMedia2 = MediaServiceSample::buildExampleMutateRequest(MediaOperator::ADD, $accountId, [
                MediaServiceSample::createExampleMedia('LogoMedia2.jpg', LogoFlg::TRUE)
            ]);
            $addResponseMedia2 = MediaServiceSample::mutate($addRequestMedia2);
            $valuesHolder->setMediaValuesList($addResponseMedia2->getRval()->getValues());
            $mediaIds[] = $addResponseMedia2->getRval()->getValues()[0]->getMediaRecord()->getMediaId();

            // ADD(Logo3)
            $addRequestMedia3 = MediaServiceSample::buildExampleMutateRequest(MediaOperator::ADD, $accountId, [
                MediaServiceSample::createExampleMedia('LogoMedia3.jpg', LogoFlg::TRUE)
            ]);
            $addResponseMedia3 = MediaServiceSample::mutate($addRequestMedia3);
            $valuesHolder->setMediaValuesList($addResponseMedia3->getRval()->getValues());
            $mediaIds[] = $addResponseMedia3->getRval()->getValues()[0]->getMediaRecord()->getMediaId();

            // sleep 60 second.
            print PHP_EOL . '***** sleep 60 seconds *****' . PHP_EOL;
            sleep(60);

            // =================================================================
            // CampaignService
            // =================================================================
            // ADD
            $addRequestCampaign = CampaignServiceSample::buildExampleMutateRequest(
                CampaignOperator::ADD, $accountId, [CampaignServiceSample::createExampleDynamicAdsForDisplayCampaign($feedHolderId)]
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
            $addRequestAdGroup->getOperations()->getOperand()[0]->setFeedSetId($feedSetId);
            $addResponseAdGroup = AdGroupServiceSample::mutate($addRequestAdGroup);
            $valuesHolder->setAdGroupValuesList($addResponseAdGroup->getRval()->getValues());
            $adGroupId = $valuesRepositoryFacade->getAdGroupValuesRepository()->findAdGroupId($campaignId);

            // =================================================================
            // AdGroupAdService
            // =================================================================
            // ADD
            $addRequestAdGroupAd = AdGroupAdServiceSample::buildExampleMutateRequest(
                AdGroupAdOperator::ADD, $accountId, [AdGroupAdServiceSample::createExampleDynamicAd($campaignId, $adGroupId, $mediaIds),]
            );
            $addResponseAdGroupAd = AdGroupAdServiceSample::mutate($addRequestAdGroupAd);
            $valuesHolder->setAdGroupAdValuesList($addResponseAdGroupAd->getRval()->getValues());

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;

        } finally {
            // =================================================================
            // Cleanup
            // =================================================================
            MediaServiceSample::cleanup($valuesHolder);
            CampaignServiceSample::cleanup($valuesHolder);
            FeedHolderServiceSample::cleanup($valuesHolder);
        }
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    DynamicAdsForDisplaySample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
