<?php

namespace Jp\YahooApis\YDN\V201907\FeedHolder;

class FeedHolderPage extends \Jp\YahooApis\YDN\V201907\Page
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
     * @return \Jp\YahooApis\YDN\V201907\FeedHolder\FeedHolderPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
