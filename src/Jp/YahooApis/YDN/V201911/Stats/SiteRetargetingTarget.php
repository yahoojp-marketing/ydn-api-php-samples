<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class SiteRetargetingTarget extends Target
{

    /**
     * @var string $targetListName
     */
    protected $targetListName = null;

    /**
     * @var TargetListDeliverType $deliverType
     */
    protected $deliverType = null;

    /**
     * @param TargetType $type
     */
    public function __construct($type)
    {
      parent::__construct($type);
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\SiteRetargetingTarget
     */
    public function setTargetListName($targetListName)
    {
      $this->targetListName = $targetListName;
      return $this;
    }

    /**
     * @return TargetListDeliverType
     */
    public function getDeliverType()
    {
      return $this->deliverType;
    }

    /**
     * @param TargetListDeliverType $deliverType
     * @return \Jp\YahooApis\YDN\V201911\Stats\SiteRetargetingTarget
     */
    public function setDeliverType($deliverType)
    {
      $this->deliverType = $deliverType;
      return $this;
    }

}
