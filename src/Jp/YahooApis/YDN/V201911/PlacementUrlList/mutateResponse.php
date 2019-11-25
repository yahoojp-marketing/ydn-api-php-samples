<?php

namespace Jp\YahooApis\YDN\V201911\PlacementUrlList;

class mutateResponse
{

    /**
     * @var PlacementUrlListReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Error $error
     */
    protected $error = null;

    /**
     * @param PlacementUrlListReturnValue $rval
     * @param \Jp\YahooApis\YDN\V201911\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return PlacementUrlListReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param PlacementUrlListReturnValue $rval
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\mutateResponse
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
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\mutateResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
