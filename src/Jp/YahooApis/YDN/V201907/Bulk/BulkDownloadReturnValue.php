<?php

namespace Jp\YahooApis\YDN\V201907\Bulk;

class BulkDownloadReturnValue
{

    /**
     * @var BulkDownloadValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
    
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
     * @return \Jp\YahooApis\YDN\V201907\Bulk\BulkDownloadReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
