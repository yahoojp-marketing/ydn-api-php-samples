<?php

namespace Jp\YahooApis\YDN\V201907\ReportDefinition;

class ReportDefinitionReturnValue extends \Jp\YahooApis\YDN\V201907\ListReturnValue
{

    /**
     * @var ReportDefinitionValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReportDefinitionValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param ReportDefinitionValues[] $values
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinitionReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
