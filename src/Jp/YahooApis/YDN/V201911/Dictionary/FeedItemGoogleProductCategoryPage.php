<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class FeedItemGoogleProductCategoryPage extends \Jp\YahooApis\YDN\V201911\Page
{

    /**
     * @var FeedItemGoogleProductCategoryValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedItemGoogleProductCategoryValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param FeedItemGoogleProductCategoryValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategoryPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
