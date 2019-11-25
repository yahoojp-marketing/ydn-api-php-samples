<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupTarget;

class AdGroupTarget
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
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var float $bidMultiplier
     */
    protected $bidMultiplier = null;

    /**
     * @var Target $target
     */
    protected $target = null;

    
    public function __construct()
    {
    
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AdGroupTarget
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AdGroupTarget
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AdGroupTarget
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
      return $this;
    }

    /**
     * @return float
     */
    public function getBidMultiplier()
    {
      return $this->bidMultiplier;
    }

    /**
     * @param float $bidMultiplier
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AdGroupTarget
     */
    public function setBidMultiplier($bidMultiplier)
    {
      $this->bidMultiplier = $bidMultiplier;
      return $this;
    }

    /**
     * @return Target
     */
    public function getTarget()
    {
      return $this->target;
    }

    /**
     * @param Target $target
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AdGroupTarget
     */
    public function setTarget($target)
    {
      $this->target = $target;
      return $this;
    }

}
