<?php

namespace Jp\YahooApis\YDN\V201907\RetargetingList;

class Combination
{

    /**
     * @var LogicalOperator $logicalOperator
     */
    protected $logicalOperator = null;

    /**
     * @var TargetListData[] $targetLists
     */
    protected $targetLists = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LogicalOperator
     */
    public function getLogicalOperator()
    {
      return $this->logicalOperator;
    }

    /**
     * @param LogicalOperator $logicalOperator
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\Combination
     */
    public function setLogicalOperator($logicalOperator)
    {
      $this->logicalOperator = $logicalOperator;
      return $this;
    }

    /**
     * @return TargetListData[]
     */
    public function getTargetLists()
    {
      return $this->targetLists;
    }

    /**
     * @param TargetListData[] $targetLists
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\Combination
     */
    public function setTargetLists(array $targetLists = null)
    {
      $this->targetLists = $targetLists;
      return $this;
    }

}
