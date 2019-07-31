<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Repository;

use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201907\SearchKeywordList\SearchKeywordList;

/**
 * Utility method collection for PHP Sample Program.
 */
class SearchKeywordListValuesRepository
{

    /**
     * @var ValuesHolder
     */
    private $valuesHolder;

    /**
     * SearchKeywordListValuesRepository constructor.
     * @param ValuesHolder $valuesHolder
     */
    public function __construct(ValuesHolder $valuesHolder)
    {
        $this->valuesHolder = $valuesHolder;
    }

    /**
     * @return SearchKeywordList[]
     */
    public function getSearchKeywordLists(): array
    {
        $keywordList = [];

        foreach ($this->valuesHolder->getSearchKeywordListValuesList() as $searchKeywordListValues) {
            $keywordList[] = $searchKeywordListValues->getSearchKeywordList();
        }
        return $keywordList;
    }

    /**
     * @return array
     */
    public function getSearchKeywordIdLists(): array
    {
        $keywordIdList = [];

        foreach ($this->valuesHolder->getSearchKeywordListValuesList() as $searchKeywordListValues) {
            $keywordIdList[] = $searchKeywordListValues->getSearchKeywordList()->getSearchKeywordListId();
        }
        return $keywordIdList;
    }
}
