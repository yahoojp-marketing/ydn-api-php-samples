<?php

namespace Jp\YahooApis\YDN\V201911\AuditLog;

class getDownload
{

    /**
     * @var AuditLogDownloadSelector $selector
     */
    protected $selector = null;

    /**
     * @param AuditLogDownloadSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return AuditLogDownloadSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param AuditLogDownloadSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\AuditLog\getDownload
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
