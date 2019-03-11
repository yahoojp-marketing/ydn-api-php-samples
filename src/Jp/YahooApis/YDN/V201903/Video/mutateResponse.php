<?php

namespace Jp\YahooApis\YDN\V201903\Video;

class mutateResponse
{

    /**
     * @var VideoReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201903\Error $error
     */
    protected $error = null;

    /**
     * @param VideoReturnValue $rval
     * @param \Jp\YahooApis\YDN\V201903\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return VideoReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param VideoReturnValue $rval
     * @return \Jp\YahooApis\YDN\V201903\Video\mutateResponse
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
     * @return \Jp\YahooApis\YDN\V201903\Video\mutateResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
