<?php

namespace Jp\YahooApis\YDN\V201903\Report;

class ReportJobOperation extends Operation
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var ReportRecord[] $operand
     */
    protected $operand = null;

    /**
     * @param Operator $operator
     * @param int $accountId
     * @param ReportRecord[] $operand
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
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportJobOperation
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return ReportRecord[]
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param ReportRecord[] $operand
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportJobOperation
     */
    public function setOperand(array $operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
