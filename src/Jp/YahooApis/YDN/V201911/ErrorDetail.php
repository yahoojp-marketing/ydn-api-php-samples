<?php

namespace Jp\YahooApis\YDN\V201911;

class ErrorDetail
{

    /**
     * @var string $requestKey
     */
    protected $requestKey = null;

    /**
     * @var string[] $requestValue
     */
    protected $requestValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRequestKey()
    {
      return $this->requestKey;
    }

    /**
     * @param string $requestKey
     * @return \Jp\YahooApis\YDN\V201911\ErrorDetail
     */
    public function setRequestKey($requestKey)
    {
      $this->requestKey = $requestKey;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRequestValue()
    {
      return $this->requestValue;
    }

    /**
     * @param string[] $requestValue
     * @return \Jp\YahooApis\YDN\V201911\ErrorDetail
     */
    public function setRequestValue(array $requestValue = null)
    {
      $this->requestValue = $requestValue;
      return $this;
    }

}
