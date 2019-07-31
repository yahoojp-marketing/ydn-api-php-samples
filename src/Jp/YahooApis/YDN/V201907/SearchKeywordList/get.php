<?php

namespace Jp\YahooApis\YDN\V201907\SearchKeywordList;

class get
{

    /**
     * @var SearchKeywordListSelector $selector
     */
    protected $selector = null;

    /**
     * @param SearchKeywordListSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return SearchKeywordListSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param SearchKeywordListSelector $selector
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordList\get
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
