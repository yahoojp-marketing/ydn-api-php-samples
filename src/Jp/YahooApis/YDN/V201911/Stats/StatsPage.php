<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class StatsPage extends \Jp\YahooApis\YDN\V201911\Page
{

    /**
     * @var Period $period
     */
    protected $period = null;

    /**
     * @var StatsValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsPage
     */
    public function setPeriod($period)
    {
      $this->period = $period;
      return $this;
    }

    /**
     * @return StatsValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param StatsValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
