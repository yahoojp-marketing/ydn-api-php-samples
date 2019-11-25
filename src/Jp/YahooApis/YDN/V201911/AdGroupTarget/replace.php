<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupTarget;

class replace
{

    /**
     * @var AdGroupTargetOperation $operations
     */
    protected $operations = null;

    /**
     * @param AdGroupTargetOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return AdGroupTargetOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param AdGroupTargetOperation $operations
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\replace
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
