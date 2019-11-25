<?php

namespace Jp\YahooApis\YDN\V201911\Campaign;

class ViewableFrequencyCap
{

    /**
     * @var FrequencyLevel $level
     */
    protected $level = null;

    /**
     * @var FrequencyTimeUnit $timeUnit
     */
    protected $timeUnit = null;

    /**
     * @var int $vImps
     */
    protected $vImps = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FrequencyLevel
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param FrequencyLevel $level
     * @return \Jp\YahooApis\YDN\V201911\Campaign\ViewableFrequencyCap
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return FrequencyTimeUnit
     */
    public function getTimeUnit()
    {
      return $this->timeUnit;
    }

    /**
     * @param FrequencyTimeUnit $timeUnit
     * @return \Jp\YahooApis\YDN\V201911\Campaign\ViewableFrequencyCap
     */
    public function setTimeUnit($timeUnit)
    {
      $this->timeUnit = $timeUnit;
      return $this;
    }

    /**
     * @return int
     */
    public function getVImps()
    {
      return $this->vImps;
    }

    /**
     * @param int $vImps
     * @return \Jp\YahooApis\YDN\V201911\Campaign\ViewableFrequencyCap
     */
    public function setVImps($vImps)
    {
      $this->vImps = $vImps;
      return $this;
    }

}
