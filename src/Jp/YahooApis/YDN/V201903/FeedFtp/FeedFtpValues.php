<?php

namespace Jp\YahooApis\YDN\V201903\FeedFtp;

class FeedFtpValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var FeedFtp $feedFtp
     */
    protected $feedFtp = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedFtp
     */
    public function getFeedFtp()
    {
      return $this->feedFtp;
    }

    /**
     * @param FeedFtp $feedFtp
     * @return \Jp\YahooApis\YDN\V201903\FeedFtp\FeedFtpValues
     */
    public function setFeedFtp($feedFtp)
    {
      $this->feedFtp = $feedFtp;
      return $this;
    }

}
