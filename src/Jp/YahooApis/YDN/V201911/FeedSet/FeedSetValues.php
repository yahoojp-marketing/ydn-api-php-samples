<?php

namespace Jp\YahooApis\YDN\V201911\FeedSet;

class FeedSetValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var FeedSet $feedSet
     */
    protected $feedSet = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedSet
     */
    public function getFeedSet()
    {
      return $this->feedSet;
    }

    /**
     * @param FeedSet $feedSet
     * @return \Jp\YahooApis\YDN\V201911\FeedSet\FeedSetValues
     */
    public function setFeedSet($feedSet)
    {
      $this->feedSet = $feedSet;
      return $this;
    }

}
