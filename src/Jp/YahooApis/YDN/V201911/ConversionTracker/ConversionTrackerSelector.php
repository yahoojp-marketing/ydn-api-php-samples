<?php

namespace Jp\YahooApis\YDN\V201911\ConversionTracker;

class ConversionTrackerSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $conversionTrackerIds
     */
    protected $conversionTrackerIds = null;

    /**
     * @var ConversionTrackerType[] $conversionTrackerTypes
     */
    protected $conversionTrackerTypes = null;

    /**
     * @var ConversionTrackerStatus[] $statuses
     */
    protected $statuses = null;

    /**
     * @var ConversionTrackerCategory[] $categories
     */
    protected $categories = null;

    /**
     * @var string[] $appIds
     */
    protected $appIds = null;

    /**
     * @var ConversionCountingType $countingType
     */
    protected $countingType = null;

    /**
     * @var ExcludeFromBidding $excludeFromBidding
     */
    protected $excludeFromBidding = null;

    /**
     * @var AppConversionPlatform $appPlatform
     */
    protected $appPlatform = null;

    /**
     * @var StatsPeriod $statsPeriod
     */
    protected $statsPeriod = null;

    /**
     * @var StatsPeriodCustomDate $statsPeriodCustomDate
     */
    protected $statsPeriodCustomDate = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Paging $paging
     */
    protected $paging = null;

    /**
     * @param int $accountId
     */
    public function __construct($accountId)
    {
      $this->accountId = $accountId;
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
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getConversionTrackerIds()
    {
      return $this->conversionTrackerIds;
    }

    /**
     * @param long[] $conversionTrackerIds
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setConversionTrackerIds(array $conversionTrackerIds = null)
    {
      $this->conversionTrackerIds = $conversionTrackerIds;
      return $this;
    }

    /**
     * @return ConversionTrackerType[]
     */
    public function getConversionTrackerTypes()
    {
      return $this->conversionTrackerTypes;
    }

    /**
     * @param ConversionTrackerType[] $conversionTrackerTypes
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setConversionTrackerTypes(array $conversionTrackerTypes = null)
    {
      $this->conversionTrackerTypes = $conversionTrackerTypes;
      return $this;
    }

    /**
     * @return ConversionTrackerStatus[]
     */
    public function getStatuses()
    {
      return $this->statuses;
    }

    /**
     * @param ConversionTrackerStatus[] $statuses
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setStatuses(array $statuses = null)
    {
      $this->statuses = $statuses;
      return $this;
    }

    /**
     * @return ConversionTrackerCategory[]
     */
    public function getCategories()
    {
      return $this->categories;
    }

    /**
     * @param ConversionTrackerCategory[] $categories
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setCategories(array $categories = null)
    {
      $this->categories = $categories;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAppIds()
    {
      return $this->appIds;
    }

    /**
     * @param string[] $appIds
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setAppIds(array $appIds = null)
    {
      $this->appIds = $appIds;
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
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setCountingType($countingType)
    {
      $this->countingType = $countingType;
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
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setExcludeFromBidding($excludeFromBidding)
    {
      $this->excludeFromBidding = $excludeFromBidding;
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
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setAppPlatform($appPlatform)
    {
      $this->appPlatform = $appPlatform;
      return $this;
    }

    /**
     * @return StatsPeriod
     */
    public function getStatsPeriod()
    {
      return $this->statsPeriod;
    }

    /**
     * @param StatsPeriod $statsPeriod
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setStatsPeriod($statsPeriod)
    {
      $this->statsPeriod = $statsPeriod;
      return $this;
    }

    /**
     * @return StatsPeriodCustomDate
     */
    public function getStatsPeriodCustomDate()
    {
      return $this->statsPeriodCustomDate;
    }

    /**
     * @param StatsPeriodCustomDate $statsPeriodCustomDate
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setStatsPeriodCustomDate($statsPeriodCustomDate)
    {
      $this->statsPeriodCustomDate = $statsPeriodCustomDate;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201911\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201911\Paging $paging
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\ConversionTrackerSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
