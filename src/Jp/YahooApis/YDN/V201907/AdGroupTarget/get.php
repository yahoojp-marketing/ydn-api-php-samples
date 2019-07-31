<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupTarget;

class get
{

    /**
     * @var AdGroupTargetSelector $selector
     */
    protected $selector = null;

    /**
     * @param AdGroupTargetSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return AdGroupTargetSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param AdGroupTargetSelector $selector
     * @return \Jp\YahooApis\YDN\V201907\AdGroupTarget\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
