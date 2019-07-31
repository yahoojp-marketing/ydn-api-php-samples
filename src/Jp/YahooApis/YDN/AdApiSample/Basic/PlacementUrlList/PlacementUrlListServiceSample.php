<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\PlacementUrlList;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Basic\PlacementUrlIdea\PlacementUrlIdeaServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201907\PlacementUrlList\{PlacementUrlList,
    PlacementUrlListOperation,
    PlacementUrlListSelector,
    PlacementUrlListService,
    get,
    getResponse,
    mutate,
    mutateResponse,
    Operator,
    UrlActiveFlg,
    UrlList};
use Jp\YahooApis\YDN\V201907\Paging;

/**
 * example PlacementUrlListService operation and Utility method collection.
 */
class PlacementUrlListServiceSample
{

    const SERVICE_NAME = 'PlacementUrlListService';

    /**
     * @var PlacementUrlListService
     */
    private static $service = null;

    /**
     * PlacementUrlListServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(PlacementUrlListService::class);
    }

    /**
     * example get placementUrlList.
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
     * example mutate placementUrlList.
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
     * cleanup service object.
     *
     * @param ValuesHolder $valuesHolder
     * @throws Exception
     */
    public static function cleanup(ValuesHolder $valuesHolder): void
    {
        if (count($valuesHolder->getPlacementUrlListValuesList()) > 0) {
            $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);
            self::mutate(
                self::buildExampleMutateRequest(Operator::REMOVE, SoapUtils::getAccountId(),
                    $valuesRepositoryFacade->getPlacementUrlListValuesRepository()->getPlacementUrlLists()
                )
            );
        }
    }

    /**
     * check & create upper service object.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    private static function setup(): ValuesHolder
    {
        return PlacementUrlIdeaServiceSample::create();
    }

    /**
     * get url list.
     *
     * @param ValuesHolder $valuesHolder
     * @return array
     */
    public static function getUrlList(ValuesHolder $valuesHolder): array
    {
        $addUrlList = array();
        $i = 0;
        foreach ( $valuesHolder->getPlacementUrlIdeaValuesList() as $values) {
            if ($i == 1000) {
                break;
            }
            if ($values->getOperationSucceeded() && $values->getPlacementUrlIdea()->getSearchUrl() != 'UNKNOWN_URL') {
                $urlList = new UrlList();
                $urlList->setPlacementUrl($values->getPlacementUrlIdea()->getSearchUrl());
                $urlList->setActiveFlg(UrlActiveFlg::ACTIVE);
                $addUrlList[] = $urlList;
            }
            $i++;
        }
        return $addUrlList;
    }

    /**
     * example PlacementUrlListService operation.
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
            $addUrlList = self::getUrlList($valuesHolder);

            // =================================================================
            // PlacementUrlListService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExamplePlacementUrlList($addUrlList),
            ]);

            // run
            $addResponse = self::mutate($addRequest);
            $valuesHolder->setPlacementUrlListValuesList($addResponse->getRval()->getValues());

            // =================================================================
            // PlacementUrlListService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getPlacementUrlListValuesRepository()->getPlacementUrlIdLists());

            // run
            self::get($getRequest);

            // =================================================================
            // PlacementUrlListService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId,
                self::createExampleSetRequest($accountId,
                    $valuesRepositoryFacade->getPlacementUrlListValuesRepository()->getPlacementUrlLists(),
                    $addUrlList
                )
            );

            // run
            self::mutate($setRequest);

            // =================================================================
            // PlacementUrlListService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId,
                $valuesRepositoryFacade->getPlacementUrlListValuesRepository()->getPlacementUrlLists()
            );

            // run
            self::mutate($removeRequest);
            $valuesHolder->setPlacementUrlListValuesList([]);

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
     * @param array $urlListIds
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, array $urlListIds): get
    {
        $selector = new PlacementUrlListSelector($accountId);
        $selector->setUrlListIds($urlListIds);

        $paging = new Paging(1, 20);
        $selector->setPaging($paging);
        return new get($selector);
    }

    /**
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @param PlacementUrlList[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new PlacementUrlListOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example placementUrlList request.
     *
     * @param array $urlList
     * @return PlacementUrlList
     */
    public static function createExamplePlacementUrlList(array $urlList): PlacementUrlList
    {
        $placementUrlList = new PlacementUrlList(SoapUtils::getAccountId());
        $placementUrlList->setUrlListName('SamplePlacementUrlList_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $placementUrlList->setDescription('SamplePlacementUrlListDescription_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $placementUrlList->setUrls($urlList);

        return $placementUrlList;
    }

    /**
     * example placementUrlList set request.
     *
     * @param int $accountId
     * @param array $placementUrlList
     * @param array $addUrlList
     * @return array
     */
    public static function createExampleSetRequest(int $accountId, array $placementUrlList, array $addUrlList): array
    {
        // create operands
        $operands = [];

        foreach ($placementUrlList as $list) {
            $operand = new PlacementUrlList($accountId);
            $operand->setUrlListId($list->getUrlListId());
            $operand->setUrlListName('SamplePlacementUrlList_UpdateOn_' . SoapUtils::getCurrentTimestamp());
            $operand->setDescription('SamplePlacementUrlListDescription_UpdateOn_' . SoapUtils::getCurrentTimestamp());

            if (count($addUrlList) > 0) {
                $operand->setUrls($addUrlList);
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
    PlacementUrlListServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}

