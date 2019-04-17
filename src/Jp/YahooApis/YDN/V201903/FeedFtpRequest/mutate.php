<?php

namespace Jp\YahooApis\YDN\V201903\FeedFtpRequest;

class mutate
{

    /**
     * @var FeedFtpRequestOperation $operations
     */
    protected $operations = null;

    /**
     * @param FeedFtpRequestOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return FeedFtpRequestOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param FeedFtpRequestOperation $operations
     * @return \Jp\YahooApis\YDN\V201903\FeedFtpRequest\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
