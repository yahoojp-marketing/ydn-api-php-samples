<?php

namespace Jp\YahooApis\YDN\V201907\RetargetingList;

class RuleTargetList extends RetargetingTargetList
{

    /**
     * @var string $retargetingTagId
     */
    protected $retargetingTagId = null;

    /**
     * @var IsPreset $isPreset
     */
    protected $isPreset = null;

    /**
     * @var IsOpen $isOpen
     */
    protected $isOpen = null;

    /**
     * @var int $reachPeriod
     */
    protected $reachPeriod = null;

    /**
     * @var Rule[] $rules
     */
    protected $rules = null;

    /**
     * @param TargetListType $targetListType
     */
    public function __construct($targetListType)
    {
      parent::__construct($targetListType);
    }

    /**
     * @return string
     */
    public function getRetargetingTagId()
    {
      return $this->retargetingTagId;
    }

    /**
     * @param string $retargetingTagId
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\RuleTargetList
     */
    public function setRetargetingTagId($retargetingTagId)
    {
      $this->retargetingTagId = $retargetingTagId;
      return $this;
    }

    /**
     * @return IsPreset
     */
    public function getIsPreset()
    {
      return $this->isPreset;
    }

    /**
     * @param IsPreset $isPreset
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\RuleTargetList
     */
    public function setIsPreset($isPreset)
    {
      $this->isPreset = $isPreset;
      return $this;
    }

    /**
     * @return IsOpen
     */
    public function getIsOpen()
    {
      return $this->isOpen;
    }

    /**
     * @param IsOpen $isOpen
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\RuleTargetList
     */
    public function setIsOpen($isOpen)
    {
      $this->isOpen = $isOpen;
      return $this;
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
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\RuleTargetList
     */
    public function setReachPeriod($reachPeriod)
    {
      $this->reachPeriod = $reachPeriod;
      return $this;
    }

    /**
     * @return Rule[]
     */
    public function getRules()
    {
      return $this->rules;
    }

    /**
     * @param Rule[] $rules
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\RuleTargetList
     */
    public function setRules(array $rules = null)
    {
      $this->rules = $rules;
      return $this;
    }

}
