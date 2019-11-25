<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\RetargetingTag;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201911\RetargetingTag\{get, getResponse, mutate, mutateResponse, Operator, RetargetingTagOperation, RetargetingTagSelector, RetargetingTagService};

/**
 * example RetargetingTagService operation and Utility method collection.
 */
class RetargetingTagServiceSample
{

    const SERVICE_NAME = 'RetargetingTagService';

    /**
     * @var RetargetingTagService
     */
    private static $service = null;

    /**
     * RetargetingTagServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(RetargetingTagService::class);
    }

    /**
     * example get Retargeting Tags.
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
     * example mutate Retargeting Tags.
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
                    if ($values->getError()[0]->getCode() != 'D0001') {
                        throw new Exception('Fail to ' . self::SERVICE_NAME . '/' . (string)$request->getOperations()->getOperator() . '.' . PHP_EOL);
                    }
                }
            }
        }

        return $response;
    }

    /**
     * create basic RetargetingTag.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    public static function create(): ValuesHolder
    {
        $accountId = SoapUtils::getAccountId();

        self::mutate(self::buildExampleMutateRequest(Operator::ADD, $accountId));

        $request = self::buildExampleGetRequest($accountId);
        $response = self::get($request);

        $selfValuesHolder = new ValuesHolder();
        $selfValuesHolder->setRetargetingTagValuesList($response->getRval()->getValues());
        return $selfValuesHolder;
    }

    /**
     * example RetargetingTagService operation.
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
            // RetargetingTagService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId);

            // run
            self::mutate($addRequest);

            // =================================================================
            // RetargetingTagService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId);

            // run
            self::get($getRequest);

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }

    /**
     * example get request.
     *
     * @param int $accountId
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId): get
    {
        return new get(
            new RetargetingTagSelector($accountId)
        );
    }

    /**
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId): mutate
    {
        return new mutate(
            new RetargetingTagOperation($operator, $accountId)
        );
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    RetargetingTagServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
