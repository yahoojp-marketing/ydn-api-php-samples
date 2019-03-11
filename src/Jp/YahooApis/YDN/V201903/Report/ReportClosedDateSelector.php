<?php

namespace Jp\YahooApis\YDN\V201903\Report;

class ReportClosedDateSelector
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
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportClosedDateSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

}
