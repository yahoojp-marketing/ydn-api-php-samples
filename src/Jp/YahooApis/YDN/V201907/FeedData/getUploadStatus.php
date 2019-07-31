<?php

namespace Jp\YahooApis\YDN\V201907\FeedData;

class getUploadStatus
{

    /**
     * @var FeedDataSelector $selector
     */
    protected $selector = null;

    /**
     * @param FeedDataSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return FeedDataSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param FeedDataSelector $selector
     * @return \Jp\YahooApis\YDN\V201907\FeedData\getUploadStatus
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
