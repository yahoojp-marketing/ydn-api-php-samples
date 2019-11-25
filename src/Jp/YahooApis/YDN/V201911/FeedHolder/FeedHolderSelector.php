<?php

namespace Jp\YahooApis\YDN\V201911\FeedHolder;

class FeedHolderSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $feedHolderIds
     */
    protected $feedHolderIds = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Paging $paging
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
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getFeedHolderIds()
    {
      return $this->feedHolderIds;
    }

    /**
     * @param long[] $feedHolderIds
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderSelector
     */
    public function setFeedHolderIds(array $feedHolderIds = null)
    {
      $this->feedHolderIds = $feedHolderIds;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201911\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201911\Paging $paging
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
