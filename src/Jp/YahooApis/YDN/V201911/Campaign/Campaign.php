<?php

namespace Jp\YahooApis\YDN\V201911\Campaign;

class Campaign
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
     * @var UserStatus $userStatus
     */
    protected $userStatus = null;

    /**
     * @var CampaignServingStatus $servingStatus
     */
    protected $servingStatus = null;

    /**
     * @var string $startDate
     */
    protected $startDate = null;

    /**
     * @var string $endDate
     */
    protected $endDate = null;

    /**
     * @var Budget $budget
     */
    protected $budget = null;

    /**
     * @var BiddingStrategy $biddingStrategy
     */
    protected $biddingStrategy = null;

    /**
     * @var string $adProductType
     */
    protected $adProductType = null;

    /**
     * @var FrequencyCap $frequencyCap
     */
    protected $frequencyCap = null;

    /**
     * @var CampaignConversionOptimizer $conversionOptimizer
     */
    protected $conversionOptimizer = null;

    /**
     * @var CampaignType $campaignType
     */
    protected $campaignType = null;

    /**
     * @var string $appName
     */
    protected $appName = null;

    /**
     * @var string $appId
     */
    protected $appId = null;

    /**
     * @var DeviceOsType $appOs
     */
    protected $appOs = null;

    /**
     * @var Label[] $labels
     */
    protected $labels = null;

    /**
     * @var int $feedHolderId
     */
    protected $feedHolderId = null;

    /**
     * @var string $campaignGoal
     */
    protected $campaignGoal = null;

    /**
     * @var CampaignBiddingStrategy $campaignBiddingStrategy
     */
    protected $campaignBiddingStrategy = null;

    /**
     * @var ViewableFrequencyCap $viewableFrequencyCap
     */
    protected $viewableFrequencyCap = null;

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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setCampaignName($campaignName)
    {
      $this->campaignName = $campaignName;
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setUserStatus($userStatus)
    {
      $this->userStatus = $userStatus;
      return $this;
    }

    /**
     * @return CampaignServingStatus
     */
    public function getServingStatus()
    {
      return $this->servingStatus;
    }

    /**
     * @param CampaignServingStatus $servingStatus
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setServingStatus($servingStatus)
    {
      $this->servingStatus = $servingStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return Budget
     */
    public function getBudget()
    {
      return $this->budget;
    }

    /**
     * @param Budget $budget
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setBudget($budget)
    {
      $this->budget = $budget;
      return $this;
    }

    /**
     * @return BiddingStrategy
     */
    public function getBiddingStrategy()
    {
      return $this->biddingStrategy;
    }

    /**
     * @param BiddingStrategy $biddingStrategy
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setBiddingStrategy($biddingStrategy)
    {
      $this->biddingStrategy = $biddingStrategy;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdProductType()
    {
      return $this->adProductType;
    }

    /**
     * @param string $adProductType
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setAdProductType($adProductType)
    {
      $this->adProductType = $adProductType;
      return $this;
    }

    /**
     * @return FrequencyCap
     */
    public function getFrequencyCap()
    {
      return $this->frequencyCap;
    }

    /**
     * @param FrequencyCap $frequencyCap
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setFrequencyCap($frequencyCap)
    {
      $this->frequencyCap = $frequencyCap;
      return $this;
    }

    /**
     * @return CampaignConversionOptimizer
     */
    public function getConversionOptimizer()
    {
      return $this->conversionOptimizer;
    }

    /**
     * @param CampaignConversionOptimizer $conversionOptimizer
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setConversionOptimizer($conversionOptimizer)
    {
      $this->conversionOptimizer = $conversionOptimizer;
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setCampaignType($campaignType)
    {
      $this->campaignType = $campaignType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppName()
    {
      return $this->appName;
    }

    /**
     * @param string $appName
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setAppName($appName)
    {
      $this->appName = $appName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
      return $this->appId;
    }

    /**
     * @param string $appId
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setAppId($appId)
    {
      $this->appId = $appId;
      return $this;
    }

    /**
     * @return DeviceOsType
     */
    public function getAppOs()
    {
      return $this->appOs;
    }

    /**
     * @param DeviceOsType $appOs
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setAppOs($appOs)
    {
      $this->appOs = $appOs;
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setLabels(array $labels = null)
    {
      $this->labels = $labels;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedHolderId()
    {
      return $this->feedHolderId;
    }

    /**
     * @param int $feedHolderId
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setFeedHolderId($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignGoal()
    {
      return $this->campaignGoal;
    }

    /**
     * @param string $campaignGoal
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setCampaignGoal($campaignGoal)
    {
      $this->campaignGoal = $campaignGoal;
      return $this;
    }

    /**
     * @return CampaignBiddingStrategy
     */
    public function getCampaignBiddingStrategy()
    {
      return $this->campaignBiddingStrategy;
    }

    /**
     * @param CampaignBiddingStrategy $campaignBiddingStrategy
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setCampaignBiddingStrategy($campaignBiddingStrategy)
    {
      $this->campaignBiddingStrategy = $campaignBiddingStrategy;
      return $this;
    }

    /**
     * @return ViewableFrequencyCap
     */
    public function getViewableFrequencyCap()
    {
      return $this->viewableFrequencyCap;
    }

    /**
     * @param ViewableFrequencyCap $viewableFrequencyCap
     * @return \Jp\YahooApis\YDN\V201911\Campaign\Campaign
     */
    public function setViewableFrequencyCap($viewableFrequencyCap)
    {
      $this->viewableFrequencyCap = $viewableFrequencyCap;
      return $this;
    }

}
