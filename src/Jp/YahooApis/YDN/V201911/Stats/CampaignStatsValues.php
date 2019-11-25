<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class CampaignStatsValues extends StatsValues
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\CampaignStatsValues
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\CampaignStatsValues
     */
    public function setCampaignName($campaignName)
    {
      $this->campaignName = $campaignName;
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\CampaignStatsValues
     */
    public function setStats($stats)
    {
      $this->stats = $stats;
      return $this;
    }

}
