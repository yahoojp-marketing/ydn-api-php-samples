<?php

namespace Jp\YahooApis\YDN\V201903\Bulk;

class ProcessingItemsCount
{

    /**
     * @var int $campaignCount
     */
    protected $campaignCount = null;

    /**
     * @var int $adGroupCount
     */
    protected $adGroupCount = null;

    /**
     * @var int $adGroupAdCount
     */
    protected $adGroupAdCount = null;

    /**
     * @var int $adGroupTargetCount
     */
    protected $adGroupTargetCount = null;

    /**
     * @var int $mediaCount
     */
    protected $mediaCount = null;

    /**
     * @var int $videoCount
     */
    protected $videoCount = null;

    /**
     * @var int $campaignErrorCount
     */
    protected $campaignErrorCount = null;

    /**
     * @var int $adGroupErrorCount
     */
    protected $adGroupErrorCount = null;

    /**
     * @var int $adGroupAdErrorCount
     */
    protected $adGroupAdErrorCount = null;

    /**
     * @var int $adGroupTargetErrorCount
     */
    protected $adGroupTargetErrorCount = null;

    /**
     * @var int $mediaErrorCount
     */
    protected $mediaErrorCount = null;

    /**
     * @var int $videoErrorCount
     */
    protected $videoErrorCount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCampaignCount()
    {
      return $this->campaignCount;
    }

    /**
     * @param int $campaignCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setCampaignCount($campaignCount)
    {
      $this->campaignCount = $campaignCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupCount()
    {
      return $this->adGroupCount;
    }

    /**
     * @param int $adGroupCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setAdGroupCount($adGroupCount)
    {
      $this->adGroupCount = $adGroupCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupAdCount()
    {
      return $this->adGroupAdCount;
    }

    /**
     * @param int $adGroupAdCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setAdGroupAdCount($adGroupAdCount)
    {
      $this->adGroupAdCount = $adGroupAdCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupTargetCount()
    {
      return $this->adGroupTargetCount;
    }

    /**
     * @param int $adGroupTargetCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setAdGroupTargetCount($adGroupTargetCount)
    {
      $this->adGroupTargetCount = $adGroupTargetCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getMediaCount()
    {
      return $this->mediaCount;
    }

    /**
     * @param int $mediaCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setMediaCount($mediaCount)
    {
      $this->mediaCount = $mediaCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoCount()
    {
      return $this->videoCount;
    }

    /**
     * @param int $videoCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setVideoCount($videoCount)
    {
      $this->videoCount = $videoCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignErrorCount()
    {
      return $this->campaignErrorCount;
    }

    /**
     * @param int $campaignErrorCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setCampaignErrorCount($campaignErrorCount)
    {
      $this->campaignErrorCount = $campaignErrorCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupErrorCount()
    {
      return $this->adGroupErrorCount;
    }

    /**
     * @param int $adGroupErrorCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setAdGroupErrorCount($adGroupErrorCount)
    {
      $this->adGroupErrorCount = $adGroupErrorCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupAdErrorCount()
    {
      return $this->adGroupAdErrorCount;
    }

    /**
     * @param int $adGroupAdErrorCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setAdGroupAdErrorCount($adGroupAdErrorCount)
    {
      $this->adGroupAdErrorCount = $adGroupAdErrorCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupTargetErrorCount()
    {
      return $this->adGroupTargetErrorCount;
    }

    /**
     * @param int $adGroupTargetErrorCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setAdGroupTargetErrorCount($adGroupTargetErrorCount)
    {
      $this->adGroupTargetErrorCount = $adGroupTargetErrorCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getMediaErrorCount()
    {
      return $this->mediaErrorCount;
    }

    /**
     * @param int $mediaErrorCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setMediaErrorCount($mediaErrorCount)
    {
      $this->mediaErrorCount = $mediaErrorCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoErrorCount()
    {
      return $this->videoErrorCount;
    }

    /**
     * @param int $videoErrorCount
     * @return \Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount
     */
    public function setVideoErrorCount($videoErrorCount)
    {
      $this->videoErrorCount = $videoErrorCount;
      return $this;
    }

}
