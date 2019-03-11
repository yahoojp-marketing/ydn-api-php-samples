<?php

namespace Jp\YahooApis\YDN\V201903\FeedData;

class FeedDataPage extends \Jp\YahooApis\YDN\V201903\Page
{

    /**
     * @var FeedDataValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedDataValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param FeedDataValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
