<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\FeedHolder;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201911\FeedHolder\{FeedHolderOperation, FeedHolderRecord, FeedHolderSelector, FeedHolderService, get, getResponse, mutate, mutateResponse, Operator};
use Jp\YahooApis\YDN\V201911\Paging;

/**
 * example FeedHolderService operation and Utility method collection.
 */
class FeedHolderServiceSample
{

    const SERVICE_NAME = 'FeedHolderService';

    /**
     * @var FeedHolderService
     */
    private static $service = null;

    /**
     * FeedHolderServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(FeedHolderService::class);
    }

    /**
     * example get FeedHolder.
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
     * example mutate FeedHolder.
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
     * create basic FeedHolder.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    public static function create(): ValuesHolder
    {
        $accountId = SoapUtils::getAccountId();

        $request = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
            self::createExampleFeedHolderRecordRequest($accountId)
        ]);
        $response = self::mutate($request);

        $selfValuesHolder = new ValuesHolder();
        $selfValuesHolder->setFeedHolderValuesList($response->getRval()->getValues());
        return $selfValuesHolder;
    }

    /**
     * cleanup service object.
     *
     * @param ValuesHolder $valuesHolder
     * @throws Exception
     */
    public static function cleanup(ValuesHolder $valuesHolder): void
    {
        if (count($valuesHolder->getFeedHolderValuesList()) > 0) {
            $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);
            self::mutate(
                self::buildExampleMutateRequest(Operator::REMOVE, SoapUtils::getAccountId(),
                    $valuesRepositoryFacade->getFeedHolderValuesRepository()->getFeedHolderRecords()
                )
            );
        }
    }

    /**
     * example FeedHolderService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        // =================================================================
        // Setup
        // =================================================================
        $accountId = SoapUtils::getAccountId();
        $valuesHolder = new ValuesHolder();
        $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);

        try {
            // =================================================================
            // FeedHolderService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleFeedHolderRecordRequest($accountId)
            ]);

            // run
            $addResponse = self::mutate($addRequest);
            $valuesHolder->setFeedHolderValuesList($addResponse->getRval()->getValues());

            // =================================================================
            // FeedHolderService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getFeedHolderValuesRepository()->getFeedHolderIds());

            // run
            self::get($getRequest);

            // =================================================================
            // FeedHolderService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId,
                self::createExampleSetRequest($valuesRepositoryFacade->getFeedHolderValuesRepository()->getFeedHolderRecords())
            );

            // run
            self::mutate($setRequest);

            // =================================================================
            // FeedHolderService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId, $valuesRepositoryFacade->getFeedHolderValuesRepository()->getFeedHolderRecords());

            // run
            self::mutate($removeRequest);

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }

    /**
     * example get request.
     *
     * @param int $accountId
     * @param int[] $feedHolderIds
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, array $feedHolderIds): get
    {
        $selector = new FeedHolderSelector($accountId);

        if (!is_null($feedHolderIds)) {
            $selector->setFeedHolderIds($feedHolderIds);
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
     * @param FeedHolderRecord[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new FeedHolderOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example FeedHolderRecord request.
     *
     * @param int $accountId
     * @return FeedHolderRecord
     */
    public static function createExampleFeedHolderRecordRequest(int $accountId): FeedHolderRecord
    {
        $operand = new FeedHolderRecord($accountId);
        $operand->setFeedHolderName("Sample_CreateOn_" . SoapUtils::getCurrentTimestamp());
        return $operand;
    }

    /**
     * example FeedHolderRecord set request.
     *
     * @param FeedHolderRecord[] $feedHolderRecords
     * @return FeedHolderRecord[]
     */
    public static function createExampleSetRequest(array $feedHolderRecords): array
    {
        // create operands
        $operands = [];

        foreach ($feedHolderRecords as $holderRecord) {
            $operand = new FeedHolderRecord($holderRecord->getAccountId());
            $operand->setFeedHolderId($holderRecord->getFeedHolderId());
            $operand->setFeedHolderName('Sample_UpdateOn_' . $holderRecord->getFeedHolderId() . '_' . SoapUtils::getCurrentTimestamp());
            $operands[] = $operand;
        }

        return $operands;
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    FeedHolderServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
