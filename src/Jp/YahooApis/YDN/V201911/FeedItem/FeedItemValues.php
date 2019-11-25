<?php

namespace Jp\YahooApis\YDN\V201911\FeedItem;

class FeedItemValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var boolean $requestReceived
     */
    protected $requestReceived = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getRequestReceived()
    {
      return $this->requestReceived;
    }

    /**
     * @param boolean $requestReceived
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItemValues
     */
    public function setRequestReceived($requestReceived)
    {
      $this->requestReceived = $requestReceived;
      return $this;
    }

}
