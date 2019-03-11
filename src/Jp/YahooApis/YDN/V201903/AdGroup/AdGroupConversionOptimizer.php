<?php

namespace Jp\YahooApis\YDN\V201903\AdGroup;

class AdGroupConversionOptimizer
{

    /**
     * @var AdGroupConversionOptimizerType $optimizerType
     */
    protected $optimizerType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdGroupConversionOptimizerType
     */
    public function getOptimizerType()
    {
      return $this->optimizerType;
    }

    /**
     * @param AdGroupConversionOptimizerType $optimizerType
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroupConversionOptimizer
     */
    public function setOptimizerType($optimizerType)
    {
      $this->optimizerType = $optimizerType;
      return $this;
    }

}
