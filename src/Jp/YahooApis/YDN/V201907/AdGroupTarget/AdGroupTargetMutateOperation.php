<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupTarget;

class AdGroupTargetMutateOperation
{

    /**
     * @var Operator $operator
     */
    protected $operator = null;

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var AdGroupTarget[] $operand
     */
    protected $operand = null;

    /**
     * @param Operator $operator
     * @param int $accountId
     * @param AdGroupTarget[] $operand
     */
    public function __construct($operator, $accountId, array $operand)
    {
      $this->operator = $operator;
      $this->accountId = $accountId;
      $this->operand = $operand;
    }

    /**
     * @return Operator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param Operator $operator
     * @return \Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetMutateOperation
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
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
     * @return \Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetMutateOperation
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return AdGroupTarget[]
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param AdGroupTarget[] $operand
     * @return \Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetMutateOperation
     */
    public function setOperand(array $operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
