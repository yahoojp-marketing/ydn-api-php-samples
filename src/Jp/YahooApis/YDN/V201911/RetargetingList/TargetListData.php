<?php

namespace Jp\YahooApis\YDN\V201911\RetargetingList;

class TargetListData
{

    /**
     * @var int $targetListId
     */
    protected $targetListId = null;

    /**
     * @var string $targetListName
     */
    protected $targetListName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getTargetListId()
    {
      return $this->targetListId;
    }

    /**
     * @param int $targetListId
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\TargetListData
     */
    public function setTargetListId($targetListId)
    {
      $this->targetListId = $targetListId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetListName()
    {
      return $this->targetListName;
    }

    /**
     * @param string $targetListName
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\TargetListData
     */
    public function setTargetListName($targetListName)
    {
      $this->targetListName = $targetListName;
      return $this;
    }

}
