<?php

namespace Jp\YahooApis\YDN\V201903\ReportDefinition;

abstract class Operation
{

    /**
     * @var Operator $operator
     */
    protected $operator = null;

    /**
     * @param Operator $operator
     */
    public function __construct($operator)
    {
      $this->operator = $operator;
    }

    /**
     * @return Operator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param Operator $operator
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\Operation
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
