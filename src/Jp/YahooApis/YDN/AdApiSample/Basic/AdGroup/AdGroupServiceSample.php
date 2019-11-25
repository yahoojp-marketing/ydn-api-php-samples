<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\AdGroup;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Basic\Campaign\CampaignServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201911\AdGroup\{AdGroup,
    AdGroupBiddingStrategy,
    AdGroupConversionOptimizerType,
    AdGroupOperation,
    AdGroupSelector,
    AdGroupService,
    BiddingStrategyType,
    DeviceAppType,
    DeviceOsType,
    DeviceType,
    DynamicImageExtensions,
    get,
    getResponse,
    ManualCPCAdGroupBid,
    ManualCPVAdGroupBid,
    mutate,
    mutateResponse,
    NoneAdGroupConversionOptimizer,
    Operator,
    SmartDeviceCarrier,
    UserStatus};
use Jp\YahooApis\YDN\V201911\Campaign\CampaignType;
use Jp\YahooApis\YDN\V201911\Paging;

/**
 * example AdGroupService operation and Utility method collection.
 */
class AdGroupServiceSample
{

    const SERVICE_NAME = 'AdGroupService';

    /**
     * @var AdGroupService
     */
    private static $service = null;

    /**
     * AdGroupServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(AdGroupService::class);
    }

    /**
     * example get adGroups.
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
     * example mutate adGroups.
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
     * create basic AdGroup.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    public static function create(): ValuesHolder
    {
        $parentValuesHolder = self::setup();
        $parentValuesRepositoryFacade = new ValuesRepositoryFacade($parentValuesHolder);


        $accountId = SoapUtils::getAccountId();
        $campaignIdStandard = $parentValuesRepositoryFacade->getCampaignValuesRepository()->findCampaignId(CampaignType::STANDARD);
        $campaignIdAppIOS = $parentValuesRepositoryFacade->getCampaignValuesRepository()->findCampaignId(CampaignType::APP, DeviceOsType::IOS);
        $campaignIdAppANDROID = $parentValuesRepositoryFacade->getCampaignValuesRepository()->findCampaignId(CampaignType::APP, DeviceOsType::ANDROID);
        $campaignIdVideoAd = $parentValuesRepositoryFacade->getCampaignValuesRepository()->findCampaignIdAdProductType("VIDEO_AD");

        $request = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
            self::createExampleStandardAdGroup($campaignIdStandard),
            self::createExampleAppIOSAdGroup($campaignIdAppIOS),
            self::createExampleAppANDROIDAdGroup($campaignIdAppANDROID),
            self::createExampleAppANDROIDAdGroup2($campaignIdVideoAd)
        ]);
        $response = self::mutate($request);

        $selfValuesHolder = new ValuesHolder();
        $selfValuesHolder->setCampaignValuesList($parentValuesHolder->getCampaignValuesList());
        $selfValuesHolder->setAdGroupValuesList($response->getRval()->getValues());
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
        return CampaignServiceSample::create();
    }

    /**
     * cleanup service object.
     *
     * @param ValuesHolder $valuesHolder
     * @throws Exception
     */
    public static function cleanup(ValuesHolder $valuesHolder): void
    {
        CampaignServiceSample::cleanup($valuesHolder);
    }

    /**
     * example AdGroupService operation.
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
            $campaignId = $valuesRepositoryFacade->getCampaignValuesRepository()->findCampaignId(
                CampaignType::APP, DeviceOsType::IOS
            );
            $campaignIdByCampaignGoal = $valuesRepositoryFacade->getCampaignValuesRepository()->findCampaignIdByCampaignGoal();

            // =================================================================
            // AdGroupService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleAppIOSAdGroup($campaignId),
                self::createExampleAdGroupByCampaignGoal($campaignIdByCampaignGoal)
            ]);

            // run
            $addResponse = self::mutate($addRequest);
            $valuesHolder->setAdGroupValuesList($addResponse->getRval()->getValues());

            // =================================================================
            // AdGroupService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getAdGroupValuesRepository()->getAdGroups());

            // run
            self::get($getRequest);

            // =================================================================
            // AdGroupService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId,
                self::createExampleSetRequest(
                    $valuesRepositoryFacade->getAdGroupValuesRepository()->getAdGroups(),
                    $valuesRepositoryFacade->getCampaignValuesRepository()->findCampaignIdByPurPose(),
                    $valuesRepositoryFacade->getAdGroupValuesRepository()->findAdGroupIdByCampaignGoal()
                )
            );

            // run
            self::mutate($setRequest);

            // =================================================================
            // AdGroupService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId,
                $valuesRepositoryFacade->getAdGroupValuesRepository()->getAdGroups()
            );

            // run
            self::mutate($removeRequest);
            $valuesHolder->setAdGroupValuesList([]);

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;

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
     * @param AdGroup[] $adGroups
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, $adGroups): get
    {
        $selector = new AdGroupSelector($accountId);

        if (!is_null($adGroups)) {
            $campaignIds = [];
            $adGroupIds = [];
            foreach ($adGroups as $adGroup) {
                $campaignIds[] = $adGroup->getCampaignId();
                $adGroupIds[] = $adGroup->getAdGroupId();
            }
            $selector->setCampaignIds($campaignIds);
            $selector->setAdGroupIds($adGroupIds);
        }

        $selector->setUserStatuses([
            UserStatus::ACTIVE,
            UserStatus::PAUSED,
        ]);
        $paging = new Paging(1, 20);
        $selector->setPaging($paging);
        return new get($selector);
    }

    /**
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @param AdGroup[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new AdGroupOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example Standard AdGroup request.
     *
     * @param int $campaignId
     * @return AdGroup
     */
    public static function createExampleStandardAdGroup(int $campaignId): AdGroup
    {
        // bid
        $bid = new ManualCPCAdGroupBid();
        $bid->setType(BiddingStrategyType::MANUAL_CPC);
        $bid->setMaxCpc(120);

        // conversionOptimizer
        $conversionOptimizer = new NoneAdGroupConversionOptimizer();
        $conversionOptimizer->setOptimizerType(AdGroupConversionOptimizerType::NONE);

        // adGroup
        $adGroup = new AdGroup(SoapUtils::getAccountId(), $campaignId);
        $adGroup->setAdGroupName('SampleStandardAdGroup_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $adGroup->setUserStatus(UserStatus::ACTIVE);
        $adGroup->setBid($bid);
        $adGroup->setConversionOptimizer($conversionOptimizer);
        $adGroup->setDevice([DeviceType::DESKTOP]);

        return $adGroup;
    }

    /**
     * example Standard AdGroup request.
     *
     * @param campaignId
     * @return AdGroup
     */
    public static function createExampleAdGroupByCampaignGoal(int $campaignId): AdGroup
    {
      $adGroupBiddingStrategy = new AdGroupBiddingStrategy();
      $adGroupBiddingStrategy->setMaxVcpmBidValue(5);

      // adGroup
      $adGroup = new AdGroup(SoapUtils::getAccountId(), $campaignId);
      $adGroup->setAdGroupName('SampleAdGroupByCampaignGoal_CreateOn_' . SoapUtils::getCurrentTimestamp());
      $adGroup->setUserStatus(UserStatus::ACTIVE);
      $adGroup->setDevice([DeviceType::DESKTOP]);
      $adGroup->setAdGroupBiddingStrategy($adGroupBiddingStrategy);

      return $adGroup;
    }

    /**
     * example App IOS AdGroup request.
     *
     * @param int $campaignId
     * @return AdGroup
     */
    public static function createExampleAppIOSAdGroup(int $campaignId): AdGroup
    {
        // bid
        $bid = new ManualCPCAdGroupBid();
        $bid->setType(BiddingStrategyType::MANUAL_CPC);
        $bid->setMaxCpc(120);

        // conversionOptimizer
        $conversionOptimizer = new NoneAdGroupConversionOptimizer();
        $conversionOptimizer->setOptimizerType(AdGroupConversionOptimizerType::NONE);

        // adGroup
        $adGroup = new AdGroup(SoapUtils::getAccountId(), $campaignId);
        $adGroup->setAdGroupName('SampleAppIOSAdGroup_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $adGroup->setUserStatus(UserStatus::ACTIVE);
        $adGroup->setBid($bid);
        $adGroup->setConversionOptimizer($conversionOptimizer);
        $adGroup->setDevice([DeviceType::SMARTPHONE]);
        $adGroup->setDeviceOs([DeviceOsType::IOS]);
        $adGroup->setDeviceApp([DeviceAppType::APP]);
        $adGroup->setDynamicImageExtensions(DynamicImageExtensions::ACTIVE);
        $adGroup->setSmartDeviceCarriers([SmartDeviceCarrier::DOCOMO]);

        return $adGroup;
    }

    /**
     * example App ANDROID AdGroup request.
     *
     * @param int $campaignId
     * @return AdGroup
     */
    public static function createExampleAppANDROIDAdGroup(int $campaignId): AdGroup
    {
        // bid
        $bid = new ManualCPCAdGroupBid();
        $bid->setType(BiddingStrategyType::MANUAL_CPC);
        $bid->setMaxCpc(120);

        // conversionOptimizer
        $conversionOptimizer = new NoneAdGroupConversionOptimizer();
        $conversionOptimizer->setOptimizerType(AdGroupConversionOptimizerType::NONE);

        // adGroup
        $adGroup = new AdGroup(SoapUtils::getAccountId(), $campaignId);
        $adGroup->setAdGroupName('SampleAppANDROIDAdGroup_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $adGroup->setUserStatus(UserStatus::ACTIVE);
        $adGroup->setBid($bid);
        $adGroup->setConversionOptimizer($conversionOptimizer);
        $adGroup->setDevice([DeviceType::TABLET]);
        $adGroup->setDeviceOs([DeviceOsType::ANDROID]);
        $adGroup->setDeviceApp([DeviceAppType::APP]);
        $adGroup->setDynamicImageExtensions(DynamicImageExtensions::ACTIVE);
        $adGroup->setSmartDeviceCarriers([SmartDeviceCarrier::SOFTBANK]);

        return $adGroup;
    }

    /**
     * example App ANDROID AdGroup request.
     *
     * @param int $campaignId
     * @return AdGroup
     */
    public static function createExampleAppANDROIDAdGroup2(int $campaignId): AdGroup
    {
      // bid
      $bid = new ManualCPVAdGroupBid();
      $bid->setType(BiddingStrategyType::MANUAL_CPV);
      $bid->setMaxCpv(10000);

      // adGroup
      $adGroup = new AdGroup(SoapUtils::getAccountId(), $campaignId);
      $adGroup->setAdGroupName('SampleAppANDROIDAdGroup_CreateOn_' . SoapUtils::getCurrentTimestamp());
      $adGroup->setUserStatus(UserStatus::ACTIVE);
      $adGroup->setBid($bid);
      $adGroup->setDevice([DeviceType::SMARTPHONE]);
      $adGroup->setDeviceOs([DeviceOsType::ANDROID]);
      $adGroup->setDeviceApp([DeviceAppType::APP]);
      $adGroup->setSmartDeviceCarriers([SmartDeviceCarrier::NONE]);

      return $adGroup;
    }

    /**
     * example adGroup set request.
     *
     * @param AdGroup[] $adGroups
     * @return AdGroup[]
     */
    public static function createExampleSetRequest(array $adGroups, int $campaignIdByCampaignGoal, int $adGroupIdByCampaignGoal): array
    {
        // create operands
        $operands = [];

        $i = 1;
        foreach ($adGroups as $adGroup) {
            if ($adGroup->getAdGroupId() == $adGroupIdByCampaignGoal) {
                continue;
            }

            // bid
            $bid = new ManualCPCAdGroupBid();
            $bid->setMaxCpc(120);
            $bid->setType(BiddingStrategyType::MANUAL_CPC);

            // adGroup
            $operand = new AdGroup(SoapUtils::getAccountId(), $adGroup->getCampaignId());
            $operand->setAdGroupId($adGroup->getAdGroupId());
            $operand->setAdGroupName('Sample_UpdateOn_' . $i . '_' . SoapUtils::getCurrentTimestamp());
            $operand->setUserStatus(UserStatus::PAUSED);
            $operand->setBid($bid);
            $operand->setDevice([DeviceType::SMARTPHONE]);
            $operand->setDeviceOs([DeviceOsType::IOS]);
            $operand->setDeviceApp([DeviceAppType::APP]);
            $operand->setDynamicImageExtensions(DynamicImageExtensions::PAUSED);
            $operand->setSmartDeviceCarriers([SmartDeviceCarrier::KDDI]);
            $operands[] = $operand;
            ++$i;
        }

        // adGroup by campaignGoal
        $adGroupBiddingStrategy = new AdGroupBiddingStrategy();
        $adGroupBiddingStrategy->setMaxVcpmBidValue(10);

        // adGroup
        $operandByCampaignGoal = new AdGroup(SoapUtils::getAccountId(), $campaignIdByCampaignGoal);
        $operandByCampaignGoal->setAdGroupId($adGroupIdByCampaignGoal);
        $operandByCampaignGoal->setAdGroupBiddingStrategy($adGroupBiddingStrategy);
        $operands[] = $operandByCampaignGoal;

        return $operands;
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    AdGroupServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
