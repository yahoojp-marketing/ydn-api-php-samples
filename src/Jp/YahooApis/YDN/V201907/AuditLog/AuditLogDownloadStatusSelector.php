<?php

namespace Jp\YahooApis\YDN\V201907\AuditLog;

class AuditLogDownloadStatusSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $auditLogJobIds
     */
    protected $auditLogJobIds = null;

    /**
     * @var AuditLogDownloadJobStatus[] $auditLogJobStatuses
     */
    protected $auditLogJobStatuses = null;

    /**
     * @var \Jp\YahooApis\YDN\V201907\Paging $paging
     */
    protected $paging = null;

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
     * @return \Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDownloadStatusSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAuditLogJobIds()
    {
      return $this->auditLogJobIds;
    }

    /**
     * @param long[] $auditLogJobIds
     * @return \Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDownloadStatusSelector
     */
    public function setAuditLogJobIds(array $auditLogJobIds = null)
    {
      $this->auditLogJobIds = $auditLogJobIds;
      return $this;
    }

    /**
     * @return AuditLogDownloadJobStatus[]
     */
    public function getAuditLogJobStatuses()
    {
      return $this->auditLogJobStatuses;
    }

    /**
     * @param AuditLogDownloadJobStatus[] $auditLogJobStatuses
     * @return \Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDownloadStatusSelector
     */
    public function setAuditLogJobStatuses(array $auditLogJobStatuses = null)
    {
      $this->auditLogJobStatuses = $auditLogJobStatuses;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201907\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201907\Paging $paging
     * @return \Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDownloadStatusSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
