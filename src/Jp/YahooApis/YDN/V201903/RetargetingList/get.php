<?php

namespace Jp\YahooApis\YDN\V201903\RetargetingList;

class get
{

    /**
     * @var RetargetingListSelector $selector
     */
    protected $selector = null;

    /**
     * @param RetargetingListSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return RetargetingListSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param RetargetingListSelector $selector
     * @return \Jp\YahooApis\YDN\V201903\RetargetingList\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
