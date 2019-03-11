<?php

namespace Jp\YahooApis\YDN\V201903\ReportDefinition;

class ReportDefinitionFieldValue extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var ReportDefinitionField[] $fields
     */
    protected $fields = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReportDefinitionField[]
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param ReportDefinitionField[] $fields
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinitionFieldValue
     */
    public function setFields(array $fields = null)
    {
      $this->fields = $fields;
      return $this;
    }

}
