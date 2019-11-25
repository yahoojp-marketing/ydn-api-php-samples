<?php

namespace Jp\YahooApis\YDN\V201911\FeedFtp;

class FeedFtpOperation extends Operation
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var FeedFtp[] $operand
     */
    protected $operand = null;

    /**
     * @param Operator $operator
     * @param int $accountId
     * @param FeedFtp[] $operand
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
     * @return \Jp\YahooApis\YDN\V201911\FeedFtp\FeedFtpOperation
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return FeedFtp[]
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param FeedFtp[] $operand
     * @return \Jp\YahooApis\YDN\V201911\FeedFtp\FeedFtpOperation
     */
    public function setOperand(array $operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
