<?php

namespace Jp\YahooApis\YDN\V201907\Balance;

class BalanceValues extends \Jp\YahooApis\YDN\V201907\ReturnValue
{

    /**
     * @var Balance $balance
     */
    protected $balance = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Balance
     */
    public function getBalance()
    {
      return $this->balance;
    }

    /**
     * @param Balance $balance
     * @return \Jp\YahooApis\YDN\V201907\Balance\BalanceValues
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
      return $this;
    }

}
