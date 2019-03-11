<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupAd;

class DynamicAd extends Ad
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
     * @var ButtonText $buttonText
     */
    protected $buttonText = null;

    /**
     * @var string $principal
     */
    protected $principal = null;

    /**
     * @var int $logoMediaId
     */
    protected $logoMediaId = null;

    /**
     * @var int $logoMediaId2
     */
    protected $logoMediaId2 = null;

    /**
     * @var int $logoMediaId3
     */
    protected $logoMediaId3 = null;

    /**
     * @var string $prefix
     */
    protected $prefix = null;

    /**
     * @var string $suffix
     */
    protected $suffix = null;

    /**
     * @var string $brandColor
     */
    protected $brandColor = null;

    
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\DynamicAd
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\DynamicAd
     */
    public function setDisplayUrl($displayUrl)
    {
      $this->displayUrl = $displayUrl;
      return $this;
    }

    /**
     * @return ButtonText
     */
    public function getButtonText()
    {
      return $this->buttonText;
    }

    /**
     * @param ButtonText $buttonText
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\DynamicAd
     */
    public function setButtonText($buttonText)
    {
      $this->buttonText = $buttonText;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrincipal()
    {
      return $this->principal;
    }

    /**
     * @param string $principal
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\DynamicAd
     */
    public function setPrincipal($principal)
    {
      $this->principal = $principal;
      return $this;
    }

    /**
     * @return int
     */
    public function getLogoMediaId()
    {
      return $this->logoMediaId;
    }

    /**
     * @param int $logoMediaId
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\DynamicAd
     */
    public function setLogoMediaId($logoMediaId)
    {
      $this->logoMediaId = $logoMediaId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLogoMediaId2()
    {
      return $this->logoMediaId2;
    }

    /**
     * @param int $logoMediaId2
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\DynamicAd
     */
    public function setLogoMediaId2($logoMediaId2)
    {
      $this->logoMediaId2 = $logoMediaId2;
      return $this;
    }

    /**
     * @return int
     */
    public function getLogoMediaId3()
    {
      return $this->logoMediaId3;
    }

    /**
     * @param int $logoMediaId3
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\DynamicAd
     */
    public function setLogoMediaId3($logoMediaId3)
    {
      $this->logoMediaId3 = $logoMediaId3;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
      return $this->prefix;
    }

    /**
     * @param string $prefix
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\DynamicAd
     */
    public function setPrefix($prefix)
    {
      $this->prefix = $prefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
      return $this->suffix;
    }

    /**
     * @param string $suffix
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\DynamicAd
     */
    public function setSuffix($suffix)
    {
      $this->suffix = $suffix;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandColor()
    {
      return $this->brandColor;
    }

    /**
     * @param string $brandColor
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\DynamicAd
     */
    public function setBrandColor($brandColor)
    {
      $this->brandColor = $brandColor;
      return $this;
    }

}
