<?php

namespace Jp\YahooApis\YDN\V201907\SearchKeywordIdea;

class get
{

    /**
     * @var SearchKeywordIdeaSelector $selector
     */
    protected $selector = null;

    /**
     * @param SearchKeywordIdeaSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return SearchKeywordIdeaSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param SearchKeywordIdeaSelector $selector
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
