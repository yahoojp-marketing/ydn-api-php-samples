<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class AdGroupStatsValues extends StatsValues
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var string $adGroupName
     */
    protected $adGroupName = null;

    /**
     * @var Stats $stats
     */
    protected $stats = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Jp\YahooApis\YDN\V201911\Stats\AdGroupStatsValues
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
      return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return \Jp\YahooApis\YDN\V201911\Stats\AdGroupStatsValues
     */
    public function setCampaignName($campaignName)
    {
      $this->campaignName = $campaignName;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Jp\YahooApis\YDN\V201911\Stats\AdGroupStatsValues
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdGroupName()
    {
      return $this->adGroupName;
    }

    /**
     * @param string $adGroupName
     * @return \Jp\YahooApis\YDN\V201911\Stats\AdGroupStatsValues
     */
    public function setAdGroupName($adGroupName)
    {
      $this->adGroupName = $adGroupName;
      return $this;
    }

    /**
     * @return Stats
     */
    public function getStats()
    {
      return $this->stats;
    }

    /**
     * @param Stats $stats
     * @return \Jp\YahooApis\YDN\V201911\Stats\AdGroupStatsValues
     */
    public function setStats($stats)
    {
      $this->stats = $stats;
      return $this;
    }

}
