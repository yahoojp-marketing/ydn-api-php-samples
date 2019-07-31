<?php

namespace Jp\YahooApis\YDN\V201907\FeedFtp;

class FeedFtpSelector
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
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\FeedFtpSelector
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
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\FeedFtpSelector
     */
    public function setFeedHolderIds(array $feedHolderIds = null)
    {
      $this->feedHolderIds = $feedHolderIds;
      return $this;
    }

}
