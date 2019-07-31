<?php

namespace Jp\YahooApis\YDN\V201907\Dictionary;

class OsVersion
{

    /**
     * @var DeviceOsType $osType
     */
    protected $osType = null;

    /**
     * @var string $version
     */
    protected $version = null;

    /**
     * @param DeviceOsType $osType
     * @param string $version
     */
    public function __construct($osType, $version)
    {
      $this->osType = $osType;
      $this->version = $version;
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
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\OsVersion
     */
    public function setOsType($osType)
    {
      $this->osType = $osType;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param string $version
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\OsVersion
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
