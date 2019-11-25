<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class get
{

    /**
     * @var StatsSelector $selector
     */
    protected $selector = null;

    /**
     * @param StatsSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return StatsSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param StatsSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\Stats\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
