<?php

namespace Jp\YahooApis\YDN\V201903\CampaignLabel;

class CampaignLabelReturnValue extends \Jp\YahooApis\YDN\V201903\ListReturnValue
{

    /**
     * @var CampaignLabelValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CampaignLabelValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param CampaignLabelValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\CampaignLabel\CampaignLabelReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
