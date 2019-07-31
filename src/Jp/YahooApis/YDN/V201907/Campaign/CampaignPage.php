<?php

namespace Jp\YahooApis\YDN\V201907\Campaign;

class CampaignPage extends \Jp\YahooApis\YDN\V201907\Page
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
     * @return \Jp\YahooApis\YDN\V201907\Campaign\CampaignPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
