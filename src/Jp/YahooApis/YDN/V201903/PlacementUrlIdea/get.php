<?php

namespace Jp\YahooApis\YDN\V201903\PlacementUrlIdea;

class get
{

    /**
     * @var PlacementUrlIdeaSelector $selector
     */
    protected $selector = null;

    /**
     * @param PlacementUrlIdeaSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return PlacementUrlIdeaSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param PlacementUrlIdeaSelector $selector
     * @return \Jp\YahooApis\YDN\V201903\PlacementUrlIdea\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
