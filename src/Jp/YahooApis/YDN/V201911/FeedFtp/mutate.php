<?php

namespace Jp\YahooApis\YDN\V201911\FeedFtp;

class mutate
{

    /**
     * @var FeedFtpOperation $operations
     */
    protected $operations = null;

    /**
     * @param FeedFtpOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return FeedFtpOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param FeedFtpOperation $operations
     * @return \Jp\YahooApis\YDN\V201911\FeedFtp\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
