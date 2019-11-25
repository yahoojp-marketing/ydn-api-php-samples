<?php

namespace Jp\YahooApis\YDN\V201911\RetargetingTag;

class mutate
{

    /**
     * @var RetargetingTagOperation $operations
     */
    protected $operations = null;

    /**
     * @param RetargetingTagOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return RetargetingTagOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param RetargetingTagOperation $operations
     * @return \Jp\YahooApis\YDN\V201911\RetargetingTag\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
