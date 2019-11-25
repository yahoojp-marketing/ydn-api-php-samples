<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupTarget;

class AdGroupTargetReturnValue extends \Jp\YahooApis\YDN\V201911\ListReturnValue
{

    /**
     * @var AdGroupTargetValue[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroupTargetValue[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AdGroupTargetValue[] $values
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AdGroupTargetReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
