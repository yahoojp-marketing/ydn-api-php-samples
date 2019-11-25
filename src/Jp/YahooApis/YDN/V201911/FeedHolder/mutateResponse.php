<?php

namespace Jp\YahooApis\YDN\V201911\FeedHolder;

class mutateResponse
{

    /**
     * @var FeedHolderReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Error $error
     */
    protected $error = null;

    /**
     * @param FeedHolderReturnValue $rval
     * @param \Jp\YahooApis\YDN\V201911\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return FeedHolderReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param FeedHolderReturnValue $rval
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\mutateResponse
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
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\mutateResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
