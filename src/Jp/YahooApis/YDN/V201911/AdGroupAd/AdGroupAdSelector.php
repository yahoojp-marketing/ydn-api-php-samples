<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupAd;

class AdGroupAdSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $campaignIds
     */
    protected $campaignIds = null;

    /**
     * @var long[] $adGroupIds
     */
    protected $adGroupIds = null;

    /**
     * @var long[] $adIds
     */
    protected $adIds = null;

    /**
     * @var long[] $mediaIds
     */
    protected $mediaIds = null;

    /**
     * @var long[] $labelIds
     */
    protected $labelIds = null;

    /**
     * @var boolean $containsLabelIdFlg
     */
    protected $containsLabelIdFlg = null;

    /**
     * @var UserStatus[] $userStatuses
     */
    protected $userStatuses = null;

    /**
     * @var ApprovalStatus[] $approvalStatuses
     */
    protected $approvalStatuses = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Paging $paging
     */
    protected $paging = null;

    /**
     * @var CampaignGoalFilterType $campaignGoalFilterType
     */
    protected $campaignGoalFilterType = null;

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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCampaignIds()
    {
      return $this->campaignIds;
    }

    /**
     * @param long[] $campaignIds
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector
     */
    public function setCampaignIds(array $campaignIds = null)
    {
      $this->campaignIds = $campaignIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAdGroupIds()
    {
      return $this->adGroupIds;
    }

    /**
     * @param long[] $adGroupIds
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector
     */
    public function setAdGroupIds(array $adGroupIds = null)
    {
      $this->adGroupIds = $adGroupIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAdIds()
    {
      return $this->adIds;
    }

    /**
     * @param long[] $adIds
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector
     */
    public function setAdIds(array $adIds = null)
    {
      $this->adIds = $adIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getMediaIds()
    {
      return $this->mediaIds;
    }

    /**
     * @param long[] $mediaIds
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector
     */
    public function setMediaIds(array $mediaIds = null)
    {
      $this->mediaIds = $mediaIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getLabelIds()
    {
      return $this->labelIds;
    }

    /**
     * @param long[] $labelIds
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector
     */
    public function setLabelIds(array $labelIds = null)
    {
      $this->labelIds = $labelIds;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getContainsLabelIdFlg()
    {
      return $this->containsLabelIdFlg;
    }

    /**
     * @param boolean $containsLabelIdFlg
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector
     */
    public function setContainsLabelIdFlg($containsLabelIdFlg)
    {
      $this->containsLabelIdFlg = $containsLabelIdFlg;
      return $this;
    }

    /**
     * @return UserStatus[]
     */
    public function getUserStatuses()
    {
      return $this->userStatuses;
    }

    /**
     * @param UserStatus[] $userStatuses
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector
     */
    public function setUserStatuses(array $userStatuses = null)
    {
      $this->userStatuses = $userStatuses;
      return $this;
    }

    /**
     * @return ApprovalStatus[]
     */
    public function getApprovalStatuses()
    {
      return $this->approvalStatuses;
    }

    /**
     * @param ApprovalStatus[] $approvalStatuses
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector
     */
    public function setApprovalStatuses(array $approvalStatuses = null)
    {
      $this->approvalStatuses = $approvalStatuses;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201911\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201911\Paging $paging
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

    /**
     * @return CampaignGoalFilterType
     */
    public function getCampaignGoalFilterType()
    {
      return $this->campaignGoalFilterType;
    }

    /**
     * @param CampaignGoalFilterType $campaignGoalFilterType
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector
     */
    public function setCampaignGoalFilterType($campaignGoalFilterType)
    {
      $this->campaignGoalFilterType = $campaignGoalFilterType;
      return $this;
    }

}
