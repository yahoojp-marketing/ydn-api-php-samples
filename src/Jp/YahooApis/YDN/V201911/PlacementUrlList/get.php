<?php

namespace Jp\YahooApis\YDN\V201911\PlacementUrlList;

class get
{

    /**
     * @var PlacementUrlListSelector $selector
     */
    protected $selector = null;

    /**
     * @param PlacementUrlListSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return PlacementUrlListSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param PlacementUrlListSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
