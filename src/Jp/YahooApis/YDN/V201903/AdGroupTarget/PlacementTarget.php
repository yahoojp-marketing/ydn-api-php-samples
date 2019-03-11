<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupTarget;

class PlacementTarget extends Target
{

    /**
     * @var string $placementUrlListName
     */
    protected $placementUrlListName = null;

    /**
     * @var PlacementUrlListType $deliverType
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
    public function getPlacementUrlListName()
    {
      return $this->placementUrlListName;
    }

    /**
     * @param string $placementUrlListName
     * @return \Jp\YahooApis\YDN\V201903\AdGroupTarget\PlacementTarget
     */
    public function setPlacementUrlListName($placementUrlListName)
    {
      $this->placementUrlListName = $placementUrlListName;
      return $this;
    }

    /**
     * @return PlacementUrlListType
     */
    public function getDeliverType()
    {
      return $this->deliverType;
    }

    /**
     * @param PlacementUrlListType $deliverType
     * @return \Jp\YahooApis\YDN\V201903\AdGroupTarget\PlacementTarget
     */
    public function setDeliverType($deliverType)
    {
      $this->deliverType = $deliverType;
      return $this;
    }

}
