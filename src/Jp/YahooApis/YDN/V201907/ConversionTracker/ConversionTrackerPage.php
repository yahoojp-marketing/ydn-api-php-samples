<?php

namespace Jp\YahooApis\YDN\V201907\ConversionTracker;

class ConversionTrackerPage extends \Jp\YahooApis\YDN\V201907\Page
{

    /**
     * @var int $totalConversions
     */
    protected $totalConversions = null;

    /**
     * @var string $totalConversionValue
     */
    protected $totalConversionValue = null;

    /**
     * @var int $totalConversionsViaAdClick
     */
    protected $totalConversionsViaAdClick = null;

    /**
     * @var string $totalConversionValueViaAdClick
     */
    protected $totalConversionValueViaAdClick = null;

    /**
     * @var int $totalAllConversions
     */
    protected $totalAllConversions = null;

    /**
     * @var string $totalAllConversionValue
     */
    protected $totalAllConversionValue = null;

    /**
     * @var int $totalCrossDeviceConversions
     */
    protected $totalCrossDeviceConversions = null;

    /**
     * @var Period $period
     */
    protected $period = null;

    /**
     * @var ConversionTrackerValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getTotalConversions()
    {
      return $this->totalConversions;
    }

    /**
     * @param int $totalConversions
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerPage
     */
    public function setTotalConversions($totalConversions)
    {
      $this->totalConversions = $totalConversions;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalConversionValue()
    {
      return $this->totalConversionValue;
    }

    /**
     * @param string $totalConversionValue
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerPage
     */
    public function setTotalConversionValue($totalConversionValue)
    {
      $this->totalConversionValue = $totalConversionValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalConversionsViaAdClick()
    {
      return $this->totalConversionsViaAdClick;
    }

    /**
     * @param int $totalConversionsViaAdClick
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerPage
     */
    public function setTotalConversionsViaAdClick($totalConversionsViaAdClick)
    {
      $this->totalConversionsViaAdClick = $totalConversionsViaAdClick;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalConversionValueViaAdClick()
    {
      return $this->totalConversionValueViaAdClick;
    }

    /**
     * @param string $totalConversionValueViaAdClick
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerPage
     */
    public function setTotalConversionValueViaAdClick($totalConversionValueViaAdClick)
    {
      $this->totalConversionValueViaAdClick = $totalConversionValueViaAdClick;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalAllConversions()
    {
      return $this->totalAllConversions;
    }

    /**
     * @param int $totalAllConversions
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerPage
     */
    public function setTotalAllConversions($totalAllConversions)
    {
      $this->totalAllConversions = $totalAllConversions;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalAllConversionValue()
    {
      return $this->totalAllConversionValue;
    }

    /**
     * @param string $totalAllConversionValue
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerPage
     */
    public function setTotalAllConversionValue($totalAllConversionValue)
    {
      $this->totalAllConversionValue = $totalAllConversionValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalCrossDeviceConversions()
    {
      return $this->totalCrossDeviceConversions;
    }

    /**
     * @param int $totalCrossDeviceConversions
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerPage
     */
    public function setTotalCrossDeviceConversions($totalCrossDeviceConversions)
    {
      $this->totalCrossDeviceConversions = $totalCrossDeviceConversions;
      return $this;
    }

    /**
     * @return Period
     */
    public function getPeriod()
    {
      return $this->period;
    }

    /**
     * @param Period $period
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerPage
     */
    public function setPeriod($period)
    {
      $this->period = $period;
      return $this;
    }

    /**
     * @return ConversionTrackerValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param ConversionTrackerValues[] $values
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
