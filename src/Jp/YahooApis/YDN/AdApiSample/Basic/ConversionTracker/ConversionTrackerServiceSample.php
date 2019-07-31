<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\ConversionTracker;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\V201907\ConversionTracker\{AppConversion,
    AppConversionPlatform,
    AppConversionType,
    ConversionCountingType,
    ConversionTracker,
    ConversionTrackerCategory,
    ConversionTrackerOperation,
    ConversionTrackerSelector,
    ConversionTrackerService,
    ConversionTrackerStatus,
    ConversionTrackerType,
    ExcludeFromBidding,
    get,
    getResponse,
    mutate,
    mutateResponse,
    Operator,
    WebConversion};
use Jp\YahooApis\YDN\V201907\Paging;

/**
 * example ConversionTrackerService operation and Utility method collection.
 */
class ConversionTrackerServiceSample
{

    const SERVICE_NAME = 'ConversionTrackerService';

    /**
     * @var ConversionTrackerService
     */
    private static $service = null;

    /**
     * ConversionTrackerServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(ConversionTrackerService::class);
    }

    /**
     * example get conversions.
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
     * example mutate conversions.
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
     * example ConversionTrackerService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        // =================================================================
        // Setup
        // =================================================================
        $accountId = SoapUtils::getAccountId();

        try {
            // =================================================================
            // ConversionTrackerService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(
                Operator::ADD, $accountId, [
                    self::createWebConversionRequest(),
                    self::createAppConversionRequest(),
                ]
            );

            // run
            $addResponse = self::mutate($addRequest);

            $conversionTrackers = [];
            $conversionTrackerIds = [];
            foreach ($addResponse->getRval()->getValues() as $conversionTrackerValues) {
                $conversionTrackers[] = $conversionTrackerValues->getConversionTracker();
                $conversionTrackerIds[] = $conversionTrackerValues->getConversionTracker()->getConversionTrackerId();
            }

            // =================================================================
            // ConversionTrackerService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $conversionTrackerIds);

            // run
            self::get($getRequest);

            //waiting
            sleep(180);

            // =================================================================
            // ConversionTrackerService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(
                Operator::SET, $accountId, self::createExampleSetRequest($conversionTrackers)
            );

            // run
            self::mutate($setRequest);

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }

    /**
     * example get request.
     *
     * @param int $accountId
     * @param int[] $conversionTrackerIds
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, array $conversionTrackerIds): get
    {
        $selector = new ConversionTrackerSelector($accountId);

        if (!is_null($conversionTrackerIds)) {
            $selector->setConversionTrackerIds($conversionTrackerIds);
        }

        $selector->setConversionTrackerTypes([
            ConversionTrackerType::WEB_CONVERSION,
            ConversionTrackerType::APP_CONVERSION,
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
     * @param ConversionTracker[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new ConversionTrackerOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example WebConversion request.
     *
     * @return WebConversion
     */
    public static function createWebConversionRequest(): WebConversion
    {
        $operand = new WebConversion();
        $operand->setConversionTrackerName('SampleWebConversionTracker_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $operand->setStatus(ConversionTrackerStatus::ENABLED);
        $operand->setCategory(ConversionTrackerCategory::PURCHASE);
        $operand->setConversionTrackerType(ConversionTrackerType::WEB_CONVERSION);
        $operand->setCountingType(ConversionCountingType::MANY_PER_CLICK);
        $operand->setExcludeFromBidding(ExcludeFromBidding::TRUE);
        return $operand;
    }

    /**
     * example AppConversion request.
     *
     * @return AppConversion
     */
    public static function createAppConversionRequest(): AppConversion
    {
        $operand = new AppConversion();
        $operand->setConversionTrackerName('SampleAppConversionTracker_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $operand->setStatus(ConversionTrackerStatus::ENABLED);
        $operand->setCategory(ConversionTrackerCategory::DOWNLOAD);
        $operand->setConversionTrackerType(ConversionTrackerType::APP_CONVERSION);
        $operand->setAppId('sample123_' . SoapUtils::getCurrentTimestamp());
        $operand->setAppPlatform(AppConversionPlatform::ANDROID_MARKET);
        $operand->setAppConversionType(AppConversionType::FIRST_OPEN);
        $operand->setCountingType(ConversionCountingType::ONE_PER_CLICK);
        $operand->setExcludeFromBidding(ExcludeFromBidding::FALSE);
        return $operand;
    }

    /**
     * example conversionTracker set request.
     *
     * @param ConversionTracker[] $conversionTrackers
     * @return array entity.
     */
    public static function createExampleSetRequest(array $conversionTrackers): array
    {
        // create operands
        $operands = [];

        foreach ($conversionTrackers as $conversionTracker) {
            switch ($conversionTracker->getConversionTrackerType()) {
                default :
                case ConversionTrackerType::WEB_CONVERSION:
                    $operand = new WebConversion();
                    $operand->setConversionTrackerId($conversionTracker->getConversionTrackerId());
                    $operand->setConversionTrackerType($conversionTracker->getConversionTrackerType());
                    $operand->setConversionTrackerName('SampleWebConversionTracker_UpdateOn_' . $conversionTracker->getConversionTrackerId() . '_' . SoapUtils::getCurrentTimestamp());
                    $operand->setStatus(ConversionTrackerStatus::DISABLED);
                    $operand->setCategory(ConversionTrackerCategory::PAGE_VIEW);
                    $operand->setUserRevenueValue(300);
                    break;

                case ConversionTrackerType::APP_CONVERSION:
                    $operand = new AppConversion();
                    $operand->setConversionTrackerId($conversionTracker->getConversionTrackerId());
                    $operand->setConversionTrackerType($conversionTracker->getConversionTrackerType());
                    $operand->setConversionTrackerName('SampleAppConversionTracker_UpdateOn_' . $conversionTracker->getConversionTrackerId() . '_' . SoapUtils::getCurrentTimestamp());
                    $operand->setStatus(ConversionTrackerStatus::DISABLED);
                    $operand->setCategory(ConversionTrackerCategory::DOWNLOAD);
                    $operand->setUserRevenueValue(300);
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
    ConversionTrackerServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
