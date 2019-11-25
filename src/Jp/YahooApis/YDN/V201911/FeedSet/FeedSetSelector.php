<?php

namespace Jp\YahooApis\YDN\V201911\FeedSet;

class FeedSetSelector
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
     * @var long[] $feedSetIds
     */
    protected $feedSetIds = null;

    /**
     * @var boolean $includeItemCount
     */
    protected $includeItemCount = null;

    /**
     * @param int $accountId
     * @param int $feedHolderId
     */
    public function __construct($accountId, $feedHolderId)
    {
      $this->accountId = $accountId;
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
     * @return \Jp\YahooApis\YDN\V201911\FeedSet\FeedSetSelector
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
     * @return \Jp\YahooApis\YDN\V201911\FeedSet\FeedSetSelector
     */
    public function setFeedHolderId($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getFeedSetIds()
    {
      return $this->feedSetIds;
    }

    /**
     * @param long[] $feedSetIds
     * @return \Jp\YahooApis\YDN\V201911\FeedSet\FeedSetSelector
     */
    public function setFeedSetIds(array $feedSetIds = null)
    {
      $this->feedSetIds = $feedSetIds;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeItemCount()
    {
      return $this->includeItemCount;
    }

    /**
     * @param boolean $includeItemCount
     * @return \Jp\YahooApis\YDN\V201911\FeedSet\FeedSetSelector
     */
    public function setIncludeItemCount($includeItemCount)
    {
      $this->includeItemCount = $includeItemCount;
      return $this;
    }

}
