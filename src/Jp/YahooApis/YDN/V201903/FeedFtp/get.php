<?php

namespace Jp\YahooApis\YDN\V201903\FeedFtp;

class get
{

    /**
     * @var FeedFtpSelector $selector
     */
    protected $selector = null;

    /**
     * @param FeedFtpSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return FeedFtpSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param FeedFtpSelector $selector
     * @return \Jp\YahooApis\YDN\V201903\FeedFtp\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
