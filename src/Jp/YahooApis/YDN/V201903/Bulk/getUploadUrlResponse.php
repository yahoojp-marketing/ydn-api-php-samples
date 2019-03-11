<?php

namespace Jp\YahooApis\YDN\V201903\Bulk;

class getUploadUrlResponse
{

    /**
     * @var UploadUrlValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201903\Error $error
     */
    protected $error = null;

    /**
     * @param UploadUrlValue $rval
     * @param \Jp\YahooApis\YDN\V201903\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return UploadUrlValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param UploadUrlValue $rval
     * @return \Jp\YahooApis\YDN\V201903\Bulk\getUploadUrlResponse
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
     * @return \Jp\YahooApis\YDN\V201903\Bulk\getUploadUrlResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
