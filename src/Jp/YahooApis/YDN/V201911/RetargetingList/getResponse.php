<?php

namespace Jp\YahooApis\YDN\V201911\RetargetingList;

class getResponse
{

    /**
     * @var RetargetingListPage $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Error $error
     */
    protected $error = null;

    /**
     * @param RetargetingListPage $rval
     * @param \Jp\YahooApis\YDN\V201911\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return RetargetingListPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param RetargetingListPage $rval
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\getResponse
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
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\getResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
