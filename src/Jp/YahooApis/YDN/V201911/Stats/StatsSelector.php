<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class StatsSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $campaignIds
     */
    protected $campaignIds = null;

    /**
     * @var long[] $adGroupIds
     */
    protected $adGroupIds = null;

    /**
     * @var long[] $adIds
     */
    protected $adIds = null;

    /**
     * @var long[] $mediaIds
     */
    protected $mediaIds = null;

    /**
     * @var TargetType[] $targetTypes
     */
    protected $targetTypes = null;

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
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCampaignIds()
    {
      return $this->campaignIds;
    }

    /**
     * @param long[] $campaignIds
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsSelector
     */
    public function setCampaignIds(array $campaignIds = null)
    {
      $this->campaignIds = $campaignIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAdGroupIds()
    {
      return $this->adGroupIds;
    }

    /**
     * @param long[] $adGroupIds
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsSelector
     */
    public function setAdGroupIds(array $adGroupIds = null)
    {
      $this->adGroupIds = $adGroupIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAdIds()
    {
      return $this->adIds;
    }

    /**
     * @param long[] $adIds
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsSelector
     */
    public function setAdIds(array $adIds = null)
    {
      $this->adIds = $adIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getMediaIds()
    {
      return $this->mediaIds;
    }

    /**
     * @param long[] $mediaIds
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsSelector
     */
    public function setMediaIds(array $mediaIds = null)
    {
      $this->mediaIds = $mediaIds;
      return $this;
    }

    /**
     * @return TargetType[]
     */
    public function getTargetTypes()
    {
      return $this->targetTypes;
    }

    /**
     * @param TargetType[] $targetTypes
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsSelector
     */
    public function setTargetTypes(array $targetTypes = null)
    {
      $this->targetTypes = $targetTypes;
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsSelector
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsSelector
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsSelector
     */
    public function setStatsType($statsType)
    {
      $this->statsType = $statsType;
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\StatsSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
