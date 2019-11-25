<?php

namespace Jp\YahooApis\YDN\V201911\ConversionTracker;

class get
{

    /**
     * @var ConversionTrackerSelector $selector
     */
    protected $selector = null;

    /**
     * @param ConversionTrackerSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return ConversionTrackerSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param ConversionTrackerSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\ConversionTracker\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
