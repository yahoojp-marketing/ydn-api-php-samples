<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupTarget;

class AgeTarget extends Target
{

    /**
     * @var Age $age
     */
    protected $age = null;

    /**
     * @var EstimateFlg $estimateFlg
     */
    protected $estimateFlg = null;

    /**
     * @param TargetType $type
     */
    public function __construct($type)
    {
      parent::__construct($type);
    }

    /**
     * @return Age
     */
    public function getAge()
    {
      return $this->age;
    }

    /**
     * @param Age $age
     * @return \Jp\YahooApis\YDN\V201903\AdGroupTarget\AgeTarget
     */
    public function setAge($age)
    {
      $this->age = $age;
      return $this;
    }

    /**
     * @return EstimateFlg
     */
    public function getEstimateFlg()
    {
      return $this->estimateFlg;
    }

    /**
     * @param EstimateFlg $estimateFlg
     * @return \Jp\YahooApis\YDN\V201903\AdGroupTarget\AgeTarget
     */
    public function setEstimateFlg($estimateFlg)
    {
      $this->estimateFlg = $estimateFlg;
      return $this;
    }

}
