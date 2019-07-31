<?php

namespace Jp\YahooApis\YDN\V201907\Campaign;

class AutoCampaignConversionOptimizer extends CampaignConversionOptimizer
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
     * @return \Jp\YahooApis\YDN\V201907\Campaign\AutoCampaignConversionOptimizer
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
     * @return \Jp\YahooApis\YDN\V201907\Campaign\AutoCampaignConversionOptimizer
     */
    public function setEligibilityFlg($eligibilityFlg)
    {
      $this->eligibilityFlg = $eligibilityFlg;
      return $this;
    }

}
