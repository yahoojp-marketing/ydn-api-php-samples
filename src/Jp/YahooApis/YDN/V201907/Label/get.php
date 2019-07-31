<?php

namespace Jp\YahooApis\YDN\V201907\Label;

class get
{

    /**
     * @var LabelSelector $selector
     */
    protected $selector = null;

    /**
     * @param LabelSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return LabelSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param LabelSelector $selector
     * @return \Jp\YahooApis\YDN\V201907\Label\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
