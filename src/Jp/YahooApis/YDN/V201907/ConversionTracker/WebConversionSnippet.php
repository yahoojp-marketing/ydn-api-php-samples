<?php

namespace Jp\YahooApis\YDN\V201907\ConversionTracker;

class WebConversionSnippet
{

    /**
     * @var WebConversionSnippetType $type
     */
    protected $type = null;

    /**
     * @var string $tag
     */
    protected $tag = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WebConversionSnippetType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param WebConversionSnippetType $type
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\WebConversionSnippet
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
      return $this->tag;
    }

    /**
     * @param string $tag
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\WebConversionSnippet
     */
    public function setTag($tag)
    {
      $this->tag = $tag;
      return $this;
    }

}
