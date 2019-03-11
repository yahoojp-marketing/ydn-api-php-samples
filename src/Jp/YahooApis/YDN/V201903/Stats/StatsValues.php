<?php

namespace Jp\YahooApis\YDN\V201903\Stats;

class StatsValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var StatsPeriod $statsPeriod
     */
    protected $statsPeriod = null;

    /**
     * @var StatsPeriodCustomDate $statsPeriodCustomDate
     */
    protected $statsPeriodCustomDate = null;

    /**
     * @var StatsType $statsType
     */
    protected $statsType = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Jp\YahooApis\YDN\V201903\Stats\StatsValues
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
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
     * @return \Jp\YahooApis\YDN\V201903\Stats\StatsValues
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
     * @return \Jp\YahooApis\YDN\V201903\Stats\StatsValues
     */
    public function setStatsPeriodCustomDate($statsPeriodCustomDate)
    {
      $this->statsPeriodCustomDate = $statsPeriodCustomDate;
      return $this;
    }

    /**
     * @return StatsType
     */
    public function getStatsType()
    {
      return $this->statsType;
    }

    /**
     * @param StatsType $statsType
     * @return \Jp\YahooApis\YDN\V201903\Stats\StatsValues
     */
    public function setStatsType($statsType)
    {
      $this->statsType = $statsType;
      return $this;
    }

}
