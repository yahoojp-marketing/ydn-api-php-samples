<?php

namespace Jp\YahooApis\YDN\V201911\CampaignLabel;

class mutate
{

    /**
     * @var CampaignLabelOperation $operations
     */
    protected $operations = null;

    /**
     * @param CampaignLabelOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return CampaignLabelOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param CampaignLabelOperation $operations
     * @return \Jp\YahooApis\YDN\V201911\CampaignLabel\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
