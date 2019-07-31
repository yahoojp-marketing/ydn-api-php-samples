<?php

namespace Jp\YahooApis\YDN\V201907\RetargetingTag;

class get
{

    /**
     * @var RetargetingTagSelector $selector
     */
    protected $selector = null;

    /**
     * @param RetargetingTagSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return RetargetingTagSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param RetargetingTagSelector $selector
     * @return \Jp\YahooApis\YDN\V201907\RetargetingTag\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
