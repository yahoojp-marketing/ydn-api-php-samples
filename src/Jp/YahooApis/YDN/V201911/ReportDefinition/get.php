<?php

namespace Jp\YahooApis\YDN\V201911\ReportDefinition;

class get
{

    /**
     * @var ReportDefinitionSelector $selector
     */
    protected $selector = null;

    /**
     * @param ReportDefinitionSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return ReportDefinitionSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param ReportDefinitionSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\ReportDefinition\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
