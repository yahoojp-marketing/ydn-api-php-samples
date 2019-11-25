<?php

namespace Jp\YahooApis\YDN\V201911\Campaign;

class CampaignReturnValue extends \Jp\YahooApis\YDN\V201911\ListReturnValue
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
