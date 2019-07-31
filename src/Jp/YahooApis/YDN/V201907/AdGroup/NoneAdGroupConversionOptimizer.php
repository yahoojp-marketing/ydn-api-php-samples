<?php

namespace Jp\YahooApis\YDN\V201907\AdGroup;

class NoneAdGroupConversionOptimizer extends AdGroupConversionOptimizer
{

    /**
     * @var ConversionOptimizerEligibilityFlg $eligibilityFlg
     */
    protected $eligibilityFlg = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Jp\YahooApis\YDN\V201907\AdGroup\NoneAdGroupConversionOptimizer
     */
    public function setEligibilityFlg($eligibilityFlg)
    {
      $this->eligibilityFlg = $eligibilityFlg;
      return $this;
    }

}
