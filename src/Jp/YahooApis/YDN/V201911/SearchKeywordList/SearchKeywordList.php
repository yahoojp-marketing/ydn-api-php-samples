<?php

namespace Jp\YahooApis\YDN\V201911\SearchKeywordList;

class SearchKeywordList
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $searchKeywordListId
     */
    protected $searchKeywordListId = null;

    /**
     * @var string $searchKeywordListName
     */
    protected $searchKeywordListName = null;

    /**
     * @var string $searchKeywordListDescription
     */
    protected $searchKeywordListDescription = null;

    /**
     * @var KeywordRecency $searchKeywordRecency
     */
    protected $searchKeywordRecency = null;

    /**
     * @var KeywordFrequency $searchKeywordFrequency
     */
    protected $searchKeywordFrequency = null;

    /**
     * @var DeliveryStatus $deliveryStatus
     */
    protected $deliveryStatus = null;

    /**
     * @var SearchKeyword[] $searchKeyword
     */
    protected $searchKeyword = null;

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
     * @return \Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordList
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchKeywordListId()
    {
      return $this->searchKeywordListId;
    }

    /**
     * @param int $searchKeywordListId
     * @return \Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordList
     */
    public function setSearchKeywordListId($searchKeywordListId)
    {
      $this->searchKeywordListId = $searchKeywordListId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchKeywordListName()
    {
      return $this->searchKeywordListName;
    }

    /**
     * @param string $searchKeywordListName
     * @return \Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordList
     */
    public function setSearchKeywordListName($searchKeywordListName)
    {
      $this->searchKeywordListName = $searchKeywordListName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchKeywordListDescription()
    {
      return $this->searchKeywordListDescription;
    }

    /**
     * @param string $searchKeywordListDescription
     * @return \Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordList
     */
    public function setSearchKeywordListDescription($searchKeywordListDescription)
    {
      $this->searchKeywordListDescription = $searchKeywordListDescription;
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
     * @return \Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordList
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
     * @return \Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordList
     */
    public function setSearchKeywordFrequency($searchKeywordFrequency)
    {
      $this->searchKeywordFrequency = $searchKeywordFrequency;
      return $this;
    }

    /**
     * @return DeliveryStatus
     */
    public function getDeliveryStatus()
    {
      return $this->deliveryStatus;
    }

    /**
     * @param DeliveryStatus $deliveryStatus
     * @return \Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordList
     */
    public function setDeliveryStatus($deliveryStatus)
    {
      $this->deliveryStatus = $deliveryStatus;
      return $this;
    }

    /**
     * @return SearchKeyword[]
     */
    public function getSearchKeyword()
    {
      return $this->searchKeyword;
    }

    /**
     * @param SearchKeyword[] $searchKeyword
     * @return \Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordList
     */
    public function setSearchKeyword(array $searchKeyword = null)
    {
      $this->searchKeyword = $searchKeyword;
      return $this;
    }

}
