<?php

namespace Jp\YahooApis\YDN\V201903\Campaign;

class CampaignReturnValue extends \Jp\YahooApis\YDN\V201903\ListReturnValue
{

    /**
     * @var CampaignValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CampaignValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param CampaignValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\Campaign\CampaignReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
