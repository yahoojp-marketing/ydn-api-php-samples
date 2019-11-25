<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupAd;

class ManualCPVAdGroupAdBid extends AdGroupAdBid
{

    /**
     * @var int $maxCpv
     */
    protected $maxCpv = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getMaxCpv()
    {
      return $this->maxCpv;
    }

    /**
     * @param int $maxCpv
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\ManualCPVAdGroupAdBid
     */
    public function setMaxCpv($maxCpv)
    {
      $this->maxCpv = $maxCpv;
      return $this;
    }

}
