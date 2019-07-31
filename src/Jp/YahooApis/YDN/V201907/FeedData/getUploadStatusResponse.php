<?php

namespace Jp\YahooApis\YDN\V201907\FeedData;

class getUploadStatusResponse
{

    /**
     * @var FeedDataPage $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201907\Error $error
     */
    protected $error = null;

    /**
     * @param FeedDataPage $rval
     * @param \Jp\YahooApis\YDN\V201907\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return FeedDataPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param FeedDataPage $rval
     * @return \Jp\YahooApis\YDN\V201907\FeedData\getUploadStatusResponse
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
     * @return \Jp\YahooApis\YDN\V201907\FeedData\getUploadStatusResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
