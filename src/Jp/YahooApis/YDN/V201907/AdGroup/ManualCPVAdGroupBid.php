<?php

namespace Jp\YahooApis\YDN\V201907\AdGroup;

class ManualCPVAdGroupBid extends AdGroupBid
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
     * @return \Jp\YahooApis\YDN\V201907\AdGroup\ManualCPVAdGroupBid
     */
    public function setMaxCpv($maxCpv)
    {
      $this->maxCpv = $maxCpv;
      return $this;
    }

}
