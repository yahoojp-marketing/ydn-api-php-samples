<?php

namespace Jp\YahooApis\YDN\V201903;

abstract class ReturnValue
{

    /**
     * @var boolean $operationSucceeded
     */
    protected $operationSucceeded = null;

    /**
     * @var Error[] $error
     */
    protected $error = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getOperationSucceeded()
    {
      return $this->operationSucceeded;
    }

    /**
     * @param boolean $operationSucceeded
     * @return \Jp\YahooApis\YDN\V201903\ReturnValue
     */
    public function setOperationSucceeded($operationSucceeded)
    {
      $this->operationSucceeded = $operationSucceeded;
      return $this;
    }

    /**
     * @return Error[]
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param Error[] $error
     * @return \Jp\YahooApis\YDN\V201903\ReturnValue
     */
    public function setError(array $error = null)
    {
      $this->error = $error;
      return $this;
    }

}
