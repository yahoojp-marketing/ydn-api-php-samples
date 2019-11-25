<?php

namespace Jp\YahooApis\YDN\V201911\FeedHolder;

class mutate
{

    /**
     * @var FeedHolderOperation $operations
     */
    protected $operations = null;

    /**
     * @param FeedHolderOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return FeedHolderOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param FeedHolderOperation $operations
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
