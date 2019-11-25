<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class ThirdPartyTrackingDomain
{

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var string $vendor
     */
    protected $vendor = null;

    /**
     * @var string $vendorName
     */
    protected $vendorName = null;

    /**
     * @param string $domain
     * @param string $vendor
     * @param string $vendorName
     */
    public function __construct($domain, $vendor, $vendorName)
    {
      $this->domain = $domain;
      $this->vendor = $vendor;
      $this->vendorName = $vendorName;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
      return $this->domain;
    }

    /**
     * @param string $domain
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\ThirdPartyTrackingDomain
     */
    public function setDomain($domain)
    {
      $this->domain = $domain;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param string $vendor
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\ThirdPartyTrackingDomain
     */
    public function setVendor($vendor)
    {
      $this->vendor = $vendor;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorName()
    {
      return $this->vendorName;
    }

    /**
     * @param string $vendorName
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\ThirdPartyTrackingDomain
     */
    public function setVendorName($vendorName)
    {
      $this->vendorName = $vendorName;
      return $this;
    }

}
