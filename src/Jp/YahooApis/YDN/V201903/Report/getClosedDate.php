<?php

namespace Jp\YahooApis\YDN\V201903\Report;

class getClosedDate
{

    /**
     * @var ReportClosedDateSelector $selector
     */
    protected $selector = null;

    /**
     * @param ReportClosedDateSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return ReportClosedDateSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param ReportClosedDateSelector $selector
     * @return \Jp\YahooApis\YDN\V201903\Report\getClosedDate
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
