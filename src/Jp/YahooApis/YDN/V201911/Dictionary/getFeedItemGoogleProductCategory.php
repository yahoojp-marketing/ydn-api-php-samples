<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class getFeedItemGoogleProductCategory
{

    /**
     * @var FeedItemGoogleProductCategorySelector $selector
     */
    protected $selector = null;

    /**
     * @param FeedItemGoogleProductCategorySelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return FeedItemGoogleProductCategorySelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param FeedItemGoogleProductCategorySelector $selector
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\getFeedItemGoogleProductCategory
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
