<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class StatsPeriodCustomDate
{

    /**
     * @var string $statsStartDate
     */
    protected $statsStartDate = null;

    /**
     * @var string $statsEndDate
     */
    protected $statsEndDate = null;

    /**
     * @param string $statsStartDate
     * @param string $statsEndDate
     */
    public function __construct($statsStartDate, $statsEndDate)
    {
      $this->statsStartDate = $statsStartDate;
      $this->statsEndDate = $statsEndDate;
    }

    /**
     * @return string
     */
    public function getStatsStartDate()
    {
      return $this->statsStartDate;
    }

    /**
     * @param string $statsStartDate
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsPeriodCustomDate
     */
    public function setStatsStartDate($statsStartDate)
    {
      $this->statsStartDate = $statsStartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatsEndDate()
    {
      return $this->statsEndDate;
    }

    /**
     * @param string $statsEndDate
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsPeriodCustomDate
     */
    public function setStatsEndDate($statsEndDate)
    {
      $this->statsEndDate = $statsEndDate;
      return $this;
    }

}
