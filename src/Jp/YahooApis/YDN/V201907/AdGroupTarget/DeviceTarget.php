<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupTarget;

class DeviceTarget extends Target
{

    /**
     * @var DeviceType $deviceType
     */
    protected $deviceType = null;

    /**
     * @param TargetType $type
     */
    public function __construct($type)
    {
      parent::__construct($type);
    }

    /**
     * @return DeviceType
     */
    public function getDeviceType()
    {
      return $this->deviceType;
    }

    /**
     * @param DeviceType $deviceType
     * @return \Jp\YahooApis\YDN\V201907\AdGroupTarget\DeviceTarget
     */
    public function setDeviceType($deviceType)
    {
      $this->deviceType = $deviceType;
      return $this;
    }

}
