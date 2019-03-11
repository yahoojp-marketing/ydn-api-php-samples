<?php

namespace Jp\YahooApis\YDN\V201903\LocationService_sandbox.wsdl;

class getResponse
{

    /**
     * @var LocationReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201903\Error $error
     */
    protected $error = null;

    /**
     * @param LocationReturnValue $rval
     * @param \Jp\YahooApis\YDN\V201903\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return LocationReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param LocationReturnValue $rval
     * @return \Jp\YahooApis\YDN\V201903\LocationService_sandbox.wsdl\getResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201903\Error
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201903\Error $error
     * @return \Jp\YahooApis\YDN\V201903\LocationService_sandbox.wsdl\getResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
