<?php

namespace Jp\YahooApis\YDN\V201903\AdGroup;

class AdGroupSelector
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
     * @var long[] $feedSetIds
     */
    protected $feedSetIds = null;

    /**
     * @var \Jp\YahooApis\YDN\V201903\Paging $paging
     */
    protected $paging = null;

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
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroupSelector
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroupSelector
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroupSelector
     */
    public function setAdGroupIds(array $adGroupIds = null)
    {
      $this->adGroupIds = $adGroupIds;
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroupSelector
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroupSelector
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroupSelector
     */
    public function setUserStatuses(array $userStatuses = null)
    {
      $this->userStatuses = $userStatuses;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getFeedSetIds()
    {
      return $this->feedSetIds;
    }

    /**
     * @param long[] $feedSetIds
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroupSelector
     */
    public function setFeedSetIds(array $feedSetIds = null)
    {
      $this->feedSetIds = $feedSetIds;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201903\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201903\Paging $paging
     * @return \Jp\YahooApis\YDN\V201903\AdGroup\AdGroupSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
