<?php

namespace Jp\YahooApis\YDN\V201907\ReportDefinition;

class ReportFilter
{

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var FilterOperator $operator
     */
    protected $operator = null;

    /**
     * @var string[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->field;
    }

    /**
     * @param string $field
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportFilter
     */
    public function setField($field)
    {
      $this->field = $field;
      return $this;
    }

    /**
     * @return FilterOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param FilterOperator $operator
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportFilter
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param string[] $values
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportFilter
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
