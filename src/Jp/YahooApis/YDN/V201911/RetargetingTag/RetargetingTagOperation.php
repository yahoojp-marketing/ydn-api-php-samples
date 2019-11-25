<?php

namespace Jp\YahooApis\YDN\V201911\RetargetingTag;

class RetargetingTagOperation extends Operation
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @param Operator $operator
     * @param int $accountId
     */
    public function __construct($operator, $accountId)
    {
      parent::__construct($operator);
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
     * @return \Jp\YahooApis\YDN\V201911\RetargetingTag\RetargetingTagOperation
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

}
