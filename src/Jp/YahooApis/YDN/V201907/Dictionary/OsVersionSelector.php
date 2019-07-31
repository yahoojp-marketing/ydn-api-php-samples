<?php

namespace Jp\YahooApis\YDN\V201907\Dictionary;

class OsVersionSelector
{

    /**
     * @var DeviceOsType $osType
     */
    protected $osType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeviceOsType
     */
    public function getOsType()
    {
      return $this->osType;
    }

    /**
     * @param DeviceOsType $osType
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\OsVersionSelector
     */
    public function setOsType($osType)
    {
      $this->osType = $osType;
      return $this;
    }

}
