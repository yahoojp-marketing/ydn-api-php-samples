<?php

namespace Jp\YahooApis\YDN\V201903\AuditLog;

class AuditLogDownloadValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var AuditLogJob $auditLogJob
     */
    protected $auditLogJob = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Jp\YahooApis\YDN\V201903\AuditLog\AuditLogDownloadValues
     */
    public function setAuditLogJob($auditLogJob)
    {
      $this->auditLogJob = $auditLogJob;
      return $this;
    }

}
