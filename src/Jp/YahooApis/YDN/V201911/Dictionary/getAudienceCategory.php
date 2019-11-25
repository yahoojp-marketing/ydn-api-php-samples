<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class getAudienceCategory
{

    /**
     * @var CategorySelector $selector
     */
    protected $selector = null;

    /**
     * @param CategorySelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return CategorySelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param CategorySelector $selector
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\getAudienceCategory
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
