<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class getSiteCategoryResponse
{

    /**
     * @var CategoryPage $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Error $error
     */
    protected $error = null;

    /**
     * @param CategoryPage $rval
     * @param \Jp\YahooApis\YDN\V201911\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return CategoryPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param CategoryPage $rval
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\getSiteCategoryResponse
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
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\getSiteCategoryResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
