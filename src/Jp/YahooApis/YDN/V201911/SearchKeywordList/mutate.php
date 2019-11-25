<?php

namespace Jp\YahooApis\YDN\V201911\SearchKeywordList;

class mutate
{

    /**
     * @var SearchKeywordListOperation $operations
     */
    protected $operations = null;

    /**
     * @param SearchKeywordListOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return SearchKeywordListOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param SearchKeywordListOperation $operations
     * @return \Jp\YahooApis\YDN\V201911\SearchKeywordList\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
