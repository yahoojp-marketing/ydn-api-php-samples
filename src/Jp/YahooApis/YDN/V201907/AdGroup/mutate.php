<?php

namespace Jp\YahooApis\YDN\V201907\AdGroup;

class mutate
{

    /**
     * @var AdGroupOperation $operations
     */
    protected $operations = null;

    /**
     * @param AdGroupOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return AdGroupOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param AdGroupOperation $operations
     * @return \Jp\YahooApis\YDN\V201907\AdGroup\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
