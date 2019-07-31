<?php

namespace Jp\YahooApis\YDN\V201907\CampaignLabel;

class CampaignLabelValues extends \Jp\YahooApis\YDN\V201907\ReturnValue
{

    /**
     * @var CampaignLabel $campaignLabel
     */
    protected $campaignLabel = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CampaignLabel
     */
    public function getCampaignLabel()
    {
      return $this->campaignLabel;
    }

    /**
     * @param CampaignLabel $campaignLabel
     * @return \Jp\YahooApis\YDN\V201907\CampaignLabel\CampaignLabelValues
     */
    public function setCampaignLabel($campaignLabel)
    {
      $this->campaignLabel = $campaignLabel;
      return $this;
    }

}
