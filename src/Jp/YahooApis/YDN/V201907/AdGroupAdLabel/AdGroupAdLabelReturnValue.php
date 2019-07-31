<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupAdLabel;

class AdGroupAdLabelReturnValue extends \Jp\YahooApis\YDN\V201907\ListReturnValue
{

    /**
     * @var AdGroupAdLabelValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroupAdLabelValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AdGroupAdLabelValues[] $values
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAdLabel\AdGroupAdLabelReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
