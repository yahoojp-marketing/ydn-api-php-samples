<?php

namespace Jp\YahooApis\YDN\V201911\AccountAdProduct;

class AccountAdProductSelector
{

    /**
     * @var long[] $accountIds
     */
    protected $accountIds = null;

    /**
     * @param long[] $accountIds
     */
    public function __construct(array $accountIds)
    {
      $this->accountIds = $accountIds;
    }

    /**
     * @return long[]
     */
    public function getAccountIds()
    {
      return $this->accountIds;
    }

    /**
     * @param long[] $accountIds
     * @return \Jp\YahooApis\YDN\V201911\AccountAdProduct\AccountAdProductSelector
     */
    public function setAccountIds(array $accountIds)
    {
      $this->accountIds = $accountIds;
      return $this;
    }

}
