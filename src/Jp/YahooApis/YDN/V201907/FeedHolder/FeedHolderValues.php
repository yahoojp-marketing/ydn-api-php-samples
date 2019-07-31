<?php

namespace Jp\YahooApis\YDN\V201907\FeedHolder;

class FeedHolderValues extends \Jp\YahooApis\YDN\V201907\ReturnValue
{

    /**
     * @var FeedHolderRecord $feedHolder
     */
    protected $feedHolder = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedHolderRecord
     */
    public function getFeedHolder()
    {
      return $this->feedHolder;
    }

    /**
     * @param FeedHolderRecord $feedHolder
     * @return \Jp\YahooApis\YDN\V201907\FeedHolder\FeedHolderValues
     */
    public function setFeedHolder($feedHolder)
    {
      $this->feedHolder = $feedHolder;
      return $this;
    }

}
