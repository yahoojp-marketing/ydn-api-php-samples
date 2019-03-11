<?php

namespace Jp\YahooApis\YDN\V201903\Report;

class ReportReturnValue extends \Jp\YahooApis\YDN\V201903\ListReturnValue
{

    /**
     * @var ReportValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReportValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param ReportValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
