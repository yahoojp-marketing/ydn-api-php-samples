<?php

namespace Jp\YahooApis\YDN\V201911\FeedHolder;

class getResponse
{

    /**
     * @var FeedHolderPage $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Error $error
     */
    protected $error = null;

    /**
     * @param FeedHolderPage $rval
     * @param \Jp\YahooApis\YDN\V201911\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return FeedHolderPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param FeedHolderPage $rval
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\getResponse
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
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\getResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
