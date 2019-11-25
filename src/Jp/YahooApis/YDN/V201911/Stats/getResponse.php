<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class getResponse
{

    /**
     * @var StatsPage $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Error $error
     */
    protected $error = null;

    /**
     * @param StatsPage $rval
     * @param \Jp\YahooApis\YDN\V201911\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return StatsPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param StatsPage $rval
     * @return \Jp\YahooApis\YDN\V201911\Stats\getResponse
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\getResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
