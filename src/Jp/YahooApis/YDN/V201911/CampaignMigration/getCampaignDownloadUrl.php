<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class getCampaignDownloadUrl
{

    /**
     * @var CampaignDownloadSelector $selector
     */
    protected $selector = null;

    /**
     * @param CampaignDownloadSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return CampaignDownloadSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param CampaignDownloadSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\getCampaignDownloadUrl
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
