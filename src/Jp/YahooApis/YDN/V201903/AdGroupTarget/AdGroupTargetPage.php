<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupTarget;

class AdGroupTargetPage extends \Jp\YahooApis\YDN\V201903\Page
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupTarget\AdGroupTargetPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
