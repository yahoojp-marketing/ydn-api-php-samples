<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class MigrationJob
{

    /**
     * @var int $migrationJobId
     */
    protected $migrationJobId = null;

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var MigrationScope $migrationScope
     */
    protected $migrationScope = null;

    /**
     * @var MigrationJobStatus $migrationJobStatus
     */
    protected $migrationJobStatus = null;

    /**
     * @var string $migrationJobSubmitDate
     */
    protected $migrationJobSubmitDate = null;

    /**
     * @var string $migrationJobEndDate
     */
    protected $migrationJobEndDate = null;

    /**
     * @var int $totalCount
     */
    protected $totalCount = null;

    /**
     * @var int $inProgressCount
     */
    protected $inProgressCount = null;

    /**
     * @var int $succeededCount
     */
    protected $succeededCount = null;

    /**
     * @var int $failedCount
     */
    protected $failedCount = null;

    /**
     * @var string $downloadOriginalFileUrl
     */
    protected $downloadOriginalFileUrl = null;

    /**
     * @var string $downloadErrorFileUrl
     */
    protected $downloadErrorFileUrl = null;

    /**
     * @param int $migrationJobId
     * @param MigrationScope $migrationScope
     * @param MigrationJobStatus $migrationJobStatus
     * @param string $migrationJobSubmitDate
     * @param int $totalCount
     * @param int $inProgressCount
     * @param int $succeededCount
     * @param int $failedCount
     * @param string $downloadOriginalFileUrl
     */
    public function __construct($migrationJobId, $migrationScope, $migrationJobStatus, $migrationJobSubmitDate, $totalCount, $inProgressCount, $succeededCount, $failedCount, $downloadOriginalFileUrl)
    {
      $this->migrationJobId = $migrationJobId;
      $this->migrationScope = $migrationScope;
      $this->migrationJobStatus = $migrationJobStatus;
      $this->migrationJobSubmitDate = $migrationJobSubmitDate;
      $this->totalCount = $totalCount;
      $this->inProgressCount = $inProgressCount;
      $this->succeededCount = $succeededCount;
      $this->failedCount = $failedCount;
      $this->downloadOriginalFileUrl = $downloadOriginalFileUrl;
    }

    /**
     * @return int
     */
    public function getMigrationJobId()
    {
      return $this->migrationJobId;
    }

    /**
     * @param int $migrationJobId
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setMigrationJobId($migrationJobId)
    {
      $this->migrationJobId = $migrationJobId;
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
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return MigrationScope
     */
    public function getMigrationScope()
    {
      return $this->migrationScope;
    }

    /**
     * @param MigrationScope $migrationScope
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setMigrationScope($migrationScope)
    {
      $this->migrationScope = $migrationScope;
      return $this;
    }

    /**
     * @return MigrationJobStatus
     */
    public function getMigrationJobStatus()
    {
      return $this->migrationJobStatus;
    }

    /**
     * @param MigrationJobStatus $migrationJobStatus
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setMigrationJobStatus($migrationJobStatus)
    {
      $this->migrationJobStatus = $migrationJobStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getMigrationJobSubmitDate()
    {
      return $this->migrationJobSubmitDate;
    }

    /**
     * @param string $migrationJobSubmitDate
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setMigrationJobSubmitDate($migrationJobSubmitDate)
    {
      $this->migrationJobSubmitDate = $migrationJobSubmitDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getMigrationJobEndDate()
    {
      return $this->migrationJobEndDate;
    }

    /**
     * @param string $migrationJobEndDate
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setMigrationJobEndDate($migrationJobEndDate)
    {
      $this->migrationJobEndDate = $migrationJobEndDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
      return $this->totalCount;
    }

    /**
     * @param int $totalCount
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setTotalCount($totalCount)
    {
      $this->totalCount = $totalCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getInProgressCount()
    {
      return $this->inProgressCount;
    }

    /**
     * @param int $inProgressCount
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setInProgressCount($inProgressCount)
    {
      $this->inProgressCount = $inProgressCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getSucceededCount()
    {
      return $this->succeededCount;
    }

    /**
     * @param int $succeededCount
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setSucceededCount($succeededCount)
    {
      $this->succeededCount = $succeededCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getFailedCount()
    {
      return $this->failedCount;
    }

    /**
     * @param int $failedCount
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setFailedCount($failedCount)
    {
      $this->failedCount = $failedCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadOriginalFileUrl()
    {
      return $this->downloadOriginalFileUrl;
    }

    /**
     * @param string $downloadOriginalFileUrl
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setDownloadOriginalFileUrl($downloadOriginalFileUrl)
    {
      $this->downloadOriginalFileUrl = $downloadOriginalFileUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadErrorFileUrl()
    {
      return $this->downloadErrorFileUrl;
    }

    /**
     * @param string $downloadErrorFileUrl
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob
     */
    public function setDownloadErrorFileUrl($downloadErrorFileUrl)
    {
      $this->downloadErrorFileUrl = $downloadErrorFileUrl;
      return $this;
    }

}
