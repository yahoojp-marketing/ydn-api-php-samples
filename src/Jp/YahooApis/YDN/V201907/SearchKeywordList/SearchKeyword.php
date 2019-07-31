<?php

namespace Jp\YahooApis\YDN\V201907\SearchKeywordList;

class SearchKeyword
{

    /**
     * @var int $searchKeywordId
     */
    protected $searchKeywordId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getSearchKeywordId()
    {
      return $this->searchKeywordId;
    }

    /**
     * @param int $searchKeywordId
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordList\SearchKeyword
     */
    public function setSearchKeywordId($searchKeywordId)
    {
      $this->searchKeywordId = $searchKeywordId;
      return $this;
    }

}
