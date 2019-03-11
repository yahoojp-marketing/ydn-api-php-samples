<?php

namespace Jp\YahooApis\YDN\V201903\AdGroup;

class AdGroupReturnValue extends \Jp\YahooApis\YDN\V201903\ListReturnValue
{

    /**
     * @var AdGroupValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroupValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AdGroupValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroupReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
