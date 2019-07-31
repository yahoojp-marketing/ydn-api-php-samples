<?php

namespace Jp\YahooApis\YDN\V201907\Dictionary;

class getOsVersion
{

    /**
     * @var OsVersionSelector $selector
     */
    protected $selector = null;

    /**
     * @param OsVersionSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return OsVersionSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param OsVersionSelector $selector
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\getOsVersion
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
