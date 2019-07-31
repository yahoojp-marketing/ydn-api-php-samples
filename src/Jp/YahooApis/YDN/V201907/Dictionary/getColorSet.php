<?php

namespace Jp\YahooApis\YDN\V201907\Dictionary;

class getColorSet
{

    /**
     * @var ColorSetSelector $selector
     */
    protected $selector = null;

    /**
     * @param ColorSetSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return ColorSetSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param ColorSetSelector $selector
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\getColorSet
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
