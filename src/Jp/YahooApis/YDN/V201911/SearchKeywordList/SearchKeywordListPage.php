<?php

namespace Jp\YahooApis\YDN\V201911\SearchKeywordList;

class SearchKeywordListPage extends \Jp\YahooApis\YDN\V201911\Page
{

    /**
     * @var SearchKeywordListValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SearchKeywordListValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param SearchKeywordListValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordListPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
