<?php

namespace Jp\YahooApis\YDN\V201903\SearchKeywordList;

class SearchKeywordListSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $searchKeywordListIds
     */
    protected $searchKeywordListIds = null;

    /**
     * @var \Jp\YahooApis\YDN\V201903\Paging $paging
     */
    protected $paging = null;

    /**
     * @param int $accountId
     */
    public function __construct($accountId)
    {
      $this->accountId = $accountId;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\YDN\V201903\SearchKeywordList\SearchKeywordListSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getSearchKeywordListIds()
    {
      return $this->searchKeywordListIds;
    }

    /**
     * @param long[] $searchKeywordListIds
     * @return \Jp\YahooApis\YDN\V201903\SearchKeywordList\SearchKeywordListSelector
     */
    public function setSearchKeywordListIds(array $searchKeywordListIds = null)
    {
      $this->searchKeywordListIds = $searchKeywordListIds;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201903\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201903\Paging $paging
     * @return \Jp\YahooApis\YDN\V201903\SearchKeywordList\SearchKeywordListSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
