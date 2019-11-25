<?php

namespace Jp\YahooApis\YDN\V201911\AuditLog;

class AuditLogJob
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $auditLogJobId
     */
    protected $auditLogJobId = null;

    /**
     * @var string $auditLogJobName
     */
    protected $auditLogJobName = null;

    /**
     * @var string $auditLogJobUserName
     */
    protected $auditLogJobUserName = null;

    /**
     * @var string $auditLogJobStartDate
     */
    protected $auditLogJobStartDate = null;

    /**
     * @var string $auditLogJobEndDate
     */
    protected $auditLogJobEndDate = null;

    /**
     * @var AuditLogDownloadJobStatus $auditLogJobStatus
     */
    protected $auditLogJobStatus = null;

    /**
     * @var int $progress
     */
    protected $progress = null;

    /**
     * @var string $downloadAuditLogDownloadUrl
     */
    protected $downloadAuditLogDownloadUrl = null;

    
    public function __construct()
    {
    
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
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogJob
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAuditLogJobId()
    {
      return $this->auditLogJobId;
    }

    /**
     * @param int $auditLogJobId
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogJob
     */
    public function setAuditLogJobId($auditLogJobId)
    {
      $this->auditLogJobId = $auditLogJobId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuditLogJobName()
    {
      return $this->auditLogJobName;
    }

    /**
     * @param string $auditLogJobName
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogJob
     */
    public function setAuditLogJobName($auditLogJobName)
    {
      $this->auditLogJobName = $auditLogJobName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuditLogJobUserName()
    {
      return $this->auditLogJobUserName;
    }

    /**
     * @param string $auditLogJobUserName
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogJob
     */
    public function setAuditLogJobUserName($auditLogJobUserName)
    {
      $this->auditLogJobUserName = $auditLogJobUserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuditLogJobStartDate()
    {
      return $this->auditLogJobStartDate;
    }

    /**
     * @param string $auditLogJobStartDate
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogJob
     */
    public function setAuditLogJobStartDate($auditLogJobStartDate)
    {
      $this->auditLogJobStartDate = $auditLogJobStartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuditLogJobEndDate()
    {
      return $this->auditLogJobEndDate;
    }

    /**
     * @param string $auditLogJobEndDate
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogJob
     */
    public function setAuditLogJobEndDate($auditLogJobEndDate)
    {
      $this->auditLogJobEndDate = $auditLogJobEndDate;
      return $this;
    }

    /**
     * @return AuditLogDownloadJobStatus
     */
    public function getAuditLogJobStatus()
    {
      return $this->auditLogJobStatus;
    }

    /**
     * @param AuditLogDownloadJobStatus $auditLogJobStatus
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogJob
     */
    public function setAuditLogJobStatus($auditLogJobStatus)
    {
      $this->auditLogJobStatus = $auditLogJobStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getProgress()
    {
      return $this->progress;
    }

    /**
     * @param int $progress
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogJob
     */
    public function setProgress($progress)
    {
      $this->progress = $progress;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadAuditLogDownloadUrl()
    {
      return $this->downloadAuditLogDownloadUrl;
    }

    /**
     * @param string $downloadAuditLogDownloadUrl
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\AuditLogJob
     */
    public function setDownloadAuditLogDownloadUrl($downloadAuditLogDownloadUrl)
    {
      $this->downloadAuditLogDownloadUrl = $downloadAuditLogDownloadUrl;
      return $this;
    }

}
