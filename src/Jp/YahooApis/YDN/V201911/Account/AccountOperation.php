<?php

namespace Jp\YahooApis\YDN\V201911\Account;

class AccountOperation extends Operation
{

    /**
     * @var Account $operand
     */
    protected $operand = null;

    /**
     * @param Operator $operator
     * @param Account $operand
     */
    public function __construct($operator, $operand)
    {
      parent::__construct($operator);
      $this->operand = $operand;
    }

    /**
     * @return Account
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param Account $operand
     * @return \Jp\YahooApis\YDN\V201911\Account\AccountOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
