<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class PeriodDatetime
{

    /**
     * @var string $periodDate
     */
    protected $periodDate = null;

    /**
     * @var string $periodTime
     */
    protected $periodTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPeriodDate()
    {
      return $this->periodDate;
    }

    /**
     * @param string $periodDate
     * @return \Jp\YahooApis\YDN\V201911\Stats\PeriodDatetime
     */
    public function setPeriodDate($periodDate)
    {
      $this->periodDate = $periodDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPeriodTime()
    {
      return $this->periodTime;
    }

    /**
     * @param string $periodTime
     * @return \Jp\YahooApis\YDN\V201911\Stats\PeriodDatetime
     */
    public function setPeriodTime($periodTime)
    {
      $this->periodTime = $periodTime;
      return $this;
    }

}
