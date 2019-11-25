<?php

namespace Jp\YahooApis\YDN\V201911\RetargetingList;

class CustomAudienceTargetList extends RetargetingTargetList
{

    /**
     * @var int $reachPeriod
     */
    protected $reachPeriod = null;

    /**
     * @var string $customAudienceId
     */
    protected $customAudienceId = null;

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
    public function getReachPeriod()
    {
      return $this->reachPeriod;
    }

    /**
     * @param int $reachPeriod
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\CustomAudienceTargetList
     */
    public function setReachPeriod($reachPeriod)
    {
      $this->reachPeriod = $reachPeriod;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomAudienceId()
    {
      return $this->customAudienceId;
    }

    /**
     * @param string $customAudienceId
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\CustomAudienceTargetList
     */
    public function setCustomAudienceId($customAudienceId)
    {
      $this->customAudienceId = $customAudienceId;
      return $this;
    }

}
