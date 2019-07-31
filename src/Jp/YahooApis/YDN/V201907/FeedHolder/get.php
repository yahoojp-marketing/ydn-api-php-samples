<?php

namespace Jp\YahooApis\YDN\V201907\FeedHolder;

class get
{

    /**
     * @var FeedHolderSelector $selector
     */
    protected $selector = null;

    /**
     * @param FeedHolderSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return FeedHolderSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param FeedHolderSelector $selector
     * @return \Jp\YahooApis\YDN\V201907\FeedHolder\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
