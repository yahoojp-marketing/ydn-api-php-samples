<?php

namespace Jp\YahooApis\YDN\V201903\RetargetingList;

class TargetListSizeReaches
{

    /**
     * @var TargetListSize $targetListSize
     */
    protected $targetListSize = null;

    /**
     * @var int $reach
     */
    protected $reach = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TargetListSize
     */
    public function getTargetListSize()
    {
      return $this->targetListSize;
    }

    /**
     * @param TargetListSize $targetListSize
     * @return \Jp\YahooApis\YDN\V201903\RetargetingList\TargetListSizeReaches
     */
    public function setTargetListSize($targetListSize)
    {
      $this->targetListSize = $targetListSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getReach()
    {
      return $this->reach;
    }

    /**
     * @param int $reach
     * @return \Jp\YahooApis\YDN\V201903\RetargetingList\TargetListSizeReaches
     */
    public function setReach($reach)
    {
      $this->reach = $reach;
      return $this;
    }

}
