<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupLabel;

class mutateResponse
{

    /**
     * @var AdGroupLabelReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Error $error
     */
    protected $error = null;

    /**
     * @param AdGroupLabelReturnValue $rval
     * @param \Jp\YahooApis\YDN\V201911\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return AdGroupLabelReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param AdGroupLabelReturnValue $rval
     * @return \Jp\YahooApis\YDN\V201911\AdGroupLabel\mutateResponse
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupLabel\mutateResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
