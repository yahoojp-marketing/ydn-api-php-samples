<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupTarget;

class mutate
{

    /**
     * @var AdGroupTargetMutateOperation $operations
     */
    protected $operations = null;

    /**
     * @param AdGroupTargetMutateOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return AdGroupTargetMutateOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param AdGroupTargetMutateOperation $operations
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
