<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class FeedItemGoogleProductCategoryValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var FeedItemGoogleProductCategory $FeedItemGoogleProductCategory
     */
    protected $FeedItemGoogleProductCategory = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedItemGoogleProductCategory
     */
    public function getFeedItemGoogleProductCategory()
    {
      return $this->FeedItemGoogleProductCategory;
    }

    /**
     * @param FeedItemGoogleProductCategory $FeedItemGoogleProductCategory
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategoryValues
     */
    public function setFeedItemGoogleProductCategory($FeedItemGoogleProductCategory)
    {
      $this->FeedItemGoogleProductCategory = $FeedItemGoogleProductCategory;
      return $this;
    }

}
