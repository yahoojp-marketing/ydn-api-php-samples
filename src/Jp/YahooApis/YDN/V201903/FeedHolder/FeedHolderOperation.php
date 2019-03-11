<?php

namespace Jp\YahooApis\YDN\V201903\FeedHolder;

class FeedHolderOperation extends Operation
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var FeedHolderRecord[] $operand
     */
    protected $operand = null;

    /**
     * @param Operator $operator
     * @param int $accountId
     * @param FeedHolderRecord[] $operand
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
     * @return \Jp\YahooApis\YDN\V201903\FeedHolder\FeedHolderOperation
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return FeedHolderRecord[]
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param FeedHolderRecord[] $operand
     * @return \Jp\YahooApis\YDN\V201903\FeedHolder\FeedHolderOperation
     */
    public function setOperand(array $operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
