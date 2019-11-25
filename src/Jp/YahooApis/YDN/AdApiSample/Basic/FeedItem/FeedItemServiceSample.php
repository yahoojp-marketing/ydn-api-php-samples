<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\FeedItem;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Basic\FeedHolder\FeedHolderServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201911\FeedItem\{Availability, FeedItemOperation, FeedItem, FeedItemService, mutate, mutateResponse, Operator};

/**
 * example FeedItemService operation and Utility method collection.
 */
class FeedItemServiceSample
{

    const SERVICE_NAME = 'FeedItemService';

    /**
     * @var FeedItemService
     */
    private static $service = null;

    /**
     * FeedItemServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(FeedItemService::class);
    }

    /**
     * example mutate FeedItem.
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
     * example FeedItemService operation.
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
            // FeedItemService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId, [
                self::createExampleFeedItemRequest($feedHolderId)
            ]);

            // run
            self::mutate($setRequest);

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
     * @param FeedItemRecord[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new FeedItemOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example FeedItem request.
     *
     * @param int $feedHolderId
     * @return FeedItem
     */
    public static function createExampleFeedItemRequest(int $feedHolderId): FeedItem
    {
        $feedItem = new FeedItem($feedHolderId);
        $feedItem->setItemId("100");
        $feedItem->setPrice(1000);
        $feedItem->setSalePrice(2000);
        $feedItem->setFormattedSalePrice("2,000");
        $feedItem->setFormattedPrice("3,000");
        $feedItem->setInStock(1);
        $feedItem->setCapacity(300);
        $feedItem->setDisplaySettings(1);
        $feedItem->setAvailability(Availability::IN_STOCK);

        return $feedItem;
    }

}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    FeedItemServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
