<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupLabel;

class AdGroupLabelReturnValue extends \Jp\YahooApis\YDN\V201911\ListReturnValue
{

    /**
     * @var AdGroupLabelValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroupLabelValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AdGroupLabelValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\AdGroupLabel\AdGroupLabelReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
