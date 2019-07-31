<?php

namespace Jp\YahooApis\YDN\V201907\SearchKeywordIdea;

class SearchKeywordIdeaSelector
{

    /**
     * @var string[] $keywords
     */
    protected $keywords = null;

    /**
     * @var long[] $keywordIds
     */
    protected $keywordIds = null;

    /**
     * @var KeywordRecency $searchKeywordRecency
     */
    protected $searchKeywordRecency = null;

    /**
     * @var KeywordFrequency $searchKeywordFrequency
     */
    protected $searchKeywordFrequency = null;

    /**
     * @var SortField $sortField
     */
    protected $sortField = null;

    /**
     * @var SortType $sortType
     */
    protected $sortType = null;

    /**
     * @var MatchType $matchType
     */
    protected $matchType = null;

    /**
     * @var \Jp\YahooApis\YDN\V201907\Paging $paging
     */
    protected $paging = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getKeywords()
    {
      return $this->keywords;
    }

    /**
     * @param string[] $keywords
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaSelector
     */
    public function setKeywords(array $keywords = null)
    {
      $this->keywords = $keywords;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getKeywordIds()
    {
      return $this->keywordIds;
    }

    /**
     * @param long[] $keywordIds
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaSelector
     */
    public function setKeywordIds(array $keywordIds = null)
    {
      $this->keywordIds = $keywordIds;
      return $this;
    }

    /**
     * @return KeywordRecency
     */
    public function getSearchKeywordRecency()
    {
      return $this->searchKeywordRecency;
    }

    /**
     * @param KeywordRecency $searchKeywordRecency
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaSelector
     */
    public function setSearchKeywordRecency($searchKeywordRecency)
    {
      $this->searchKeywordRecency = $searchKeywordRecency;
      return $this;
    }

    /**
     * @return KeywordFrequency
     */
    public function getSearchKeywordFrequency()
    {
      return $this->searchKeywordFrequency;
    }

    /**
     * @param KeywordFrequency $searchKeywordFrequency
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaSelector
     */
    public function setSearchKeywordFrequency($searchKeywordFrequency)
    {
      $this->searchKeywordFrequency = $searchKeywordFrequency;
      return $this;
    }

    /**
     * @return SortField
     */
    public function getSortField()
    {
      return $this->sortField;
    }

    /**
     * @param SortField $sortField
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaSelector
     */
    public function setSortField($sortField)
    {
      $this->sortField = $sortField;
      return $this;
    }

    /**
     * @return SortType
     */
    public function getSortType()
    {
      return $this->sortType;
    }

    /**
     * @param SortType $sortType
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaSelector
     */
    public function setSortType($sortType)
    {
      $this->sortType = $sortType;
      return $this;
    }

    /**
     * @return MatchType
     */
    public function getMatchType()
    {
      return $this->matchType;
    }

    /**
     * @param MatchType $matchType
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaSelector
     */
    public function setMatchType($matchType)
    {
      $this->matchType = $matchType;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201907\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201907\Paging $paging
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
