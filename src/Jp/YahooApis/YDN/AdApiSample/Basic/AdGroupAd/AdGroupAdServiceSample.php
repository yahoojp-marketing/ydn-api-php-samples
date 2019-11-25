<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\AdGroupAd;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Basic\AdGroup\AdGroupServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Basic\Media\MediaServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Basic\Video\VideoServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201911\AdGroupAd\{AdGroupAd,
    AdGroupAdOperation,
    AdGroupAdSelector,
    AdGroupAdService,
    BiddingStrategyType,
    ManualCPCAdGroupAdBid,
    AdStyle,
    AdType,
    TextAd,
    DynamicAd,
    ResponsiveVideoAd,
    ButtonText,
    ManualCPVAdGroupAdBid,
    get,
    getResponse,
    mutate,
    mutateResponse,
    Operator,
    UserStatus};
use Jp\YahooApis\YDN\V201911\Campaign\CampaignType;
use Jp\YahooApis\YDN\V201911\Paging;
use Jp\YahooApis\YDN\V201911\{
    Media\Operator as MediaOperator,
    Video\Operator as VideoOperator,
};

/**
 * example AdGroupAdService operation and Utility method collection.
 */
class AdGroupAdServiceSample
{

    const SERVICE_NAME = 'AdGroupAdService';

    /**
     * @var AdGroupAdService
     */
    private static $service = null;

    /**
     * AdGroupAdServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(AdGroupAdService::class);
    }

    /**
     * example get adGroupAds.
     *
     * @param get $request
     * @return getResponse
     * @throws Exception
     */
    public static function get(get $request): getResponse
    {
        self::init();

        // Call API
        $response = self::$service->get($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/get.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/get.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/get.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example mutate adGroupAds.
     *
     * @param mutate $request
     * @return mutateResponse
     * @throws Exception
     */
    public static function mutate(mutate $request): mutateResponse
    {
        self::init();

        // Call API
        $response = self::$service->mutate($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/' . (string)$request->getOperations()->getOperator() . '.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/' . (string)$request->getOperations()->getOperator() . '.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/' . (string)$request->getOperations()->getOperator() . '.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * create basic AdGroupAd.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    public static function create(): ValuesHolder
    {
        $parentValuesHolder = self::setup();
        $parentValuesRepositoryFacade = new ValuesRepositoryFacade($parentValuesHolder);
        $accountId = SoapUtils::getAccountId();

        $campaignId = $parentValuesRepositoryFacade->getCampaignValuesRepository()->findCampaignId(CampaignType::STANDARD);
        $adGroupId = $parentValuesRepositoryFacade->getAdGroupValuesRepository()->findAdGroupId($campaignId);

        $request = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
            self::createExampleExtendedTextAd($campaignId, $adGroupId),
        ]);
        $response = self::mutate($request);

        $selfValuesHolder = new ValuesHolder();
        $selfValuesHolder->setCampaignValuesList($parentValuesHolder->getCampaignValuesList());
        $selfValuesHolder->setAdGroupValuesList($parentValuesHolder->getAdGroupValuesList());
        $selfValuesHolder->setAdGroupAdValuesList($response->getRval()->getValues());
        return $selfValuesHolder;
    }

    /**
     * check & create upper service object.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    private static function setup(): ValuesHolder
    {
        return AdGroupServiceSample::create();
    }

    /**
     * cleanup service object.
     *
     * @param ValuesHolder $valuesHolder
     * @throws Exception
     */
    public static function cleanup(ValuesHolder $valuesHolder): void
    {
        AdGroupServiceSample::cleanup($valuesHolder);
    }

    /**
     * example AdGroupAdService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        // =================================================================
        // Setup
        // =================================================================
        $valuesHolder = new ValuesHolder();
        $accountId = SoapUtils::getAccountId();

        try {
            // =================================================================
            // check & create upper service object.
            // =================================================================
            $valuesHolder = self::setup();
            $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);
            $campaignIdStandard = $valuesRepositoryFacade->getCampaignValuesRepository()->findCampaignId(
                CampaignType::STANDARD
            );
            $campaignIdVideoAd = $valuesRepositoryFacade->getCampaignValuesRepository()->findCampaignIdAdProductType("VIDEO_AD");
            $adGroupIdStandard = $valuesRepositoryFacade->getAdGroupValuesRepository()->findAdGroupId($campaignIdStandard);
            $adGroupIdVideoAd = $valuesRepositoryFacade->getAdGroupValuesRepository()->findAdGroupId($campaignIdVideoAd);

            // =================================================================
            // VideoService Upload
            // =================================================================
            $videoFileName = "videoUploadSample2.mp4";
            $getUploadUrlResponse = VideoServiceSample::getUploadUrl(VideoServiceSample::buildExampleGetUploadUrl($accountId));
            $uploadUrl = $getUploadUrlResponse->getRval()->getValues()[0]->getUploadUrlValue()->getUploadUrl();

            // upload
            $file_path = __DIR__ . '/../../../../../../../upload/' . $videoFileName;
            $uploadResponse = VideoServiceSample::upload($uploadUrl, $file_path);
            if ($uploadResponse === false) {
                exit();
            }
            $uploadResponseObj = json_decode($uploadResponse);
            $videoId = $uploadResponseObj->ResultSet->Result[0]->uploadVideoData->mediaId;

            // =================================================================
            // MediaService ADD
            // =================================================================
            // thumbnail
            $addRequest = MediaServiceSample::buildExampleMutateRequest(MediaOperator::ADD, $accountId, [
                MediaServiceSample::createExampleMedia('ThumbnailMedia1.jpg', false, true),
            ]);

            // run
            $addResponse = MediaServiceSample::mutate($addRequest);
            $valuesHolder->setMediaValuesList($addResponse->getRval()->getValues());
            $thumbnailId = $addResponse->getRval()->getValues()[0]->getMediaRecord()->getMediaId();

            // thumbnail
            $addRequest = MediaServiceSample::buildExampleMutateRequest(MediaOperator::ADD, $accountId, [
                MediaServiceSample::createExampleMedia('LogoMedia1.jpg', true, false),
            ]);

            // run
            $addResponse = MediaServiceSample::mutate($addRequest);
            $valuesHolder->setMediaValuesList($addResponse->getRval()->getValues());
            $logoId = $addResponse->getRval()->getValues()[0]->getMediaRecord()->getMediaId();

            // =================================================================
            // AdGroupAdService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleExtendedTextAd($campaignIdStandard, $adGroupIdStandard),
                self::createExampleResponsiveVideoAd($campaignIdVideoAd, $adGroupIdVideoAd, $thumbnailId, $videoId, $logoId)
            ]);

            // run
            $addResponse = self::mutate($addRequest);
            $valuesHolder->setAdGroupAdValuesList($addResponse->getRval()->getValues());

            // =================================================================
            // AdGroupAdService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getAdGroupAdValuesRepository()->getAdGroupAds());

            // run
            self::get($getRequest);

            // =================================================================
            // AdGroupAdService SET
            // =================================================================
            $adIdResponsiveVideoAd = $valuesRepositoryFacade->getAdGroupAdValuesRepository()->findAdId($campaignIdVideoAd, $adGroupIdVideoAd, AdType::RESPONSIVE_VIDEO_AD);
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId,
                self::createExampleSetRequest($valuesRepositoryFacade->getAdGroupAdValuesRepository()->getAdGroupAds(), $adIdResponsiveVideoAd)
            );

            // run
            self::mutate($setRequest);

            // =================================================================
            // AdGroupAdService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId, $valuesRepositoryFacade->getAdGroupAdValuesRepository()->getAdGroupAds());

            // run
            self::mutate($removeRequest);

            // =================================================================
            // VideoService REMOVE
            // =================================================================
            $removeRequest = VideoServiceSample::buildExampleMutateRequest(
                VideoOperator::REMOVE, $accountId, array(VideoServiceSample::createExampleRemoveRequest($accountId, $videoId))
            );
            VideoServiceSample::mutate($removeRequest);

            // =================================================================
            // MediaService REMOVE
            // =================================================================
            $removeRequest = MediaServiceSample::buildExampleMutateRequest(
                MediaOperator::REMOVE, $accountId, $valuesRepositoryFacade->getMediaValuesRepository()->getMediaRecord()
            );
            MediaServiceSample::mutate($removeRequest);

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;

        } finally {
            // =================================================================
            // Cleanup
            // =================================================================
            self::cleanup($valuesHolder);
        }
    }

    /**
     * example get request.
     *
     * @param int $accountId
     * @param AdGroupAd[] $adGroupAds
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, array $adGroupAds): get
    {
        $selector = new AdGroupAdSelector($accountId);
        $selector->setUserStatuses([
            UserStatus::ACTIVE,
            UserStatus::PAUSED,
        ]);

        if (!is_null($adGroupAds)) {
            $campaignIds = [];
            $adGroupIds = [];
            $adIds = [];
            foreach ($adGroupAds as $adGroupAd) {
                $campaignIds[] = $adGroupAd->getCampaignId();
                $adGroupIds[] = $adGroupAd->getAdGroupId();
                $adIds[] = $adGroupAd->getAdId();
            }
            $selector->setCampaignIds(array_unique($campaignIds));
            $selector->setAdGroupIds(array_unique($adGroupIds));
            $selector->setAdIds($adIds);
        }
        $paging = new Paging(1, 20);
        $selector->setPaging($paging);
        return new get($selector);
    }

    /**
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @param AdGroupAd[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new AdGroupAdOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example ExtendedText Ad request.
     *
     * @param int $campaignId
     * @param int $adGroupId
     * @return AdGroupAd
     */
    public static function createExampleExtendedTextAd(int $campaignId, int $adGroupId): AdGroupAd
    {
        // ad
        $ad = new TextAd();
        $ad->setType(AdType::TEXT_LONG_AD1);
        $ad->setUrl('http://www.yahoo.co.jp/');
        $ad->setDisplayUrl('www.yahoo.co.jp');
        $ad->setHeadline('sample headline');
        $ad->setDescription('sample ad desc');
        $ad->setDescription2('sample ad desc2');

        // bid
        $bid = new ManualCPCAdGroupAdBid();
        $bid->setMaxCpc(50);
        $bid->setType(BiddingStrategyType::MANUAL_CPC);

        // adGroupAd
        $adGroupAd = new AdGroupAd(SoapUtils::getAccountId(), $campaignId, $adGroupId);
        $adGroupAd->setAdStyle(AdStyle::TEXT);
        $adGroupAd->setAdName('SampleExtendedTextAdGroupAd_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $adGroupAd->setUserStatus(UserStatus::ACTIVE);
        $adGroupAd->setBid($bid);
        $adGroupAd->setAd($ad);

        return $adGroupAd;
    }

    /**
     * example Dynamic Ad request.
     *
     * @param int $campaignId
     * @param int $adGroupId
     * @param array $mediaIds
     * @return AdGroupAd
     */
    public static function createExampleDynamicAd(int $campaignId, int $adGroupId, array $mediaIds): AdGroupAd
    {
        // ad
        $ad = new DynamicAd();
        $ad->setType(AdType::DYNAMIC_AD);
        $ad->setDisplayUrl("www.yahoo.co.jp");
        $ad->setUrl("http://www.yahoo.co.jp/");
        $ad->setPrincipal("Principal");
        $ad->setLogoMediaId($mediaIds[0]);
        $ad->setLogoMediaId2($mediaIds[1]);
        $ad->setLogoMediaId3($mediaIds[2]);

        // adGroupAd
        $adGroupAd = new AdGroupAd(SoapUtils::getAccountId(), $campaignId, $adGroupId);
        $adGroupAd->setAdStyle(AdStyle::TEXT);
        $adGroupAd->setAdName('SampleDynamicAd_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $adGroupAd->setUserStatus(UserStatus::ACTIVE);
        $adGroupAd->setAd(ad);

        return $adGroupAd;
    }

    /**
     * example Banner Video Ad request.
     *
     * @param campaignId
     * @param adGroupId
     * @param thumbnailId
     * @param videoId
     * @param logoId
     * @return AdGroupAd
     */
    public static function createExampleResponsiveVideoAd(int $campaignId, int $adGroupId, int $thumbnailId, int $videoId, int $logoId): AdGroupAd
    {
      // ad
      $ad = new ResponsiveVideoAd();
      $ad->setType(AdType::RESPONSIVE_VIDEO_AD);
      $ad->setThumbnailMediaId($thumbnailId);
      $ad->setHeadline("headline");
      $ad->setDescription("description");
      $ad->setDisplayUrl("www.yahoo.co.jp");
      $ad->setUrl("http://www.yahoo.co.jp/");
      $ad->setButtonText(ButtonText::APPLY_NOW);
      $ad->setPrincipal("principal");
      $ad->setLogoMediaId($logoId);

      // bid
      $bid = new ManualCPVAdGroupAdBid();
      $bid->setType(BiddingStrategyType::MANUAL_CPV);
      $bid->setMaxCpv(10000);

      // adGroupAd
      $adGroupAd = new AdGroupAd(SoapUtils::getAccountId(), $campaignId, $adGroupId);
      $adGroupAd->setAdName('SampleDynamicAd_CreateOn_' . SoapUtils::getCurrentTimestamp());
      $adGroupAd->setUserStatus(UserStatus::ACTIVE);
      $adGroupAd->setMediaId($videoId);
      $adGroupAd->setBid($bid);
      $adGroupAd->setAd($ad);

      return $adGroupAd;
    }

    /**
     * example adGroupAd set request.
     *
     * @param AdGroupAd[] $adGroupAds
     * @param int $adIdResponsiveVideoAd
     * @return AdGroupAd[] AdGroupAdOperation entity.
     */
    public static function createExampleSetRequest(array $adGroupAds, int $adIdResponsiveVideoAd): array
    {
        $operands = [];

        // bid
        $bid = new ManualCPCAdGroupAdBid();
        $bid->setMaxCpc(60);
        $bid->setType(BiddingStrategyType::MANUAL_CPC);

        foreach ($adGroupAds as $adGroupAd) {
            if ($adGroupAd->getAdId() == $adIdResponsiveVideoAd) {
                continue;
            }
            $operand = new AdGroupAd($adGroupAd->getAccountId(), $adGroupAd->getCampaignId(), $adGroupAd->getAdGroupId());
            $operand->setAdId($adGroupAd->getAdId());
            $operand->setAdName('UpdateOn_' . $adGroupAd->getAdId() . '_' . SoapUtils::getCurrentTimestamp());
            $operand->setUserStatus(UserStatus::PAUSED);
            $operand->setBid($bid);
            $operands[] = $operand;
        }

        return $operands;
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    AdGroupAdServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
