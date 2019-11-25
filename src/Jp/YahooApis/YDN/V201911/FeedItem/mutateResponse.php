<?php

namespace Jp\YahooApis\YDN\V201911\FeedItem;

class mutateResponse
{

    /**
     * @var FeedItemReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Error $error
     */
    protected $error = null;

    /**
     * @param FeedItemReturnValue $rval
     * @param \Jp\YahooApis\YDN\V201911\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return FeedItemReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param FeedItemReturnValue $rval
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\mutateResponse
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
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\mutateResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
