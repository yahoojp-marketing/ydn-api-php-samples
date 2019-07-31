<?php

namespace Jp\YahooApis\YDN\V201907\FeedFtpRequest;

class FeedFtpRequestOperation extends Operation
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var FeedFtpRequest[] $operand
     */
    protected $operand = null;

    /**
     * @param Operator $operator
     * @param int $accountId
     * @param FeedFtpRequest[] $operand
     */
    public function __construct($operator, $accountId, array $operand)
    {
      parent::__construct($operator);
      $this->accountId = $accountId;
      $this->operand = $operand;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\YDN\V201907\FeedFtpRequest\FeedFtpRequestOperation
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return FeedFtpRequest[]
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param FeedFtpRequest[] $operand
     * @return \Jp\YahooApis\YDN\V201907\FeedFtpRequest\FeedFtpRequestOperation
     */
    public function setOperand(array $operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
