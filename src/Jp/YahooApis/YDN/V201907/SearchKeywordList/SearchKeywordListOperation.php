<?php

namespace Jp\YahooApis\YDN\V201907\SearchKeywordList;

class SearchKeywordListOperation extends Operation
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var SearchKeywordList[] $operand
     */
    protected $operand = null;

    /**
     * @param Operator $operator
     * @param int $accountId
     * @param SearchKeywordList[] $operand
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
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordList\SearchKeywordListOperation
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return SearchKeywordList[]
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param SearchKeywordList[] $operand
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordList\SearchKeywordListOperation
     */
    public function setOperand(array $operand)
    {
      $this->operand = $operand;
      return $this;
    }

}
