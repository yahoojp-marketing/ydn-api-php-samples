<?php

namespace Jp\YahooApis\YDN\V201907\Bulk;

class BulkDownloadStatusPage extends \Jp\YahooApis\YDN\V201907\Page
{

    /**
     * @var BulkDownloadValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BulkDownloadValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param BulkDownloadValues[] $values
     * @return \Jp\YahooApis\YDN\V201907\Bulk\BulkDownloadStatusPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
