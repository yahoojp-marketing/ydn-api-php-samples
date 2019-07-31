<?php

namespace Jp\YahooApis\YDN\V201907\Media;

class get
{

    /**
     * @var MediaSelector $selector
     */
    protected $selector = null;

    /**
     * @param MediaSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return MediaSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param MediaSelector $selector
     * @return \Jp\YahooApis\YDN\V201907\Media\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
