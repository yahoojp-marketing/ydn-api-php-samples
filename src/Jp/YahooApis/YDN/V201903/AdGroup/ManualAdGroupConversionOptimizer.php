<?php

namespace Jp\YahooApis\YDN\V201903\AdGroup;

class ManualAdGroupConversionOptimizer extends AdGroupConversionOptimizer
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\ManualAdGroupConversionOptimizer
     */
    public function setEligibilityFlg($eligibilityFlg)
    {
      $this->eligibilityFlg = $eligibilityFlg;
      return $this;
    }

}
