<?php

namespace Jp\YahooApis\YDN\V201903\Balance;

class BalanceSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @param int $accountId
     */
    public function __construct($accountId)
    {
      $this->accountId = $accountId;
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
     * @return \Jp\YahooApis\YDN\V201903\Balance\BalanceSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

}
