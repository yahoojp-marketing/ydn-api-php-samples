<?php

namespace Jp\YahooApis\YDN\V201903\Media;

class mutate
{

    /**
     * @var MediaOperation $operations
     */
    protected $operations = null;

    /**
     * @param MediaOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return MediaOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param MediaOperation $operations
     * @return \Jp\YahooApis\YDN\V201903\Media\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
