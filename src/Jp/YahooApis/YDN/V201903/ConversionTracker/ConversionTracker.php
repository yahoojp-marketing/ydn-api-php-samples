<?php

namespace Jp\YahooApis\YDN\V201903\ConversionTracker;

abstract class ConversionTracker
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $conversionTrackerId
     */
    protected $conversionTrackerId = null;

    /**
     * @var string $conversionTrackerName
     */
    protected $conversionTrackerName = null;

    /**
     * @var ConversionTrackerStatus $status
     */
    protected $status = null;

    /**
     * @var ConversionTrackerCategory $category
     */
    protected $category = null;

    /**
     * @var int $userRevenueValue
     */
    protected $userRevenueValue = null;

    /**
     * @var ConversionTrackerType $conversionTrackerType
     */
    protected $conversionTrackerType = null;

    /**
     * @var ConversionCountingType $countingType
     */
    protected $countingType = null;

    /**
     * @var int $measurementPeriod
     */
    protected $measurementPeriod = null;

    /**
     * @var int $measurementPeriodView
     */
    protected $measurementPeriodView = null;

    /**
     * @var ExcludeFromBidding $excludeFromBidding
     */
    protected $excludeFromBidding = null;

    /**
     * @var int $conversions
     */
    protected $conversions = null;

    /**
     * @var string $conversionValue
     */
    protected $conversionValue = null;

    /**
     * @var int $conversionsViaAdClick
     */
    protected $conversionsViaAdClick = null;

    /**
     * @var string $conversionValueViaAdClick
     */
    protected $conversionValueViaAdClick = null;

    /**
     * @var int $allConversions
     */
    protected $allConversions = null;

    /**
     * @var string $allConversionValue
     */
    protected $allConversionValue = null;

    /**
     * @var int $crossDeviceConversions
     */
    protected $crossDeviceConversions = null;

    /**
     * @var string $mostRecentConversionDate
     */
    protected $mostRecentConversionDate = null;

    
    public function __construct()
    {
    
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
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getConversionTrackerId()
    {
      return $this->conversionTrackerId;
    }

    /**
     * @param int $conversionTrackerId
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setConversionTrackerId($conversionTrackerId)
    {
      $this->conversionTrackerId = $conversionTrackerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionTrackerName()
    {
      return $this->conversionTrackerName;
    }

    /**
     * @param string $conversionTrackerName
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setConversionTrackerName($conversionTrackerName)
    {
      $this->conversionTrackerName = $conversionTrackerName;
      return $this;
    }

    /**
     * @return ConversionTrackerStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param ConversionTrackerStatus $status
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return ConversionTrackerCategory
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param ConversionTrackerCategory $category
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserRevenueValue()
    {
      return $this->userRevenueValue;
    }

    /**
     * @param int $userRevenueValue
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setUserRevenueValue($userRevenueValue)
    {
      $this->userRevenueValue = $userRevenueValue;
      return $this;
    }

    /**
     * @return ConversionTrackerType
     */
    public function getConversionTrackerType()
    {
      return $this->conversionTrackerType;
    }

    /**
     * @param ConversionTrackerType $conversionTrackerType
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setConversionTrackerType($conversionTrackerType)
    {
      $this->conversionTrackerType = $conversionTrackerType;
      return $this;
    }

    /**
     * @return ConversionCountingType
     */
    public function getCountingType()
    {
      return $this->countingType;
    }

    /**
     * @param ConversionCountingType $countingType
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setCountingType($countingType)
    {
      $this->countingType = $countingType;
      return $this;
    }

    /**
     * @return int
     */
    public function getMeasurementPeriod()
    {
      return $this->measurementPeriod;
    }

    /**
     * @param int $measurementPeriod
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setMeasurementPeriod($measurementPeriod)
    {
      $this->measurementPeriod = $measurementPeriod;
      return $this;
    }

    /**
     * @return int
     */
    public function getMeasurementPeriodView()
    {
      return $this->measurementPeriodView;
    }

    /**
     * @param int $measurementPeriodView
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setMeasurementPeriodView($measurementPeriodView)
    {
      $this->measurementPeriodView = $measurementPeriodView;
      return $this;
    }

    /**
     * @return ExcludeFromBidding
     */
    public function getExcludeFromBidding()
    {
      return $this->excludeFromBidding;
    }

    /**
     * @param ExcludeFromBidding $excludeFromBidding
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setExcludeFromBidding($excludeFromBidding)
    {
      $this->excludeFromBidding = $excludeFromBidding;
      return $this;
    }

    /**
     * @return int
     */
    public function getConversions()
    {
      return $this->conversions;
    }

    /**
     * @param int $conversions
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setConversions($conversions)
    {
      $this->conversions = $conversions;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionValue()
    {
      return $this->conversionValue;
    }

    /**
     * @param string $conversionValue
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setConversionValue($conversionValue)
    {
      $this->conversionValue = $conversionValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getConversionsViaAdClick()
    {
      return $this->conversionsViaAdClick;
    }

    /**
     * @param int $conversionsViaAdClick
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setConversionsViaAdClick($conversionsViaAdClick)
    {
      $this->conversionsViaAdClick = $conversionsViaAdClick;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionValueViaAdClick()
    {
      return $this->conversionValueViaAdClick;
    }

    /**
     * @param string $conversionValueViaAdClick
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setConversionValueViaAdClick($conversionValueViaAdClick)
    {
      $this->conversionValueViaAdClick = $conversionValueViaAdClick;
      return $this;
    }

    /**
     * @return int
     */
    public function getAllConversions()
    {
      return $this->allConversions;
    }

    /**
     * @param int $allConversions
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setAllConversions($allConversions)
    {
      $this->allConversions = $allConversions;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllConversionValue()
    {
      return $this->allConversionValue;
    }

    /**
     * @param string $allConversionValue
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setAllConversionValue($allConversionValue)
    {
      $this->allConversionValue = $allConversionValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getCrossDeviceConversions()
    {
      return $this->crossDeviceConversions;
    }

    /**
     * @param int $crossDeviceConversions
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setCrossDeviceConversions($crossDeviceConversions)
    {
      $this->crossDeviceConversions = $crossDeviceConversions;
      return $this;
    }

    /**
     * @return string
     */
    public function getMostRecentConversionDate()
    {
      return $this->mostRecentConversionDate;
    }

    /**
     * @param string $mostRecentConversionDate
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTracker
     */
    public function setMostRecentConversionDate($mostRecentConversionDate)
    {
      $this->mostRecentConversionDate = $mostRecentConversionDate;
      return $this;
    }

}
