<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class ThirdPartyTrackingDomainValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var ThirdPartyTrackingDomain[] $thirdPartyTrackingDomain
     */
    protected $thirdPartyTrackingDomain = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ThirdPartyTrackingDomain[]
     */
    public function getThirdPartyTrackingDomain()
    {
      return $this->thirdPartyTrackingDomain;
    }

    /**
     * @param ThirdPartyTrackingDomain[] $thirdPartyTrackingDomain
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\ThirdPartyTrackingDomainValues
     */
    public function setThirdPartyTrackingDomain(array $thirdPartyTrackingDomain = null)
    {
      $this->thirdPartyTrackingDomain = $thirdPartyTrackingDomain;
      return $this;
    }

}
