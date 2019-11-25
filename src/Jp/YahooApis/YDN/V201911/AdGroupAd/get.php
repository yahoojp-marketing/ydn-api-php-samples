<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupAd;

class get
{

    /**
     * @var AdGroupAdSelector $selector
     */
    protected $selector = null;

    /**
     * @param AdGroupAdSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return AdGroupAdSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param AdGroupAdSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
