<?php

namespace Jp\YahooApis\YDN\V201911\Campaign;

abstract class BiddingStrategy
{

    /**
     * @var BiddingStrategyType $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BiddingStrategyType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param BiddingStrategyType $type
     * @return \Jp\YahooApis\YDN\V201911\Campaign\BiddingStrategy
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
