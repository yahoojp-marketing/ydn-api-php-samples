<?php

namespace Jp\YahooApis\YDN\V201903\RetargetingList;

abstract class RetargetingTargetList
{

    /**
     * @var TargetListType $targetListType
     */
    protected $targetListType = null;

    /**
     * @param TargetListType $targetListType
     */
    public function __construct($targetListType)
    {
      $this->targetListType = $targetListType;
    }

    /**
     * @return TargetListType
     */
    public function getTargetListType()
    {
      return $this->targetListType;
    }

    /**
     * @param TargetListType $targetListType
     * @return \Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingTargetList
     */
    public function setTargetListType($targetListType)
    {
      $this->targetListType = $targetListType;
      return $this;
    }

}
