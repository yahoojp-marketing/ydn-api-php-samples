<?php

namespace Jp\YahooApis\YDN\V201903\ConversionTracker;

class AppConversion extends ConversionTracker
{

    /**
     * @var string $appId
     */
    protected $appId = null;

    /**
     * @var AppConversionPlatform $appPlatform
     */
    protected $appPlatform = null;

    /**
     * @var AppConversionType $appConversionType
     */
    protected $appConversionType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAppId()
    {
      return $this->appId;
    }

    /**
     * @param string $appId
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\AppConversion
     */
    public function setAppId($appId)
    {
      $this->appId = $appId;
      return $this;
    }

    /**
     * @return AppConversionPlatform
     */
    public function getAppPlatform()
    {
      return $this->appPlatform;
    }

    /**
     * @param AppConversionPlatform $appPlatform
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\AppConversion
     */
    public function setAppPlatform($appPlatform)
    {
      $this->appPlatform = $appPlatform;
      return $this;
    }

    /**
     * @return AppConversionType
     */
    public function getAppConversionType()
    {
      return $this->appConversionType;
    }

    /**
     * @param AppConversionType $appConversionType
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\AppConversion
     */
    public function setAppConversionType($appConversionType)
    {
      $this->appConversionType = $appConversionType;
      return $this;
    }

}
