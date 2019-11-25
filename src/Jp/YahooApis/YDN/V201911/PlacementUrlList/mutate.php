<?php

namespace Jp\YahooApis\YDN\V201911\PlacementUrlList;

class mutate
{

    /**
     * @var PlacementUrlListOperation $operations
     */
    protected $operations = null;

    /**
     * @param PlacementUrlListOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return PlacementUrlListOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param PlacementUrlListOperation $operations
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
