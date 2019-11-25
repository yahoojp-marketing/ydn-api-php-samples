<?php

namespace Jp\YahooApis\YDN\V201911\CampaignLabel;

class CampaignLabelValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
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
     * @return \Jp\YahooApis\YDN\V201911\CampaignLabel\CampaignLabelValues
     */
    public function setCampaignLabel($campaignLabel)
    {
      $this->campaignLabel = $campaignLabel;
      return $this;
    }

}
