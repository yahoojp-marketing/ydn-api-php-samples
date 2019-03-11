<?php

namespace Jp\YahooApis\YDN\V201903\AdGroup;

class AdGroupValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var AdGroup $adGroup
     */
    protected $adGroup = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroup
     */
    public function getAdGroup()
    {
      return $this->adGroup;
    }

    /**
     * @param AdGroup $adGroup
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroupValues
     */
    public function setAdGroup($adGroup)
    {
      $this->adGroup = $adGroup;
      return $this;
    }

}
