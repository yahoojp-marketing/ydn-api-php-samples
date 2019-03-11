<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupAd;

class ResponsiveAd extends Ad
{

    /**
     * @var string $headline
     */
    protected $headline = null;

    /**
     * @var string $description
     */
    protected $description = null;

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

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\ResponsiveAd
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\ResponsiveAd
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\ResponsiveAd
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\ResponsiveAd
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\ResponsiveAd
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\ResponsiveAd
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupAd\ResponsiveAd
     */
    public function setLogoMediaId($logoMediaId)
    {
      $this->logoMediaId = $logoMediaId;
      return $this;
    }

}
