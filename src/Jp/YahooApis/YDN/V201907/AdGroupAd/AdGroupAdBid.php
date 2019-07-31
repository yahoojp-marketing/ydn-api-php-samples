<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupAd;

abstract class AdGroupAdBid
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
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\AdGroupAdBid
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
