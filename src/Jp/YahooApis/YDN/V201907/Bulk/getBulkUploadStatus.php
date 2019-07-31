<?php

namespace Jp\YahooApis\YDN\V201907\Bulk;

class getBulkUploadStatus
{

    /**
     * @var BulkUploadStatusSelector $selector
     */
    protected $selector = null;

    /**
     * @param BulkUploadStatusSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return BulkUploadStatusSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param BulkUploadStatusSelector $selector
     * @return \Jp\YahooApis\YDN\V201907\Bulk\getBulkUploadStatus
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
