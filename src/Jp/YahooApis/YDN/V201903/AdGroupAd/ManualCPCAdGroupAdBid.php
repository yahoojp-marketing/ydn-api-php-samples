<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupAd;

class ManualCPCAdGroupAdBid extends AdGroupAdBid
{

    /**
     * @var int $maxCpc
     */
    protected $maxCpc = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getMaxCpc()
    {
      return $this->maxCpc;
    }

    /**
     * @param int $maxCpc
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\ManualCPCAdGroupAdBid
     */
    public function setMaxCpc($maxCpc)
    {
      $this->maxCpc = $maxCpc;
      return $this;
    }

}
