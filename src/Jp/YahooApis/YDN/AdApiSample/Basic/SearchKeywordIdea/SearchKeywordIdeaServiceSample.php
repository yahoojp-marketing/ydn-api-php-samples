<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\SearchKeywordIdea;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201907\SearchKeywordIdea\{KeywordFrequency, KeywordRecency, MatchType, SearchKeywordIdeaSelector, SearchKeywordIdeaService, get, getResponse, SortField, SortType};
use Jp\YahooApis\YDN\V201907\Paging;

/**
 * example SearchKeywordIdeaService operation and Utility method collection.
 */
class SearchKeywordIdeaServiceSample
{

    const SERVICE_NAME = 'SearchKeywordIdeaService';

    /**
     * @var SearchKeywordIdeaService
     */
    private static $service = null;

    /**
     * SearchKeywordIdeaServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(SearchKeywordIdeaService::class);
    }

    /**
     * example get searchKeywordIdea.
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
     * example SearchKeywordIdeaService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        try {
            // =================================================================
            // SearchKeywordIdeaService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest();

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
     * @return get
     */
    public static function buildExampleGetRequest(): get
    {
        $selector = new SearchKeywordIdeaSelector();
        $selector->setSearchKeywordRecency(KeywordRecency::WITHIN_30DAYS);
        $selector->setSearchKeywordFrequency(KeywordFrequency::ONCE_OR_MORE);
        $selector->setSortField(SortField::KEYWORD_ID);
        $selector->setSortType(SortType::ASC);
        $selector->setMatchType(MatchType::EXACT);

        $paging = new Paging(1, 20);
        $selector->setPaging($paging);
        return new get($selector);
    }

    /**
     * create SearchKeywordIdeaValuesList.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    public static function create(): ValuesHolder
    {
        $request = self::buildExampleGetRequest();
        $response = self::get($request);

        $selfValuesHolder = new ValuesHolder();
        $selfValuesHolder->setSearchKeywordIdeaValuesList($response->getRval()->getValues());
        return $selfValuesHolder;
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    SearchKeywordIdeaServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}

