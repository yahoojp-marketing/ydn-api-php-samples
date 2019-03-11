<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class getGeographicLocation
{

    /**
     * @var GeographicLocationSelector $selector
     */
    protected $selector = null;

    /**
     * @param GeographicLocationSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return GeographicLocationSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param GeographicLocationSelector $selector
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\getGeographicLocation
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
