<?php

namespace Jp\YahooApis\YDN\V201911\AdGroup;

class AutoAdGroupConversionOptimizer extends AdGroupConversionOptimizer
{

    /**
     * @var int $targetCpa
     */
    protected $targetCpa = null;

    /**
     * @var ConversionOptimizerEligibilityFlg $eligibilityFlg
     */
    protected $eligibilityFlg = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getTargetCpa()
    {
      return $this->targetCpa;
    }

    /**
     * @param int $targetCpa
     * @return \Jp\YahooApis\YDN\V201911\AdGroup\AutoAdGroupConversionOptimizer
     */
    public function setTargetCpa($targetCpa)
    {
      $this->targetCpa = $targetCpa;
      return $this;
    }

    /**
     * @return ConversionOptimizerEligibilityFlg
     */
    public function getEligibilityFlg()
    {
      return $this->eligibilityFlg;
    }

    /**
     * @param ConversionOptimizerEligibilityFlg $eligibilityFlg
     * @return \Jp\YahooApis\YDN\V201911\AdGroup\AutoAdGroupConversionOptimizer
     */
    public function setEligibilityFlg($eligibilityFlg)
    {
      $this->eligibilityFlg = $eligibilityFlg;
      return $this;
    }

}
