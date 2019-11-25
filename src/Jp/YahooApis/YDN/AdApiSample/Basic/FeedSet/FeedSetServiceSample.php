<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\FeedSet;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Basic\FeedHolder\FeedHolderServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201911\FeedSet\{
    CompareOperator,
    Condition,
    ConditionSet,
    ConditionType,
    FeedSetOperation,
    FeedSet,
    FeedSetSelector,
    FeedSetService,
    get,
    getResponse,
    mutate,
    mutateResponse,
    Operator};

/**
 * example FeedSetService operation and Utility method collection.
 */
class FeedSetServiceSample
{

    const SERVICE_NAME = 'FeedSetService';

    /**
     * @var FeedSetService
     */
    private static $service = null;

    /**
     * FeedSetServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(FeedSetService::class);
    }

    /**
     * example get FeedSet.
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
     * example mutate FeedSet.
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
     * check & create upper service object.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    private static function setup(): ValuesHolder
    {
        return FeedHolderServiceSample::create();
    }


    /**
     * cleanup service object.
     *
     * @param ValuesHolder $valuesHolder
     * @throws Exception
     */
    public static function cleanup(ValuesHolder $valuesHolder): void
    {
        FeedHolderServiceSample::cleanup($valuesHolder);
    }

    /**
     * example FeedSetService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        // =================================================================
        // Setup
        // =================================================================
        $accountId = SoapUtils::getAccountId();
        $valuesHolder = new ValuesHolder();

        try {
            $valuesHolder = self::setup();
            $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);

            // Actually, FeedHolderId that includes approved feed items is required.
            $feedHolderId = $valuesRepositoryFacade->getFeedHolderValuesRepository()->getFeedHolderIds()[0];

            // =================================================================
            // FeedSetService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleFeedSetRequest($feedHolderId)
            ]);

            // run
            $feedSets = [];
            $addResponse = self::mutate($addRequest);
            foreach ($addResponse->getRval()->getValues() as $feedSetValues) {
                $feedSets[] = $feedSetValues->getFeedSet();
            }

            // =================================================================
            // FeedSetService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $feedHolderId, [$feedSets[0]->getFeedSetId()]);

            // run
            self::get($getRequest);

            // =================================================================
            // FeedSetService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId, $feedSets);

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
     * @param int $accountId
     * @param int $feedHolderId
     * @param int[] $feedSetIds
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, int $feedHolderId, array $feedSetIds): get
    {
        $selector = new FeedSetSelector($accountId, $feedHolderId);
        $selector->setFeedSetIds($feedSetIds);
        $selector->setIncludeItemCount(true);
        return new get($selector);
    }

    /**
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @param FeedSetRecord[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new FeedSetOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example FeedSet request.
     *
     * @param int $feedHolderId
     * @return FeedSet
     */
    public static function createExampleFeedSetRequest(int $feedHolderId): FeedSet
    {
        $feedSet = new FeedSet($feedHolderId);
        $feedSet->setFeedSetName("sampleFeedSet");

        $condition = new Condition(CompareOperator::EQUAL, "2.2");

        $conditionSet = new ConditionSet(ConditionType::RATING, [$condition]);
        $feedSet->setConditionSets([$conditionSet]);

        return $feedSet;
    }

}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    FeedSetServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
