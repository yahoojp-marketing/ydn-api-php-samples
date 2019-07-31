<?php

namespace Jp\YahooApis\YDN\V201907\ConversionTracker;

class ConversionTrackerReturnValue extends \Jp\YahooApis\YDN\V201907\ListReturnValue
{

    /**
     * @var ConversionTrackerValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ConversionTrackerValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param ConversionTrackerValues[] $values
     * @return \Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
