<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupLabel;

class AdGroupLabelReturnValue extends \Jp\YahooApis\YDN\V201907\ListReturnValue
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
     * @return \Jp\YahooApis\YDN\V201907\AdGroupLabel\AdGroupLabelReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
