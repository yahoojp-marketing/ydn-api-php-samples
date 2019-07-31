<?php

namespace Jp\YahooApis\YDN\V201907\Campaign;

class FrequencyCap
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
     * @var int $impression
     */
    protected $impression = null;

    
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
     * @return \Jp\YahooApis\YDN\V201907\Campaign\FrequencyCap
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
     * @return \Jp\YahooApis\YDN\V201907\Campaign\FrequencyCap
     */
    public function setTimeUnit($timeUnit)
    {
      $this->timeUnit = $timeUnit;
      return $this;
    }

    /**
     * @return int
     */
    public function getImpression()
    {
      return $this->impression;
    }

    /**
     * @param int $impression
     * @return \Jp\YahooApis\YDN\V201907\Campaign\FrequencyCap
     */
    public function setImpression($impression)
    {
      $this->impression = $impression;
      return $this;
    }

}
