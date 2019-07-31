<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\SearchKeywordList;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Basic\SearchKeywordIdea\SearchKeywordIdeaServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201907\SearchKeywordList\{SearchKeyword,
    SearchKeywordList,
    SearchKeywordListOperation,
    SearchKeywordListSelector,
    SearchKeywordListService,
    get,
    getResponse,
    mutate,
    mutateResponse,
    Operator};
use Jp\YahooApis\YDN\V201907\Paging;

/**
 * example SearchKeywordListService operation and Utility method collection.
 */
class SearchKeywordListServiceSample
{

    const SERVICE_NAME = 'SearchKeywordListService';

    /**
     * @var SearchKeywordListService
     */
    private static $service = null;

    /**
     * SearchKeywordListServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(SearchKeywordListService::class);
    }

    /**
     * example get searchKeywordList.
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
     * example mutate searchKeywordList.
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
        if (count($valuesHolder->getSearchKeywordListValuesList()) > 0) {
            $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);
            self::mutate(
                self::buildExampleMutateRequest(Operator::REMOVE, SoapUtils::getAccountId(),
                    $valuesRepositoryFacade->getSearchKeywordListValuesRepository()->getSearchKeywordLists()
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
        return SearchKeywordIdeaServiceSample::create();
    }

    /**
     * get keyword list.
     *
     * @param ValuesHolder $valuesHolder
     * @return array
     */
    private static function getKeywordList(ValuesHolder $valuesHolder): array
    {
        $addKeywordList = array();

        foreach ( $valuesHolder->getSearchKeywordIdeaValuesList() as $values) {
            $searchKeyword = new SearchKeyword();
            $searchKeyword->setSearchKeywordId($values->getSearchKeywordIdea()->getSearchKeywordId());
            $addKeywordList[] = $searchKeyword;
        }
        return $addKeywordList;
    }

    /**
     * example SearchKeywordListService operation.
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
            $addKeywordList = self::getKeywordList($valuesHolder);

            // =================================================================
            // SearchKeywordListService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleSearchKeywordList($valuesHolder->getSearchKeywordIdeaValuesList()),
            ]);

            // run
            $addResponse = self::mutate($addRequest);
            $valuesHolder->setSearchKeywordListValuesList($addResponse->getRval()->getValues());

            // =================================================================
            // SearchKeywordListService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getSearchKeywordListValuesRepository()->getSearchKeywordIdLists());

            // run
            self::get($getRequest);

            // =================================================================
            // SearchKeywordListService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId,
                self::createExampleSetRequest($accountId,
                    $valuesRepositoryFacade->getSearchKeywordListValuesRepository()->getSearchKeywordLists(),
                    $addKeywordList
                )
            );

            // run
            self::mutate($setRequest);

            // =================================================================
            // SearchKeywordListService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId,
                $valuesRepositoryFacade->getSearchKeywordListValuesRepository()->getSearchKeywordLists()
            );

            // run
            self::mutate($removeRequest);
            $valuesHolder->setSearchKeywordListValuesList([]);

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
     * @param array $keywordListIds
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, array $keywordListIds): get
    {
        $selector = new SearchKeywordListSelector($accountId);
        $selector->setSearchKeywordListIds($keywordListIds);

        $paging = new Paging(1, 20);
        $selector->setPaging($paging);
        return new get($selector);
    }

    /**
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @param SearchKeywordList[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new SearchKeywordListOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example searchKeywordList request.
     *
     * @param array $searchKeywordIdeaValues
     * @return SearchKeywordList
     */
    public static function createExampleSearchKeywordList(array $searchKeywordIdeaValues): SearchKeywordList
    {
        $searchKeywords = [];
        foreach ($searchKeywordIdeaValues as $value) {
            $searchKeyword = new SearchKeyword();
            $searchKeyword->setSearchKeywordId($value->getSearchKeywordIdea()->getSearchKeywordId());
            $searchKeywords[] = $searchKeyword;
        }

        $searchKeywordList = new SearchKeywordList(SoapUtils::getAccountId());
        $searchKeywordList->setSearchKeywordListName('SampleSearchKeywordList_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $searchKeywordList->setSearchKeywordListDescription('SampleSearchKeywordListDescription_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $searchKeywordList->setSearchKeyword($searchKeywords);

        return $searchKeywordList;
    }

    /**
     * example searchKeywordList set request.
     *
     * @param int $accountId
     * @param array $searchKeywordList
     * @param array $addKeywordList
     * @return array
     */
    public static function createExampleSetRequest(int $accountId, array $searchKeywordList, array $addKeywordList): array
    {
        // create operands
        $operands = [];

        foreach ($searchKeywordList as $list) {
            $operand = new SearchKeywordList($accountId);
            $operand->setSearchKeywordListId($list->getSearchKeywordListId());
            $operand->setSearchKeywordListName('SampleSearchKeywordList_UpdateOn_' . SoapUtils::getCurrentTimestamp());
            $operand->setSearchKeywordListDescription('SampleSearchKeywordListDescription_UpdateOn_' . SoapUtils::getCurrentTimestamp());

            if (count($addKeywordList) > 0) {
                $operand->setSearchKeyword($addKeywordList);
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
    SearchKeywordListServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}

