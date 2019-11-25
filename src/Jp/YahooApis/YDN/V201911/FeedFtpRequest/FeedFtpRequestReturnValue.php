<?php

namespace Jp\YahooApis\YDN\V201911\FeedFtpRequest;

class FeedFtpRequestReturnValue extends \Jp\YahooApis\YDN\V201911\ListReturnValue
{

    /**
     * @var FeedFtpRequestValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedFtpRequestValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param FeedFtpRequestValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\FeedFtpRequest\FeedFtpRequestReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
