<?php

namespace Jp\YahooApis\YDN\V201907\AuditLog;

class AuditLogDownloadReturnValue
{

    /**
     * @var AuditLogDownloadValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AuditLogDownloadValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AuditLogDownloadValues[] $values
     * @return \Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDownloadReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
