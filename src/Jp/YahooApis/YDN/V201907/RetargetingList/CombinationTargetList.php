<?php

namespace Jp\YahooApis\YDN\V201907\RetargetingList;

class CombinationTargetList extends RetargetingTargetList
{

    /**
     * @var Combination[] $combinations
     */
    protected $combinations = null;

    /**
     * @param TargetListType $targetListType
     */
    public function __construct($targetListType)
    {
      parent::__construct($targetListType);
    }

    /**
     * @return Combination[]
     */
    public function getCombinations()
    {
      return $this->combinations;
    }

    /**
     * @param Combination[] $combinations
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\CombinationTargetList
     */
    public function setCombinations(array $combinations = null)
    {
      $this->combinations = $combinations;
      return $this;
    }

}
