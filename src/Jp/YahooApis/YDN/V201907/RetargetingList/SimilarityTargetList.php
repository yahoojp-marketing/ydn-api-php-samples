<?php

namespace Jp\YahooApis\YDN\V201907\RetargetingList;

class SimilarityTargetList extends RetargetingTargetList
{

    /**
     * @var int $targetListId
     */
    protected $targetListId = null;

    /**
     * @var TargetListSize $targetListSize
     */
    protected $targetListSize = null;

    /**
     * @var TargetListSizeReaches[] $targetListSizeReaches
     */
    protected $targetListSizeReaches = null;

    /**
     * @param TargetListType $targetListType
     */
    public function __construct($targetListType)
    {
      parent::__construct($targetListType);
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
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\SimilarityTargetList
     */
    public function setTargetListId($targetListId)
    {
      $this->targetListId = $targetListId;
      return $this;
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
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\SimilarityTargetList
     */
    public function setTargetListSize($targetListSize)
    {
      $this->targetListSize = $targetListSize;
      return $this;
    }

    /**
     * @return TargetListSizeReaches[]
     */
    public function getTargetListSizeReaches()
    {
      return $this->targetListSizeReaches;
    }

    /**
     * @param TargetListSizeReaches[] $targetListSizeReaches
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\SimilarityTargetList
     */
    public function setTargetListSizeReaches(array $targetListSizeReaches = null)
    {
      $this->targetListSizeReaches = $targetListSizeReaches;
      return $this;
    }

}
