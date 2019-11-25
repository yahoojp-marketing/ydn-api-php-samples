<?php

namespace Jp\YahooApis\YDN\V201911\Video;

class mutate
{

    /**
     * @var VideoOperation $operations
     */
    protected $operations = null;

    /**
     * @param VideoOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return VideoOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param VideoOperation $operations
     * @return \Jp\YahooApis\YDN\V201911\Video\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
