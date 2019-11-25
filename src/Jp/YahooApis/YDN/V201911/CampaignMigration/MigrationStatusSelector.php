<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class MigrationStatusSelector
{

    /**
     * @var long[] $migrationJobIds
     */
    protected $migrationJobIds = null;

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return long[]
     */
    public function getMigrationJobIds()
    {
      return $this->migrationJobIds;
    }

    /**
     * @param long[] $migrationJobIds
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationStatusSelector
     */
    public function setMigrationJobIds(array $migrationJobIds = null)
    {
      $this->migrationJobIds = $migrationJobIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationStatusSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

}
