<?php

namespace Jp\YahooApis\YDN\V201903\PlacementUrlList;

class PlacementUrlListOperation extends Operation
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var PlacementUrlList[] $operand
     */
    protected $operand = null;

    /**
     * @param Operator $operator
     * @param int $accountId
     * @param PlacementUrlList[] $operand
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
     * @return \Jp\YahooApis\YDN\V201903\PlacementUrlList\PlacementUrlListOperation
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return PlacementUrlList[]
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param PlacementUrlList[] $operand
     * @return \Jp\YahooApis\YDN\V201903\PlacementUrlList\PlacementUrlListOperation
     */
    public function setOperand(array $operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
