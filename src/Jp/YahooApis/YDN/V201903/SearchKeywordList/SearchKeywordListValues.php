<?php

namespace Jp\YahooApis\YDN\V201903\SearchKeywordList;

class SearchKeywordListValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var SearchKeywordList $searchKeywordList
     */
    protected $searchKeywordList = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SearchKeywordList
     */
    public function getSearchKeywordList()
    {
      return $this->searchKeywordList;
    }

    /**
     * @param SearchKeywordList $searchKeywordList
     * @return \Jp\YahooApis\YDN\V201903\SearchKeywordList\SearchKeywordListValues
     */
    public function setSearchKeywordList($searchKeywordList)
    {
      $this->searchKeywordList = $searchKeywordList;
      return $this;
    }

}
