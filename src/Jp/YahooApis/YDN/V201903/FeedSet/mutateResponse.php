<?php

namespace Jp\YahooApis\YDN\V201903\FeedSet;

class mutateResponse
{

    /**
     * @var FeedSetReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201903\Error $error
     */
    protected $error = null;

    /**
     * @param FeedSetReturnValue $rval
     * @param \Jp\YahooApis\YDN\V201903\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return FeedSetReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param FeedSetReturnValue $rval
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\mutateResponse
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
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\mutateResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
