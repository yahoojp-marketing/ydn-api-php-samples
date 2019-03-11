<?php

namespace Jp\YahooApis\YDN\V201903\Campaign;

class CampaignConversionOptimizer
{

    /**
     * @var CampaignConversionOptimizerType $optimizerType
     */
    protected $optimizerType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignConversionOptimizerType
     */
    public function getOptimizerType()
    {
      return $this->optimizerType;
    }

    /**
     * @param CampaignConversionOptimizerType $optimizerType
     * @return \Jp\YahooApis\YDN\V201903\Campaign\CampaignConversionOptimizer
     */
    public function setOptimizerType($optimizerType)
    {
      $this->optimizerType = $optimizerType;
      return $this;
    }

}
