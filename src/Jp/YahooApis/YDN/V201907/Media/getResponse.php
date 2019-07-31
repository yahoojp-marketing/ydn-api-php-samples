<?php

namespace Jp\YahooApis\YDN\V201907\Media;

class getResponse
{

    /**
     * @var MediaPage $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201907\Error $error
     */
    protected $error = null;

    /**
     * @param MediaPage $rval
     * @param \Jp\YahooApis\YDN\V201907\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return MediaPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param MediaPage $rval
     * @return \Jp\YahooApis\YDN\V201907\Media\getResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201907\Error
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201907\Error $error
     * @return \Jp\YahooApis\YDN\V201907\Media\getResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
