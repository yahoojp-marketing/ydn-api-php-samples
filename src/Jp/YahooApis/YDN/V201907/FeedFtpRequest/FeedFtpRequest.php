<?php

namespace Jp\YahooApis\YDN\V201907\FeedFtpRequest;

class FeedFtpRequest
{

    /**
     * @var int $feedHolderId
     */
    protected $feedHolderId = null;

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
    public function getFeedHolderId()
    {
      return $this->feedHolderId;
    }

    /**
     * @param int $feedHolderId
     * @return \Jp\YahooApis\YDN\V201907\FeedFtpRequest\FeedFtpRequest
     */
    public function setFeedHolderId($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
      return $this;
    }

}
