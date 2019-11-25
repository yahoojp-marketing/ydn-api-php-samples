<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class GenderTarget extends Target
{

    /**
     * @var Gender $gender
     */
    protected $gender = null;

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
     * @return Gender
     */
    public function getGender()
    {
      return $this->gender;
    }

    /**
     * @param Gender $gender
     * @return \Jp\YahooApis\YDN\V201911\Stats\GenderTarget
     */
    public function setGender($gender)
    {
      $this->gender = $gender;
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\GenderTarget
     */
    public function setEstimateFlg($estimateFlg)
    {
      $this->estimateFlg = $estimateFlg;
      return $this;
    }

}
