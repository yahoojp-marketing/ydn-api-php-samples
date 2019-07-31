<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupTarget;

class AdGroupTargetOperation
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var AdGroupTarget[] $operand
     */
    protected $operand = null;

    /**
     * @param int $accountId
     * @param AdGroupTarget[] $operand
     */
    public function __construct($accountId, array $operand)
    {
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
     * @return \Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetOperation
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
     * @return \Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetOperation
     */
    public function setOperand(array $operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
