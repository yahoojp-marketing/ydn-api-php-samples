<?php

namespace Jp\YahooApis\YDN\V201911\FeedSet;

class FeedSetReturnValue extends \Jp\YahooApis\YDN\V201911\ListReturnValue
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
     * @return \Jp\YahooApis\YDN\V201911\FeedSet\FeedSetReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
