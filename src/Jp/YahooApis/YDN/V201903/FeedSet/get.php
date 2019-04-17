<?php

namespace Jp\YahooApis\YDN\V201903\FeedSet;

class get
{

    /**
     * @var FeedSetSelector $selector
     */
    protected $selector = null;

    /**
     * @param FeedSetSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return FeedSetSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param FeedSetSelector $selector
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
