<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupTarget;

class replaceResponse
{

    /**
     * @var AdGroupTargetReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Error $error
     */
    protected $error = null;

    /**
     * @param AdGroupTargetReturnValue $rval
     * @param \Jp\YahooApis\YDN\V201911\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return AdGroupTargetReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param AdGroupTargetReturnValue $rval
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\replaceResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201911\Error
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201911\Error $error
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\replaceResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
