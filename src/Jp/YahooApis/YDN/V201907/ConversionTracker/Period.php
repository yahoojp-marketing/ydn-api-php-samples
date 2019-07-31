<?php

namespace Jp\YahooApis\YDN\V201907\ConversionTracker;

class Period
{

    /**
     * @var PeriodDatetime $periodStartDate
     */
    protected $periodStartDate = null;

    /**
     * @var PeriodDatetime $periodEndDate
     */
    protected $periodEndDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PeriodDatetime
     */
    public function getPeriodStartDate()
    {
      return $this->periodStartDate;
    }

    /**
     * @param PeriodDatetime $periodStartDate
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\Period
     */
    public function setPeriodStartDate($periodStartDate)
    {
      $this->periodStartDate = $periodStartDate;
      return $this;
    }

    /**
     * @return PeriodDatetime
     */
    public function getPeriodEndDate()
    {
      return $this->periodEndDate;
    }

    /**
     * @param PeriodDatetime $periodEndDate
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\Period
     */
    public function setPeriodEndDate($periodEndDate)
    {
      $this->periodEndDate = $periodEndDate;
      return $this;
    }

}
