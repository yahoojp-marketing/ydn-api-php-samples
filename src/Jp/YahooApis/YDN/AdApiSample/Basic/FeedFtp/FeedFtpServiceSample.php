<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\FeedFtp;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Basic\FeedHolder\FeedHolderServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201903\FeedFtp\{ActiveStatus,
    FeedFtpOperation,
    FeedFtp,
    FeedFtpSelector,
    FeedFtpService,
    get,
    getResponse,
    ItemListUploadType,
    mutate,
    mutateResponse,
    Operator,
    ScheduleHourly,
    ScheduleType};

/**
 * example FeedFtpService operation and Utility method collection.
 */
class FeedFtpServiceSample
{

    const SERVICE_NAME = 'FeedFtpService';

    /**
     * @var FeedFtpService
     */
    private static $service = null;

    /**
     * FeedFtpServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(FeedFtpService::class);
    }

    /**
     * example get FeedFtp.
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
     * example mutate FeedFtp.
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
     * example FeedFtpService operation.
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
            // FeedFtpService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleFeedFtpRequest($feedHolderId)
            ]);

            // run
            $feedFtps = [];
            $addResponse = self::mutate($addRequest);
            foreach ($addResponse->getRval()->getValues() as $feedFtpValues) {
                $feedFtps[] = $feedFtpValues->getFeedFtp();
            }

            // =================================================================
            // FeedFtpService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, [$feedHolderId]);

            // run
            self::get($getRequest);

            // =================================================================
            // FeedFtpService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId,
                self::createExampleSetRequest($feedFtps)
            );

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
     * example get request.
     *
     * @param int $accountId
     * @param int[] $feedHolderIds
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, array $feedHolderIds): get
    {
        $selector = new FeedFtpSelector($accountId);
        $selector->setFeedHolderIds($feedHolderIds);
        return new get($selector);
    }

    /**
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @param FeedFtpRecord[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new FeedFtpOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example FeedFtp request.
     *
     * @param int $feedHolderId
     * @return FeedFtp
     */
    public static function createExampleFeedFtpRequest(int $feedHolderId): FeedFtp
    {
        $feedFtp = new FeedFtp($feedHolderId);
        $feedFtp->setItemListUploadType(ItemListUploadType::UPDATE_ALL);

        $schedule = new ScheduleHourly(ScheduleType::HOURLY, 1);
        $feedFtp->setSchedule($schedule);

        $feedFtp->setFeedUrl("ftp://test.com/test1.tsv");
        $feedFtp->setUserName("user_name_1");
        $feedFtp->setUserPassword("user_password_1");
        $feedFtp->setActiveStatus(ActiveStatus::ACTIVE);
        return $feedFtp;
    }

    /**
     * example FeedFtp set request.
     *
     * @param FeedFtp[] $feedFtps
     * @return FeedFtp[]
     */
    public static function createExampleSetRequest(array $feedFtps): array
    {
        // create operands
        $operands = [];

        foreach ($feedFtps as $feedFtp) {
            $operand = new FeedFtp($feedFtp->getFeedHolderId());
            $operand->setItemListUploadType(ItemListUploadType::UPDATE_ALL);

            $schedule = new ScheduleHourly(ScheduleType::HOURLY, 1);
            $operand->setSchedule($schedule);

            $operand->setFeedUrl("ftp://test.com/test1.tsv");
            $operand->setUserName("user_name_1");
            $operand->setUserPassword("user_password_1");
            $operand->setActiveStatus(ActiveStatus::ACTIVE);
            $operands[] = $operand;
        }

        return $operands;
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    FeedFtpServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
