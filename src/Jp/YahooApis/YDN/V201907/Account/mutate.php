<?php

namespace Jp\YahooApis\YDN\V201907\Account;

class mutate
{

    /**
     * @var AccountOperation $operations
     */
    protected $operations = null;

    /**
     * @param AccountOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return AccountOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param AccountOperation $operations
     * @return \Jp\YahooApis\YDN\V201907\Account\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
