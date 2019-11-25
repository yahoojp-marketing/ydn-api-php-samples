<?php

namespace Jp\YahooApis\YDN\V201911\AuditLog;

class AuditLogDownloadSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $campaignIds
     */
    protected $campaignIds = null;

    /**
     * @var AuditLogUpdateSource[] $updateSources
     */
    protected $updateSources = null;

    /**
     * @var AuditLogDateRange $dateRange
     */
    protected $dateRange = null;

    /**
     * @var AuditLogJob $auditLogJob
     */
    protected $auditLogJob = null;

    /**
     * @var AuditLogLang $lang
     */
    protected $lang = null;

    /**
     * @param int $accountId
     */
    public function __construct($accountId)
    {
      $this->accountId = $accountId;
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
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCampaignIds()
    {
      return $this->campaignIds;
    }

    /**
     * @param long[] $campaignIds
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadSelector
     */
    public function setCampaignIds(array $campaignIds = null)
    {
      $this->campaignIds = $campaignIds;
      return $this;
    }

    /**
     * @return AuditLogUpdateSource[]
     */
    public function getUpdateSources()
    {
      return $this->updateSources;
    }

    /**
     * @param AuditLogUpdateSource[] $updateSources
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadSelector
     */
    public function setUpdateSources(array $updateSources = null)
    {
      $this->updateSources = $updateSources;
      return $this;
    }

    /**
     * @return AuditLogDateRange
     */
    public function getDateRange()
    {
      return $this->dateRange;
    }

    /**
     * @param AuditLogDateRange $dateRange
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadSelector
     */
    public function setDateRange($dateRange)
    {
      $this->dateRange = $dateRange;
      return $this;
    }

    /**
     * @return AuditLogJob
     */
    public function getAuditLogJob()
    {
      return $this->auditLogJob;
    }

    /**
     * @param AuditLogJob $auditLogJob
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadSelector
     */
    public function setAuditLogJob($auditLogJob)
    {
      $this->auditLogJob = $auditLogJob;
      return $this;
    }

    /**
     * @return AuditLogLang
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param AuditLogLang $lang
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadSelector
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

}
