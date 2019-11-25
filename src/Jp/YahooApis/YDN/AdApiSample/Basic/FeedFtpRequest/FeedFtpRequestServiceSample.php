<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\FeedFtpRequest;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Basic\FeedHolder\FeedHolderServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201911\FeedFtpRequest\{
    FeedFtpRequestOperation,
    FeedFtpRequest,
    FeedFtpRequestService,
    mutate,
    mutateResponse,
    Operator};

/**
 * example FeedFtpRequestService operation and Utility method collection.
 */
class FeedFtpRequestServiceSample
{

    const SERVICE_NAME = 'FeedFtpRequestService';

    /**
     * @var FeedFtpRequestService
     */
    private static $service = null;

    /**
     * FeedFtpRequestServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(FeedFtpRequestService::class);
    }

    /**
     * example mutate FeedFtpRequest.
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
     * example FeedFtpRequestService operation.
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
            $feedHolderId = $valuesRepositoryFacade->getFeedHolderValuesRepository()->getFeedHolderIds()[0];

            // =================================================================
            // FeedFtpRequestService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleFeedFtpRequestRequest($feedHolderId)
            ]);

            // run
            self::mutate($addRequest);

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
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @param FeedFtpRequest[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new FeedFtpRequestOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example FeedFtpRequest request.
     *
     * @param int $feedHolderId
     * @return FeedFtpRequest
     */
    public static function createExampleFeedFtpRequestRequest(int $feedHolderId): FeedFtpRequest
    {
        $feedFtp = new FeedFtpRequest($feedHolderId);
        return $feedFtp;
    }

}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    FeedFtpRequestServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
