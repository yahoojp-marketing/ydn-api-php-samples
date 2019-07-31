<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupAd;

class BannerVideoAd extends Ad
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
     * @var int $thumbnailMediaId
     */
    protected $thumbnailMediaId = null;

    /**
     * @var string[] $videoStartBeaconUrls
     */
    protected $videoStartBeaconUrls = null;

    /**
     * @var isRemoveFlg $isRemoveVideoStartBeaconUrls
     */
    protected $isRemoveVideoStartBeaconUrls = null;

    /**
     * @var string[] $video3SecBeaconUrls
     */
    protected $video3SecBeaconUrls = null;

    /**
     * @var isRemoveFlg $isRemoveVideo3SecBeaconUrls
     */
    protected $isRemoveVideo3SecBeaconUrls = null;

    /**
     * @var string[] $videoPaidBeaconUrls
     */
    protected $videoPaidBeaconUrls = null;

    /**
     * @var isRemoveFlg $isRemoveVideoPaidBeaconUrls
     */
    protected $isRemoveVideoPaidBeaconUrls = null;

    /**
     * @var string[] $videoCompleteBeaconUrls
     */
    protected $videoCompleteBeaconUrls = null;

    /**
     * @var isRemoveFlg $isRemoveVideoCompleteBeaconUrls
     */
    protected $isRemoveVideoCompleteBeaconUrls = null;

    
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
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd
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
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd
     */
    public function setDisplayUrl($displayUrl)
    {
      $this->displayUrl = $displayUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getThumbnailMediaId()
    {
      return $this->thumbnailMediaId;
    }

    /**
     * @param int $thumbnailMediaId
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd
     */
    public function setThumbnailMediaId($thumbnailMediaId)
    {
      $this->thumbnailMediaId = $thumbnailMediaId;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getVideoStartBeaconUrls()
    {
      return $this->videoStartBeaconUrls;
    }

    /**
     * @param string[] $videoStartBeaconUrls
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd
     */
    public function setVideoStartBeaconUrls(array $videoStartBeaconUrls = null)
    {
      $this->videoStartBeaconUrls = $videoStartBeaconUrls;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveVideoStartBeaconUrls()
    {
      return $this->isRemoveVideoStartBeaconUrls;
    }

    /**
     * @param isRemoveFlg $isRemoveVideoStartBeaconUrls
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd
     */
    public function setIsRemoveVideoStartBeaconUrls($isRemoveVideoStartBeaconUrls)
    {
      $this->isRemoveVideoStartBeaconUrls = $isRemoveVideoStartBeaconUrls;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getVideo3SecBeaconUrls()
    {
      return $this->video3SecBeaconUrls;
    }

    /**
     * @param string[] $video3SecBeaconUrls
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd
     */
    public function setVideo3SecBeaconUrls(array $video3SecBeaconUrls = null)
    {
      $this->video3SecBeaconUrls = $video3SecBeaconUrls;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveVideo3SecBeaconUrls()
    {
      return $this->isRemoveVideo3SecBeaconUrls;
    }

    /**
     * @param isRemoveFlg $isRemoveVideo3SecBeaconUrls
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd
     */
    public function setIsRemoveVideo3SecBeaconUrls($isRemoveVideo3SecBeaconUrls)
    {
      $this->isRemoveVideo3SecBeaconUrls = $isRemoveVideo3SecBeaconUrls;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getVideoPaidBeaconUrls()
    {
      return $this->videoPaidBeaconUrls;
    }

    /**
     * @param string[] $videoPaidBeaconUrls
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd
     */
    public function setVideoPaidBeaconUrls(array $videoPaidBeaconUrls = null)
    {
      $this->videoPaidBeaconUrls = $videoPaidBeaconUrls;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveVideoPaidBeaconUrls()
    {
      return $this->isRemoveVideoPaidBeaconUrls;
    }

    /**
     * @param isRemoveFlg $isRemoveVideoPaidBeaconUrls
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd
     */
    public function setIsRemoveVideoPaidBeaconUrls($isRemoveVideoPaidBeaconUrls)
    {
      $this->isRemoveVideoPaidBeaconUrls = $isRemoveVideoPaidBeaconUrls;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getVideoCompleteBeaconUrls()
    {
      return $this->videoCompleteBeaconUrls;
    }

    /**
     * @param string[] $videoCompleteBeaconUrls
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd
     */
    public function setVideoCompleteBeaconUrls(array $videoCompleteBeaconUrls = null)
    {
      $this->videoCompleteBeaconUrls = $videoCompleteBeaconUrls;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveVideoCompleteBeaconUrls()
    {
      return $this->isRemoveVideoCompleteBeaconUrls;
    }

    /**
     * @param isRemoveFlg $isRemoveVideoCompleteBeaconUrls
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd
     */
    public function setIsRemoveVideoCompleteBeaconUrls($isRemoveVideoCompleteBeaconUrls)
    {
      $this->isRemoveVideoCompleteBeaconUrls = $isRemoveVideoCompleteBeaconUrls;
      return $this;
    }

}
