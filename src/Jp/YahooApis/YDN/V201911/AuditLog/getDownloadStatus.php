<?php

namespace Jp\YahooApis\YDN\V201911\AuditLog;

class getDownloadStatus
{

    /**
     * @var AuditLogDownloadStatusSelector $selector
     */
    protected $selector = null;

    /**
     * @param AuditLogDownloadStatusSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return AuditLogDownloadStatusSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param AuditLogDownloadStatusSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\getDownloadStatus
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
