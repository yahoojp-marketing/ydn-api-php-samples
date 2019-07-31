<?php

namespace Jp\YahooApis\YDN\V201907\AdGroup;

class ManualCPCAdGroupBid extends AdGroupBid
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
     * @return \Jp\YahooApis\YDN\V201907\AdGroup\ManualCPCAdGroupBid
     */
    public function setMaxCpc($maxCpc)
    {
      $this->maxCpc = $maxCpc;
      return $this;
    }

}
