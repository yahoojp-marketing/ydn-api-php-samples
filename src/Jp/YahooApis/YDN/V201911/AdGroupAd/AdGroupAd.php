<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupAd;

class AdGroupAd
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var string $adGroupName
     */
    protected $adGroupName = null;

    /**
     * @var int $adId
     */
    protected $adId = null;

    /**
     * @var string $adName
     */
    protected $adName = null;

    /**
     * @var AdStyle $adStyle
     */
    protected $adStyle = null;

    /**
     * @var int $mediaId
     */
    protected $mediaId = null;

    /**
     * @var UserStatus $userStatus
     */
    protected $userStatus = null;

    /**
     * @var ApprovalStatus $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var string[] $disapprovalReasonCodes
     */
    protected $disapprovalReasonCodes = null;

    /**
     * @var AdGroupAdBid $bid
     */
    protected $bid = null;

    /**
     * @var Ad $ad
     */
    protected $ad = null;

    /**
     * @var string[] $impressionBeaconUrls
     */
    protected $impressionBeaconUrls = null;

    /**
     * @var isRemoveFlg $isRemoveBeaconUrls
     */
    protected $isRemoveBeaconUrls = null;

    /**
     * @var Label[] $labels
     */
    protected $labels = null;

    /**
     * @var string $thirdPartyTrackingVendor
     */
    protected $thirdPartyTrackingVendor = null;

    /**
     * @var string $thirdPartyTrackingScriptUrl
     */
    protected $thirdPartyTrackingScriptUrl = null;

    /**
     * @var isRemoveFlg $isRemoveThirdPartyTrackingScriptUrl
     */
    protected $isRemoveThirdPartyTrackingScriptUrl = null;

    /**
     * @param int $accountId
     * @param int $campaignId
     * @param int $adGroupId
     */
    public function __construct($accountId, $campaignId, $adGroupId)
    {
      $this->accountId = $accountId;
      $this->campaignId = $campaignId;
      $this->adGroupId = $adGroupId;
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
      return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setCampaignName($campaignName)
    {
      $this->campaignName = $campaignName;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdGroupName()
    {
      return $this->adGroupName;
    }

    /**
     * @param string $adGroupName
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setAdGroupName($adGroupName)
    {
      $this->adGroupName = $adGroupName;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdId()
    {
      return $this->adId;
    }

    /**
     * @param int $adId
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setAdId($adId)
    {
      $this->adId = $adId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdName()
    {
      return $this->adName;
    }

    /**
     * @param string $adName
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setAdName($adName)
    {
      $this->adName = $adName;
      return $this;
    }

    /**
     * @return AdStyle
     */
    public function getAdStyle()
    {
      return $this->adStyle;
    }

    /**
     * @param AdStyle $adStyle
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setAdStyle($adStyle)
    {
      $this->adStyle = $adStyle;
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setMediaId($mediaId)
    {
      $this->mediaId = $mediaId;
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setUserStatus($userStatus)
    {
      $this->userStatus = $userStatus;
      return $this;
    }

    /**
     * @return ApprovalStatus
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param ApprovalStatus $approvalStatus
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setDisapprovalReasonCodes(array $disapprovalReasonCodes = null)
    {
      $this->disapprovalReasonCodes = $disapprovalReasonCodes;
      return $this;
    }

    /**
     * @return AdGroupAdBid
     */
    public function getBid()
    {
      return $this->bid;
    }

    /**
     * @param AdGroupAdBid $bid
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setBid($bid)
    {
      $this->bid = $bid;
      return $this;
    }

    /**
     * @return Ad
     */
    public function getAd()
    {
      return $this->ad;
    }

    /**
     * @param Ad $ad
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setAd($ad)
    {
      $this->ad = $ad;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getImpressionBeaconUrls()
    {
      return $this->impressionBeaconUrls;
    }

    /**
     * @param string[] $impressionBeaconUrls
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setImpressionBeaconUrls(array $impressionBeaconUrls = null)
    {
      $this->impressionBeaconUrls = $impressionBeaconUrls;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveBeaconUrls()
    {
      return $this->isRemoveBeaconUrls;
    }

    /**
     * @param isRemoveFlg $isRemoveBeaconUrls
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setIsRemoveBeaconUrls($isRemoveBeaconUrls)
    {
      $this->isRemoveBeaconUrls = $isRemoveBeaconUrls;
      return $this;
    }

    /**
     * @return Label[]
     */
    public function getLabels()
    {
      return $this->labels;
    }

    /**
     * @param Label[] $labels
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setLabels(array $labels = null)
    {
      $this->labels = $labels;
      return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyTrackingVendor()
    {
      return $this->thirdPartyTrackingVendor;
    }

    /**
     * @param string $thirdPartyTrackingVendor
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setThirdPartyTrackingVendor($thirdPartyTrackingVendor)
    {
      $this->thirdPartyTrackingVendor = $thirdPartyTrackingVendor;
      return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyTrackingScriptUrl()
    {
      return $this->thirdPartyTrackingScriptUrl;
    }

    /**
     * @param string $thirdPartyTrackingScriptUrl
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setThirdPartyTrackingScriptUrl($thirdPartyTrackingScriptUrl)
    {
      $this->thirdPartyTrackingScriptUrl = $thirdPartyTrackingScriptUrl;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveThirdPartyTrackingScriptUrl()
    {
      return $this->isRemoveThirdPartyTrackingScriptUrl;
    }

    /**
     * @param isRemoveFlg $isRemoveThirdPartyTrackingScriptUrl
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd
     */
    public function setIsRemoveThirdPartyTrackingScriptUrl($isRemoveThirdPartyTrackingScriptUrl)
    {
      $this->isRemoveThirdPartyTrackingScriptUrl = $isRemoveThirdPartyTrackingScriptUrl;
      return $this;
    }

}
