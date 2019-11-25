<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupTarget;

class CarrierTarget extends Target
{

    /**
     * @var CarrierType $mobileCarrier
     */
    protected $mobileCarrier = null;

    /**
     * @param TargetType $type
     */
    public function __construct($type)
    {
      parent::__construct($type);
    }

    /**
     * @return CarrierType
     */
    public function getMobileCarrier()
    {
      return $this->mobileCarrier;
    }

    /**
     * @param CarrierType $mobileCarrier
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\CarrierTarget
     */
    public function setMobileCarrier($mobileCarrier)
    {
      $this->mobileCarrier = $mobileCarrier;
      return $this;
    }

}
