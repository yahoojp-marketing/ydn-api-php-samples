<?php

namespace Jp\YahooApis\YDN\V201903\Video;

class getResponse
{

    /**
     * @var VideoPage $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201903\Error $error
     */
    protected $error = null;

    /**
     * @param VideoPage $rval
     * @param \Jp\YahooApis\YDN\V201903\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return VideoPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param VideoPage $rval
     * @return \Jp\YahooApis\YDN\V201903\Video\getResponse
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
     * @return \Jp\YahooApis\YDN\V201903\Video\getResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
