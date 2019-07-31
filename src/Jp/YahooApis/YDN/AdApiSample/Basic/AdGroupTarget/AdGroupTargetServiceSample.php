<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\AdGroupTarget;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Basic\AdGroup\AdGroupServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201907\AdGroupTarget\{AdGroupTarget,
    AdGroupTargetService,
    AdGroupTargetSelector,
    AdGroupTargetOperation,
    AdGroupTargetMutateOperation,
    AdScheduleTarget,
    Age,
    AgeTarget,
    CarrierTarget,
    DayOfWeek,
    DeviceTarget,
    EstimateFlg,
    Gender,
    GenderTarget,
    GeoTarget,
    get,
    getResponse,
    InterestCategoryTarget,
    mutate,
    mutateResponse,
    Operator,
    PlacementTarget,
    PlacementUrlListType,
    replace,
    replaceResponse,
    SiteCategoryTarget,
    TargetType};
use Jp\YahooApis\YDN\V201907\Campaign\CampaignType;
use Jp\YahooApis\YDN\V201907\Paging;

/**
 * example AdGroupTargetService operation and Utility method collection.
 */
class AdGroupTargetServiceSample
{

    const SERVICE_NAME = 'AdGroupTargetService';

    /**
     * @var AdGroupTargetService
     */
    private static $service = null;

    /**
     * AdGroupTargetServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(AdGroupTargetService::class);
    }

    /**
     * example get adGroupTargets.
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
     * example mutate adGroupTargets.
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
     * example replace adGroupTargets.
     *
     * @param replace $request
     * @return replaceResponse
     * @throws Exception
     */
    public static function replace(replace $request): replaceResponse
    {
        self::init();

        // Call API
        $response = self::$service->replace($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/REPLACE.' . PHP_EOL);
        }

        // Response
        if (!is_null($response->getRval()->getValues())) {
            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/REPLACE.' . PHP_EOL);
                }
            }
        }

        return $response;
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
     * example AdGroupTargetService operation.
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
            $adGroupIdStandard = $valuesRepositoryFacade->getAdGroupValuesRepository()->findAdGroupId($campaignIdStandard);

            // =================================================================
            // AdGroupTargetService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleScheduleTarget($campaignIdStandard, $adGroupIdStandard),
                self::createExampleGenderTarget($campaignIdStandard, $adGroupIdStandard),
                self::createExampleAgeTarget($campaignIdStandard, $adGroupIdStandard),
            ]);

            // run
            $addResponse = self::mutate($addRequest);
            $adGroupTargets = [];
            foreach ($addResponse->getRval()->getValues() as $adGroupTargetValues) {
                $adGroupTargets[] = $adGroupTargetValues->getAdGroupTargetList();
            }

            // =================================================================
            // AdGroupTargetService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId, self::createExampleSetRequest($adGroupTargets));

            // run
            self::mutate($setRequest);

            // =================================================================
            // AdGroupTargetService REPLACE
            // =================================================================
            // create request.
            $replaceRequest = self::buildExampleReplaceRequest($accountId, [
                self::createExampleScheduleTargetReplace($campaignIdStandard, $adGroupIdStandard,false),
                self::createExampleGenderTargetReplace($campaignIdStandard, $adGroupIdStandard, false),
                self::createExampleAgeTargetReplace($campaignIdStandard, $adGroupIdStandard, true),
            ]);

            // run
            $replaceResponse = self::replace($replaceRequest);
            $adGroupTargets = [];
            foreach ($replaceResponse->getRval()->getValues() as $adGroupTargetValues) {
                $adGroupTargets[] = $adGroupTargetValues->getAdGroupTargetList();
            }

            // =================================================================
            // AdGroupTargetService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($campaignIdStandard, $adGroupIdStandard);

            // run
            self::get($getRequest);

            // =================================================================
            // AdGroupTargetService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId, $adGroupTargets);

            // run
            self::mutate($removeRequest);

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
     * @param int $campaignId
     * @param int $adGroupId
     * @return get
     */
    public static function buildExampleGetRequest(int $campaignId, int $adGroupId): get
    {
        $selector = new AdGroupTargetSelector(SoapUtils::getAccountId());
        $selector->setCampaignIds([$campaignId]);
        $selector->setAdGroupIds([$adGroupId]);
        $selector->setTargetTypes([
            TargetType::AD_SCHEDULE_TARGET,
            TargetType::GEO_TARGET,
            TargetType::AGE_TARGET,
            TargetType::GENDER_TARGET,
            TargetType::INTEREST_CATEGORY,
            TargetType::SITE_CATEGORY,
            TargetType::SITE_RETARGETING,
            TargetType::SEARCH_TARGET,
            TargetType::PLACEMENT_TARGET,
            TargetType::DEVICE_TARGET,
            TargetType::CARRIER_TARGET,
            TargetType::APP_TARGET,
            TargetType::OS_TARGET,
            TargetType::OS_VERSION_TARGET,
        ]);

        $paging = new Paging(1, 20);
        $selector->setPaging($paging);
        return new get($selector);
    }

    /**
     * example mutate request.
     *
     * @param string $operator
     * @param int $accountId
     * @param AdGroupTarget[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new AdGroupTargetMutateOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example replace request.
     *
     * @param int $accountId
     * @param array $operand
     * @return replace
     */
    public static function buildExampleReplaceRequest(int $accountId, array $operand): replace
    {
        return new replace(
            new AdGroupTargetOperation($accountId, $operand)
        );
    }

    /**
     * example Schedule Target request.
     *
     * @param int $campaignId
     * @param int $adGroupId
     * @return AdGroupTarget
     */
    public static function createExampleScheduleTarget(int $campaignId, int $adGroupId): AdGroupTarget
    {
        // target
        $target = new AdScheduleTarget(TargetType::AD_SCHEDULE_TARGET);
        $target->setDayOfWeek(DayOfWeek::MONDAY);
        $target->setStartHour(13);
        $target->setEndHour(14);

        // adGroupTarget
        $adGroupTarget = new AdGroupTarget();
        $adGroupTarget->setAccountId(SoapUtils::getAccountId());
        $adGroupTarget->setCampaignId($campaignId);
        $adGroupTarget->setAdGroupId($adGroupId);
        $adGroupTarget->setTarget($target);
        $adGroupTarget->setBidMultiplier(1.12);

        return $adGroupTarget;
    }

    /**
     * example Gender Target request.
     *
     * @param int $campaignId
     * @param int $adGroupId
     * @return AdGroupTarget
     */
    public static function createExampleGenderTarget(int $campaignId, int $adGroupId): AdGroupTarget
    {
        // target
        $target = new GenderTarget(TargetType::GENDER_TARGET);
        $target->setGender(Gender::ST_MALE);
        $target->setEstimateFlg(EstimateFlg::ACTIVE);

        // adGroupAd
        $adGroupTarget = new AdGroupTarget();
        $adGroupTarget->setAccountId(SoapUtils::getAccountId());
        $adGroupTarget->setCampaignId($campaignId);
        $adGroupTarget->setAdGroupId($adGroupId);
        $adGroupTarget->setTarget($target);
        $adGroupTarget->setBidMultiplier(1.12);

        return $adGroupTarget;
    }

    /**
     * example Age Target request.
     *
     * @param int $campaignId
     * @param int $adGroupId
     * @return AdGroupTarget
     */
    public static function createExampleAgeTarget(int $campaignId, int $adGroupId): AdGroupTarget
    {
        // target
        $target = new AgeTarget(TargetType::AGE_TARGET);
        $target->setAge(Age::GT_UNKNOWN);

        // adGroupAd
        $adGroupTarget = new AdGroupTarget();
        $adGroupTarget->setAccountId(SoapUtils::getAccountId());
        $adGroupTarget->setCampaignId($campaignId);
        $adGroupTarget->setAdGroupId($adGroupId);
        $adGroupTarget->setTarget($target);
        $adGroupTarget->setBidMultiplier(1.12);

        return $adGroupTarget;
    }

    /**
     * example Placement Target request.
     *
     * @param int $campaignId
     * @param int $adGroupId
     * @param int $targetId
     * @return AdGroupTarget
     */
    public static function createExamplePlacementTarget(int $campaignId, int $adGroupId, int $targetId): AdGroupTarget
    {
        // target
        $target = new PlacementTarget(TargetType::PLACEMENT_TARGET);
        $target->setTargetId($targetId);
        $target->setDeliverType(PlacementUrlListType::BLACK_LIST);

        // adGroupTarget
        $adGroupTarget = new AdGroupTarget();
        $adGroupTarget->setAccountId(SoapUtils::getAccountId());
        $adGroupTarget->setCampaignId($campaignId);
        $adGroupTarget->setAdGroupId($adGroupId);
        $adGroupTarget->setTarget($target);

        return $adGroupTarget;
    }

    /**
     * example Interest Category Target request.
     *
     * @param int $campaignId
     * @param int $adGroupId
     * @param string $categoryCode
     * @return AdGroupTarget
     */
    public static function createExampleInterestCategoryTarget(int $campaignId, int $adGroupId, string $categoryCode): AdGroupTarget
    {
        // target
        $target = new InterestCategoryTarget(TargetType::INTEREST_CATEGORY);
        $target->setTargetId($categoryCode);

        // adGroupTarget
        $adGroupTarget = new AdGroupTarget();
        $adGroupTarget->setAccountId(SoapUtils::getAccountId());
        $adGroupTarget->setCampaignId($campaignId);
        $adGroupTarget->setAdGroupId($adGroupId);
        $adGroupTarget->setTarget($target);

        return $adGroupTarget;
    }

    /**
     * example Schedule Target replace request.
     *
     * @param int $campaignId
     * @param int $adGroupId
     * @param bool $isRemove
     * @return AdGroupTarget
     */
    public static function createExampleScheduleTargetReplace(int $campaignId, int $adGroupId, bool $isRemove = false): AdGroupTarget
    {
        // target
        $target = new AdScheduleTarget(TargetType::AD_SCHEDULE_TARGET);
        if ($isRemove) {
            $target->setIsRemove($isRemove);
        } else {
            $target->setDayOfWeek(DayOfWeek::FRIDAY);
            $target->setStartHour(20);
            $target->setEndHour(21);
        }

        // adGroupAd
        $adGroupTarget = new AdGroupTarget();
        $adGroupTarget->setAccountId(SoapUtils::getAccountId());
        $adGroupTarget->setCampaignId($campaignId);
        $adGroupTarget->setAdGroupId($adGroupId);
        $adGroupTarget->setTarget($target);
        $adGroupTarget->setBidMultiplier(1.7);

        return $adGroupTarget;
    }

    /**
     * example Gender Target replace request.
     *
     * @param int $campaignId
     * @param int $adGroupId
     * @param bool $isRemove
     * @return AdGroupTarget
     */
    public static function createExampleGenderTargetReplace(int $campaignId, int $adGroupId, bool $isRemove = false): AdGroupTarget
    {
        // target
        $target = new GenderTarget(TargetType::GENDER_TARGET);
        if ($isRemove) {
            $target->setIsRemove($isRemove);
        } else {
            $target->setGender(Gender::ST_FEMALE);
            $target->setEstimateFlg(EstimateFlg::PAUSED);
        }

        // adGroupAd
        $adGroupTarget = new AdGroupTarget();
        $adGroupTarget->setAccountId(SoapUtils::getAccountId());
        $adGroupTarget->setCampaignId($campaignId);
        $adGroupTarget->setAdGroupId($adGroupId);
        $adGroupTarget->setTarget($target);
        $adGroupTarget->setBidMultiplier(1.7);

        return $adGroupTarget;
    }

    /**
     * example Age Target replace request.
     *
     * @param int $campaignId
     * @param int $adGroupId
     * @param bool $isRemove
     * @return AdGroupTarget
     */
    public static function createExampleAgeTargetReplace(int $campaignId, int $adGroupId, bool $isRemove = false): AdGroupTarget
    {
        // target
        $target = new AgeTarget(TargetType::AGE_TARGET);
        if ($isRemove) {
            $target->setIsRemove($isRemove);
        } else {
            $target->setAge(Age::GT_RANGE15_17);
        }

        // adGroupAd
        $adGroupTarget = new AdGroupTarget();
        $adGroupTarget->setAccountId(SoapUtils::getAccountId());
        $adGroupTarget->setCampaignId($campaignId);
        $adGroupTarget->setAdGroupId($adGroupId);
        $adGroupTarget->setTarget($target);
        $adGroupTarget->setBidMultiplier(1.7);

        return $adGroupTarget;
    }

    /**
     * example adGroupTarget set request.
     *
     * @param array $adGroupTargets
     * @return array AdGroupTargetOperation entity.
     */
    public static function createExampleSetRequest(array $adGroupTargets): array
    {
        $operands = [];

        foreach ($adGroupTargets as $adGroupTarget) {
            $operand = new AdGroupTarget();
            $operand->setAccountId(SoapUtils::getAccountId());
            $operand->setCampaignId($adGroupTarget->getCampaignId());
            $operand->setAdGroupId($adGroupTarget->getAdGroupId());
            $operand->setBidMultiplier(2.0);

            switch ($adGroupTarget->getTarget()->getType()) {
                case TargetType::AD_SCHEDULE_TARGET:
                    $target = new AdScheduleTarget(TargetType::AD_SCHEDULE_TARGET);
                    $target->setTargetId($adGroupTarget->getTarget()->getTargetId());
                    $operand->setTarget($target);
                    break;
                case TargetType::AGE_TARGET:
                    $target = new AgeTarget(TargetType::AGE_TARGET);
                    $target->setTargetId($adGroupTarget->getTarget()->getTargetId());
                    $operand->setTarget($target);
                    break;
                case TargetType::GENDER_TARGET:
                    $target = new GenderTarget(TargetType::GENDER_TARGET);
                    $target->setTargetId($adGroupTarget->getTarget()->getTargetId());
                    $operand->setTarget($target);
                    break;
                case TargetType::GEO_TARGET:
                    $target = new GeoTarget(TargetType::GEO_TARGET);
                    $target->setTargetId($adGroupTarget->getTarget()->getTargetId());
                    $operand->setTarget($target);
                    break;
                case TargetType::INTEREST_CATEGORY:
                    $target = new InterestCategoryTarget(TargetType::INTEREST_CATEGORY);
                    $target->setTargetId($adGroupTarget->getTarget()->getTargetId());
                    $operand->setTarget($target);
                    break;
                case TargetType::SITE_CATEGORY:
                    $target = new SiteCategoryTarget(TargetType::SITE_CATEGORY);
                    $target->setTargetId($adGroupTarget->getTarget()->getTargetId());
                    $operand->setTarget($target);
                    break;
                case TargetType::DEVICE_TARGET:
                    $target = new DeviceTarget(TargetType::DEVICE_TARGET);
                    $target->setTargetId($adGroupTarget->getTarget()->getTargetId());
                    $operand->setTarget($target);
                    break;
                case TargetType::CARRIER_TARGET:
                    $target = new CarrierTarget(TargetType::CARRIER_TARGET);
                    $target->setTargetId($adGroupTarget->getTarget()->getTargetId());
                    $operand->setTarget($target);
                    break;
                default:
                    break;
            }
            $operands[] = $operand;
        }

        return $operands;
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    AdGroupTargetServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
