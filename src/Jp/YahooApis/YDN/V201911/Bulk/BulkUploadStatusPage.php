<?php

namespace Jp\YahooApis\YDN\V201911\Bulk;

class BulkUploadStatusPage extends \Jp\YahooApis\YDN\V201911\Page
{

    /**
     * @var BulkUploadValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BulkUploadValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param BulkUploadValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkUploadStatusPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
