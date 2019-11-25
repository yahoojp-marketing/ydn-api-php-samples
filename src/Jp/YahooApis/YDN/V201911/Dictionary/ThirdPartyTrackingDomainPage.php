<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class ThirdPartyTrackingDomainPage extends \Jp\YahooApis\YDN\V201911\Page
{

    /**
     * @var ThirdPartyTrackingDomainValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ThirdPartyTrackingDomainValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param ThirdPartyTrackingDomainValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\ThirdPartyTrackingDomainPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
