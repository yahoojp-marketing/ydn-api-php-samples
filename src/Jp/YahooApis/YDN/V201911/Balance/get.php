<?php

namespace Jp\YahooApis\YDN\V201911\Balance;

class get
{

    /**
     * @var BalanceSelector $selector
     */
    protected $selector = null;

    /**
     * @param BalanceSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return BalanceSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param BalanceSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\Balance\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
