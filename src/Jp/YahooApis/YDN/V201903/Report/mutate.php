<?php

namespace Jp\YahooApis\YDN\V201903\Report;

class mutate
{

    /**
     * @var ReportJobOperation $operations
     */
    protected $operations = null;

    /**
     * @param ReportJobOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return ReportJobOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param ReportJobOperation $operations
     * @return \Jp\YahooApis\YDN\V201903\Report\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
