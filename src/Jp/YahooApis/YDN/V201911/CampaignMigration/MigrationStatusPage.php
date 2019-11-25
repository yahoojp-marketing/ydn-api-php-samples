<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class MigrationStatusPage
{

    /**
     * @var MigrationJobValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MigrationJobValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param MigrationJobValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationStatusPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
