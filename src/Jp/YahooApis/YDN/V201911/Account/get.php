<?php

namespace Jp\YahooApis\YDN\V201911\Account;

class get
{

    /**
     * @var AccountSelector $selector
     */
    protected $selector = null;

    /**
     * @param AccountSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return AccountSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param AccountSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\Account\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
