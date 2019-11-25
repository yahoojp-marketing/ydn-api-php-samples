<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupAd;

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

    /**
     * @var string $campaignBannerUrl
     */
    protected $campaignBannerUrl = null;

    /**
     * @var isRemoveFlg $isRemoveCampaignBannerUrl
     */
    protected $isRemoveCampaignBannerUrl = null;

    /**
     * @var int $campaignBannerMediaId
     */
    protected $campaignBannerMediaId = null;

    /**
     * @var isRemoveFlg $isRemoveCampaignBannerMediaId
     */
    protected $isRemoveCampaignBannerMediaId = null;

    /**
     * @var int $campaignBannerMediaId2
     */
    protected $campaignBannerMediaId2 = null;

    /**
     * @var isRemoveFlg $isRemoveCampaignBannerMediaId2
     */
    protected $isRemoveCampaignBannerMediaId2 = null;

    /**
     * @var int $campaignBannerMediaId3
     */
    protected $campaignBannerMediaId3 = null;

    /**
     * @var isRemoveFlg $isRemoveCampaignBannerMediaId3
     */
    protected $isRemoveCampaignBannerMediaId3 = null;

    /**
     * @var int $campaignBannerMediaId4
     */
    protected $campaignBannerMediaId4 = null;

    /**
     * @var isRemoveFlg $isRemoveCampaignBannerMediaId4
     */
    protected $isRemoveCampaignBannerMediaId4 = null;

    
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
     */
    public function setBrandColor($brandColor)
    {
      $this->brandColor = $brandColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignBannerUrl()
    {
      return $this->campaignBannerUrl;
    }

    /**
     * @param string $campaignBannerUrl
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
     */
    public function setCampaignBannerUrl($campaignBannerUrl)
    {
      $this->campaignBannerUrl = $campaignBannerUrl;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveCampaignBannerUrl()
    {
      return $this->isRemoveCampaignBannerUrl;
    }

    /**
     * @param isRemoveFlg $isRemoveCampaignBannerUrl
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
     */
    public function setIsRemoveCampaignBannerUrl($isRemoveCampaignBannerUrl)
    {
      $this->isRemoveCampaignBannerUrl = $isRemoveCampaignBannerUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignBannerMediaId()
    {
      return $this->campaignBannerMediaId;
    }

    /**
     * @param int $campaignBannerMediaId
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
     */
    public function setCampaignBannerMediaId($campaignBannerMediaId)
    {
      $this->campaignBannerMediaId = $campaignBannerMediaId;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveCampaignBannerMediaId()
    {
      return $this->isRemoveCampaignBannerMediaId;
    }

    /**
     * @param isRemoveFlg $isRemoveCampaignBannerMediaId
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
     */
    public function setIsRemoveCampaignBannerMediaId($isRemoveCampaignBannerMediaId)
    {
      $this->isRemoveCampaignBannerMediaId = $isRemoveCampaignBannerMediaId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignBannerMediaId2()
    {
      return $this->campaignBannerMediaId2;
    }

    /**
     * @param int $campaignBannerMediaId2
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
     */
    public function setCampaignBannerMediaId2($campaignBannerMediaId2)
    {
      $this->campaignBannerMediaId2 = $campaignBannerMediaId2;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveCampaignBannerMediaId2()
    {
      return $this->isRemoveCampaignBannerMediaId2;
    }

    /**
     * @param isRemoveFlg $isRemoveCampaignBannerMediaId2
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
     */
    public function setIsRemoveCampaignBannerMediaId2($isRemoveCampaignBannerMediaId2)
    {
      $this->isRemoveCampaignBannerMediaId2 = $isRemoveCampaignBannerMediaId2;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignBannerMediaId3()
    {
      return $this->campaignBannerMediaId3;
    }

    /**
     * @param int $campaignBannerMediaId3
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
     */
    public function setCampaignBannerMediaId3($campaignBannerMediaId3)
    {
      $this->campaignBannerMediaId3 = $campaignBannerMediaId3;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveCampaignBannerMediaId3()
    {
      return $this->isRemoveCampaignBannerMediaId3;
    }

    /**
     * @param isRemoveFlg $isRemoveCampaignBannerMediaId3
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
     */
    public function setIsRemoveCampaignBannerMediaId3($isRemoveCampaignBannerMediaId3)
    {
      $this->isRemoveCampaignBannerMediaId3 = $isRemoveCampaignBannerMediaId3;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignBannerMediaId4()
    {
      return $this->campaignBannerMediaId4;
    }

    /**
     * @param int $campaignBannerMediaId4
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
     */
    public function setCampaignBannerMediaId4($campaignBannerMediaId4)
    {
      $this->campaignBannerMediaId4 = $campaignBannerMediaId4;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveCampaignBannerMediaId4()
    {
      return $this->isRemoveCampaignBannerMediaId4;
    }

    /**
     * @param isRemoveFlg $isRemoveCampaignBannerMediaId4
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd
     */
    public function setIsRemoveCampaignBannerMediaId4($isRemoveCampaignBannerMediaId4)
    {
      $this->isRemoveCampaignBannerMediaId4 = $isRemoveCampaignBannerMediaId4;
      return $this;
    }

}
