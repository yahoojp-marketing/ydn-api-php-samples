<?php

namespace Jp\YahooApis\YDN\V201903\FeedData;

class FeedDataValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var FeedDataRecord $feedData
     */
    protected $feedData = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedDataRecord
     */
    public function getFeedData()
    {
      return $this->feedData;
    }

    /**
     * @param FeedDataRecord $feedData
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataValues
     */
    public function setFeedData($feedData)
    {
      $this->feedData = $feedData;
      return $this;
    }

}
