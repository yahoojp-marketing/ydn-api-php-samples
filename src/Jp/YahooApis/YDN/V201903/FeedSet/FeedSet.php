<?php

namespace Jp\YahooApis\YDN\V201903\FeedSet;

class FeedSet
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $feedHolderId
     */
    protected $feedHolderId = null;

    /**
     * @var int $feedSetId
     */
    protected $feedSetId = null;

    /**
     * @var string $feedSetName
     */
    protected $feedSetName = null;

    /**
     * @var boolean $isDefaultSet
     */
    protected $isDefaultSet = null;

    /**
     * @var int $itemCount
     */
    protected $itemCount = null;

    /**
     * @var ConditionSet[] $conditionSets
     */
    protected $conditionSets = null;

    /**
     * @param int $feedHolderId
     */
    public function __construct($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
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
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\FeedSet
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedHolderId()
    {
      return $this->feedHolderId;
    }

    /**
     * @param int $feedHolderId
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\FeedSet
     */
    public function setFeedHolderId($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedSetId()
    {
      return $this->feedSetId;
    }

    /**
     * @param int $feedSetId
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\FeedSet
     */
    public function setFeedSetId($feedSetId)
    {
      $this->feedSetId = $feedSetId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedSetName()
    {
      return $this->feedSetName;
    }

    /**
     * @param string $feedSetName
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\FeedSet
     */
    public function setFeedSetName($feedSetName)
    {
      $this->feedSetName = $feedSetName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefaultSet()
    {
      return $this->isDefaultSet;
    }

    /**
     * @param boolean $isDefaultSet
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\FeedSet
     */
    public function setIsDefaultSet($isDefaultSet)
    {
      $this->isDefaultSet = $isDefaultSet;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
      return $this->itemCount;
    }

    /**
     * @param int $itemCount
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\FeedSet
     */
    public function setItemCount($itemCount)
    {
      $this->itemCount = $itemCount;
      return $this;
    }

    /**
     * @return ConditionSet[]
     */
    public function getConditionSets()
    {
      return $this->conditionSets;
    }

    /**
     * @param ConditionSet[] $conditionSets
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\FeedSet
     */
    public function setConditionSets(array $conditionSets = null)
    {
      $this->conditionSets = $conditionSets;
      return $this;
    }

}
