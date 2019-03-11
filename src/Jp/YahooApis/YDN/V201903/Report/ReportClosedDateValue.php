<?php

namespace Jp\YahooApis\YDN\V201903\Report;

class ReportClosedDateValue
{

    /**
     * @var ReportClosedDateRecord[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReportClosedDateRecord[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param ReportClosedDateRecord[] $values
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportClosedDateValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
