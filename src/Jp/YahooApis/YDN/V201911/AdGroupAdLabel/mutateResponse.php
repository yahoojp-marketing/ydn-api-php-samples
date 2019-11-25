<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupAdLabel;

class mutateResponse
{

    /**
     * @var AdGroupAdLabelReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Error $error
     */
    protected $error = null;

    /**
     * @param AdGroupAdLabelReturnValue $rval
     * @param \Jp\YahooApis\YDN\V201911\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return AdGroupAdLabelReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param AdGroupAdLabelReturnValue $rval
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAdLabel\mutateResponse
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAdLabel\mutateResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
