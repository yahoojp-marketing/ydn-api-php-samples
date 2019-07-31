<?php

namespace Jp\YahooApis\YDN\V201907\AuditLog;

class getDownloadResponse
{

    /**
     * @var AuditLogDownloadReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201907\Error $error
     */
    protected $error = null;

    /**
     * @param AuditLogDownloadReturnValue $rval
     * @param \Jp\YahooApis\YDN\V201907\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return AuditLogDownloadReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param AuditLogDownloadReturnValue $rval
     * @return \Jp\YahooApis\YDN\V201907\AuditLog\getDownloadResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201907\Error
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201907\Error $error
     * @return \Jp\YahooApis\YDN\V201907\AuditLog\getDownloadResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
