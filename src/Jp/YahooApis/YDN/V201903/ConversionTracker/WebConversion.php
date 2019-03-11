<?php

namespace Jp\YahooApis\YDN\V201903\ConversionTracker;

class WebConversion extends ConversionTracker
{

    /**
     * @var WebConversionSnippet[] $snippet
     */
    protected $snippet = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return WebConversionSnippet[]
     */
    public function getSnippet()
    {
      return $this->snippet;
    }

    /**
     * @param WebConversionSnippet[] $snippet
     * @return \Jp\YahooApis\YDN\V201903\ConversionTracker\WebConversion
     */
    public function setSnippet(array $snippet = null)
    {
      $this->snippet = $snippet;
      return $this;
    }

}
