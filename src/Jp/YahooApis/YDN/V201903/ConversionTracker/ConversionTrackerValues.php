<?php

namespace Jp\YahooApis\YDN\V201903\ConversionTracker;

class ConversionTrackerValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var ConversionTracker $conversionTracker
     */
    protected $conversionTracker = null;

    /**
     * @var StatsPeriodCustomDate $statsPeriodCustomDate
     */
    protected $statsPeriodCustomDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ConversionTracker
     */
    public function getConversionTracker()
    {
      return $this->conversionTracker;
    }

    /**
     * @param ConversionTracker $conversionTracker
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTrackerValues
     */
    public function setConversionTracker($conversionTracker)
    {
      $this->conversionTracker = $conversionTracker;
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
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\ConversionTrackerValues
     */
    public function setStatsPeriodCustomDate($statsPeriodCustomDate)
    {
      $this->statsPeriodCustomDate = $statsPeriodCustomDate;
      return $this;
    }

}
