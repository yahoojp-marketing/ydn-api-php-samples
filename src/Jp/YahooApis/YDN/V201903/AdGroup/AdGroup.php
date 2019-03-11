<?php

namespace Jp\YahooApis\YDN\V201903\AdGroup;

class AdGroup
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var string $adGroupName
     */
    protected $adGroupName = null;

    /**
     * @var UserStatus $userStatus
     */
    protected $userStatus = null;

    /**
     * @var AdGroupBid $bid
     */
    protected $bid = null;

    /**
     * @var AdGroupConversionOptimizer $conversionOptimizer
     */
    protected $conversionOptimizer = null;

    /**
     * @var DeviceType[] $device
     */
    protected $device = null;

    /**
     * @var DeviceAppType[] $deviceApp
     */
    protected $deviceApp = null;

    /**
     * @var DeviceOsType[] $deviceOs
     */
    protected $deviceOs = null;

    /**
     * @var SmartDeviceCarrier[] $smartDeviceCarriers
     */
    protected $smartDeviceCarriers = null;

    /**
     * @var string $deviceOsVersion
     */
    protected $deviceOsVersion = null;

    /**
     * @var DynamicImageExtensions $dynamicImageExtensions
     */
    protected $dynamicImageExtensions = null;

    /**
     * @var Label[] $labels
     */
    protected $labels = null;

    /**
     * @param int $accountId
     * @param int $campaignId
     */
    public function __construct($accountId, $campaignId)
    {
      $this->accountId = $accountId;
      $this->campaignId = $campaignId;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
      return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setCampaignName($campaignName)
    {
      $this->campaignName = $campaignName;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdGroupName()
    {
      return $this->adGroupName;
    }

    /**
     * @param string $adGroupName
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setAdGroupName($adGroupName)
    {
      $this->adGroupName = $adGroupName;
      return $this;
    }

    /**
     * @return UserStatus
     */
    public function getUserStatus()
    {
      return $this->userStatus;
    }

    /**
     * @param UserStatus $userStatus
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setUserStatus($userStatus)
    {
      $this->userStatus = $userStatus;
      return $this;
    }

    /**
     * @return AdGroupBid
     */
    public function getBid()
    {
      return $this->bid;
    }

    /**
     * @param AdGroupBid $bid
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setBid($bid)
    {
      $this->bid = $bid;
      return $this;
    }

    /**
     * @return AdGroupConversionOptimizer
     */
    public function getConversionOptimizer()
    {
      return $this->conversionOptimizer;
    }

    /**
     * @param AdGroupConversionOptimizer $conversionOptimizer
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setConversionOptimizer($conversionOptimizer)
    {
      $this->conversionOptimizer = $conversionOptimizer;
      return $this;
    }

    /**
     * @return DeviceType[]
     */
    public function getDevice()
    {
      return $this->device;
    }

    /**
     * @param DeviceType[] $device
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setDevice(array $device = null)
    {
      $this->device = $device;
      return $this;
    }

    /**
     * @return DeviceAppType[]
     */
    public function getDeviceApp()
    {
      return $this->deviceApp;
    }

    /**
     * @param DeviceAppType[] $deviceApp
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setDeviceApp(array $deviceApp = null)
    {
      $this->deviceApp = $deviceApp;
      return $this;
    }

    /**
     * @return DeviceOsType[]
     */
    public function getDeviceOs()
    {
      return $this->deviceOs;
    }

    /**
     * @param DeviceOsType[] $deviceOs
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setDeviceOs(array $deviceOs = null)
    {
      $this->deviceOs = $deviceOs;
      return $this;
    }

    /**
     * @return SmartDeviceCarrier[]
     */
    public function getSmartDeviceCarriers()
    {
      return $this->smartDeviceCarriers;
    }

    /**
     * @param SmartDeviceCarrier[] $smartDeviceCarriers
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setSmartDeviceCarriers(array $smartDeviceCarriers = null)
    {
      $this->smartDeviceCarriers = $smartDeviceCarriers;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeviceOsVersion()
    {
      return $this->deviceOsVersion;
    }

    /**
     * @param string $deviceOsVersion
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setDeviceOsVersion($deviceOsVersion)
    {
      $this->deviceOsVersion = $deviceOsVersion;
      return $this;
    }

    /**
     * @return DynamicImageExtensions
     */
    public function getDynamicImageExtensions()
    {
      return $this->dynamicImageExtensions;
    }

    /**
     * @param DynamicImageExtensions $dynamicImageExtensions
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setDynamicImageExtensions($dynamicImageExtensions)
    {
      $this->dynamicImageExtensions = $dynamicImageExtensions;
      return $this;
    }

    /**
     * @return Label[]
     */
    public function getLabels()
    {
      return $this->labels;
    }

    /**
     * @param Label[] $labels
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroup
     */
    public function setLabels(array $labels = null)
    {
      $this->labels = $labels;
      return $this;
    }

}
