<?php

namespace Jp\YahooApis\YDN\V201903\RetargetingList;

class RetargetingListOperation extends Operation
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var RetargetingList[] $operand
     */
    protected $operand = null;

    /**
     * @param Operator $operator
     * @param int $accountId
     * @param RetargetingList[] $operand
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
     * @return \Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingListOperation
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return RetargetingList[]
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param RetargetingList[] $operand
     * @return \Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingListOperation
     */
    public function setOperand(array $operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
