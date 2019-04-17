<?php

namespace Jp\YahooApis\YDN\V201903\FeedSet;

class mutate
{

    /**
     * @var FeedSetOperation $operations
     */
    protected $operations = null;

    /**
     * @param FeedSetOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return FeedSetOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param FeedSetOperation $operations
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
