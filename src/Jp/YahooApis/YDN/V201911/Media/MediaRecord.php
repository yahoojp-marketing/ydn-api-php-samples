<?php

namespace Jp\YahooApis\YDN\V201911\Media;

class MediaRecord
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $mediaId
     */
    protected $mediaId = null;

    /**
     * @var string $mediaName
     */
    protected $mediaName = null;

    /**
     * @var string $mediaTitle
     */
    protected $mediaTitle = null;

    /**
     * @var UserStatus $userStatus
     */
    protected $userStatus = null;

    /**
     * @var LogoFlg $logoFlg
     */
    protected $logoFlg = null;

    /**
     * @var ThumbnailFlg $thumbnailFlg
     */
    protected $thumbnailFlg = null;

    /**
     * @var string $creationTime
     */
    protected $creationTime = null;

    /**
     * @var MediaApprovalStatus $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var string[] $disapprovalReasonCodes
     */
    protected $disapprovalReasonCodes = null;

    /**
     * @var Media $media
     */
    protected $media = null;

    /**
     * @var CampaignBannerFlg $campaignBannerFlg
     */
    protected $campaignBannerFlg = null;

    /**
     * @param int $accountId
     */
    public function __construct($accountId)
    {
      $this->accountId = $accountId;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getMediaId()
    {
      return $this->mediaId;
    }

    /**
     * @param int $mediaId
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setMediaId($mediaId)
    {
      $this->mediaId = $mediaId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaName()
    {
      return $this->mediaName;
    }

    /**
     * @param string $mediaName
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setMediaName($mediaName)
    {
      $this->mediaName = $mediaName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaTitle()
    {
      return $this->mediaTitle;
    }

    /**
     * @param string $mediaTitle
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setMediaTitle($mediaTitle)
    {
      $this->mediaTitle = $mediaTitle;
      return $this;
    }

    /**
     * @return UserStatus
     */
    public function getUserStatus()
    {
      return $this->userStatus;
    }

    /**
     * @param UserStatus $userStatus
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setUserStatus($userStatus)
    {
      $this->userStatus = $userStatus;
      return $this;
    }

    /**
     * @return LogoFlg
     */
    public function getLogoFlg()
    {
      return $this->logoFlg;
    }

    /**
     * @param LogoFlg $logoFlg
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setLogoFlg($logoFlg)
    {
      $this->logoFlg = $logoFlg;
      return $this;
    }

    /**
     * @return ThumbnailFlg
     */
    public function getThumbnailFlg()
    {
      return $this->thumbnailFlg;
    }

    /**
     * @param ThumbnailFlg $thumbnailFlg
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setThumbnailFlg($thumbnailFlg)
    {
      $this->thumbnailFlg = $thumbnailFlg;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreationTime()
    {
      return $this->creationTime;
    }

    /**
     * @param string $creationTime
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setCreationTime($creationTime)
    {
      $this->creationTime = $creationTime;
      return $this;
    }

    /**
     * @return MediaApprovalStatus
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param MediaApprovalStatus $approvalStatus
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDisapprovalReasonCodes()
    {
      return $this->disapprovalReasonCodes;
    }

    /**
     * @param string[] $disapprovalReasonCodes
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setDisapprovalReasonCodes(array $disapprovalReasonCodes = null)
    {
      $this->disapprovalReasonCodes = $disapprovalReasonCodes;
      return $this;
    }

    /**
     * @return Media
     */
    public function getMedia()
    {
      return $this->media;
    }

    /**
     * @param Media $media
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setMedia($media)
    {
      $this->media = $media;
      return $this;
    }

    /**
     * @return CampaignBannerFlg
     */
    public function getCampaignBannerFlg()
    {
      return $this->campaignBannerFlg;
    }

    /**
     * @param CampaignBannerFlg $campaignBannerFlg
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaRecord
     */
    public function setCampaignBannerFlg($campaignBannerFlg)
    {
      $this->campaignBannerFlg = $campaignBannerFlg;
      return $this;
    }

}
