<?php

namespace Jp\YahooApis\YDN\V201911\FeedHolder;

class FeedHolderPage extends \Jp\YahooApis\YDN\V201911\Page
{

    /**
     * @var FeedHolderValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedHolderValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param FeedHolderValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
