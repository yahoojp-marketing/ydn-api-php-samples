<?php

namespace Jp\YahooApis\YDN\V201911\Campaign;

class CampaignSelector
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
     * @var long[] $labelIds
     */
    protected $labelIds = null;

    /**
     * @var boolean $containsLabelIdFlg
     */
    protected $containsLabelIdFlg = null;

    /**
     * @var UserStatus[] $userStatus
     */
    protected $userStatus = null;

    /**
     * @var long[] $feedHolderIds
     */
    protected $feedHolderIds = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Paging $paging
     */
    protected $paging = null;

    /**
     * @var CampaignType $campaignType
     */
    protected $campaignType = null;

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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignSelector
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignSelector
     */
    public function setCampaignIds(array $campaignIds = null)
    {
      $this->campaignIds = $campaignIds;
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignSelector
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignSelector
     */
    public function setContainsLabelIdFlg($containsLabelIdFlg)
    {
      $this->containsLabelIdFlg = $containsLabelIdFlg;
      return $this;
    }

    /**
     * @return UserStatus[]
     */
    public function getUserStatus()
    {
      return $this->userStatus;
    }

    /**
     * @param UserStatus[] $userStatus
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignSelector
     */
    public function setUserStatus(array $userStatus = null)
    {
      $this->userStatus = $userStatus;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getFeedHolderIds()
    {
      return $this->feedHolderIds;
    }

    /**
     * @param long[] $feedHolderIds
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignSelector
     */
    public function setFeedHolderIds(array $feedHolderIds = null)
    {
      $this->feedHolderIds = $feedHolderIds;
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

    /**
     * @return CampaignType
     */
    public function getCampaignType()
    {
      return $this->campaignType;
    }

    /**
     * @param CampaignType $campaignType
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignSelector
     */
    public function setCampaignType($campaignType)
    {
      $this->campaignType = $campaignType;
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignSelector
     */
    public function setCampaignGoalFilterType($campaignGoalFilterType)
    {
      $this->campaignGoalFilterType = $campaignGoalFilterType;
      return $this;
    }

}
