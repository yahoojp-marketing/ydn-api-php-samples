<?php

namespace Jp\YahooApis\YDN\V201911\Video;

class get
{

    /**
     * @var VideoSelector $selector
     */
    protected $selector = null;

    /**
     * @param VideoSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return VideoSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param VideoSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\Video\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
