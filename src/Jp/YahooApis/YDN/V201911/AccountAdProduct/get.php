<?php

namespace Jp\YahooApis\YDN\V201911\AccountAdProduct;

class get
{

    /**
     * @var AccountAdProductSelector $selector
     */
    protected $selector = null;

    /**
     * @param AccountAdProductSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return AccountAdProductSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param AccountAdProductSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\AccountAdProduct\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
