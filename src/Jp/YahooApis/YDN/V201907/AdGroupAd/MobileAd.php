<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupAd;

class MobileAd extends Ad
{

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $displayUrl
     */
    protected $displayUrl = null;

    /**
     * @var string $headline
     */
    protected $headline = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $description2
     */
    protected $description2 = null;

    /**
     * @var CarrierName[] $mobileCarriers
     */
    protected $mobileCarriers = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\MobileAd
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayUrl()
    {
      return $this->displayUrl;
    }

    /**
     * @param string $displayUrl
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\MobileAd
     */
    public function setDisplayUrl($displayUrl)
    {
      $this->displayUrl = $displayUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
      return $this->headline;
    }

    /**
     * @param string $headline
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\MobileAd
     */
    public function setHeadline($headline)
    {
      $this->headline = $headline;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\MobileAd
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription2()
    {
      return $this->description2;
    }

    /**
     * @param string $description2
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\MobileAd
     */
    public function setDescription2($description2)
    {
      $this->description2 = $description2;
      return $this;
    }

    /**
     * @return CarrierName[]
     */
    public function getMobileCarriers()
    {
      return $this->mobileCarriers;
    }

    /**
     * @param CarrierName[] $mobileCarriers
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\MobileAd
     */
    public function setMobileCarriers(array $mobileCarriers = null)
    {
      $this->mobileCarriers = $mobileCarriers;
      return $this;
    }

}
