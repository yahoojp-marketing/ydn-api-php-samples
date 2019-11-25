<?php

namespace Jp\YahooApis\YDN\V201911\FeedHolder;

class FeedHolderReturnValue
{

    /**
     * @var FeedHolderValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
    
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
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
