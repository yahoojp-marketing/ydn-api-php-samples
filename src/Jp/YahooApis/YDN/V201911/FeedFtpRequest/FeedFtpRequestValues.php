<?php

namespace Jp\YahooApis\YDN\V201911\FeedFtpRequest;

class FeedFtpRequestValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var FeedFtpRequest $feedFtp
     */
    protected $feedFtp = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedFtpRequest
     */
    public function getFeedFtp()
    {
      return $this->feedFtp;
    }

    /**
     * @param FeedFtpRequest $feedFtp
     * @return \Jp\YahooApis\YDN\V201911\FeedFtpRequest\FeedFtpRequestValues
     */
    public function setFeedFtp($feedFtp)
    {
      $this->feedFtp = $feedFtp;
      return $this;
    }

}
