<?php

namespace Jp\YahooApis\YDN\V201903\FeedSet;

class FeedSetValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var FeedSet $FeedSet
     */
    protected $FeedSet = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedSet
     */
    public function getFeedSet()
    {
      return $this->FeedSet;
    }

    /**
     * @param FeedSet $FeedSet
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\FeedSetValues
     */
    public function setFeedSet($FeedSet)
    {
      $this->FeedSet = $FeedSet;
      return $this;
    }

}
