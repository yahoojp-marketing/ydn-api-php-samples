<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class MigrationJobValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var MigrationJob $migrationJob
     */
    protected $migrationJob = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MigrationJob
     */
    public function getMigrationJob()
    {
      return $this->migrationJob;
    }

    /**
     * @param MigrationJob $migrationJob
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJobValues
     */
    public function setMigrationJob($migrationJob)
    {
      $this->migrationJob = $migrationJob;
      return $this;
    }

}
