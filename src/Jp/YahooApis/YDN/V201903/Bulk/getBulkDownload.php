<?php

namespace Jp\YahooApis\YDN\V201903\Bulk;

class getBulkDownload
{

    /**
     * @var BulkDownloadSelector $selector
     */
    protected $selector = null;

    /**
     * @param BulkDownloadSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return BulkDownloadSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param BulkDownloadSelector $selector
     * @return \Jp\YahooApis\YDN\V201903\Bulk\getBulkDownload
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
