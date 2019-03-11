<?php

namespace Jp\YahooApis\YDN\V201903\Stats;

class AppTarget extends Target
{

    /**
     * @var DeviceAppType $appType
     */
    protected $appType = null;

    /**
     * @param TargetType $type
     */
    public function __construct($type)
    {
      parent::__construct($type);
    }

    /**
     * @return DeviceAppType
     */
    public function getAppType()
    {
      return $this->appType;
    }

    /**
     * @param DeviceAppType $appType
     * @return \Jp\YahooApis\YDN\V201903\Stats\AppTarget
     */
    public function setAppType($appType)
    {
      $this->appType = $appType;
      return $this;
    }

}
