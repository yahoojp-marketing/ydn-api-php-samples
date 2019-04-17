<?php

namespace Jp\YahooApis\YDN\V201903\FeedSet;

class FeedSetPage extends \Jp\YahooApis\YDN\V201903\Page
{

    /**
     * @var FeedSetValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedSetValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param FeedSetValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\FeedSetPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
