<?php

namespace Jp\YahooApis\YDN\V201911\AdGroup;

class AdGroupBiddingStrategy
{

    /**
     * @var CampaignBiddingStrategyType $campaignBiddingStrategyType
     */
    protected $campaignBiddingStrategyType = null;

    /**
     * @var int $maxVcpmBidValue
     */
    protected $maxVcpmBidValue = null;

    /**
     * @var int $maxCpcBidValue
     */
    protected $maxCpcBidValue = null;

    /**
     * @var int $maxCpvBidValue
     */
    protected $maxCpvBidValue = null;

    /**
     * @var int $targetCpaBidValue
     */
    protected $targetCpaBidValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignBiddingStrategyType
     */
    public function getCampaignBiddingStrategyType()
    {
      return $this->campaignBiddingStrategyType;
    }

    /**
     * @param CampaignBiddingStrategyType $campaignBiddingStrategyType
     * @return \Jp\YahooApis\YDN\V201911\AdGroup\AdGroupBiddingStrategy
     */
    public function setCampaignBiddingStrategyType($campaignBiddingStrategyType)
    {
      $this->campaignBiddingStrategyType = $campaignBiddingStrategyType;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxVcpmBidValue()
    {
      return $this->maxVcpmBidValue;
    }

    /**
     * @param int $maxVcpmBidValue
     * @return \Jp\YahooApis\YDN\V201911\AdGroup\AdGroupBiddingStrategy
     */
    public function setMaxVcpmBidValue($maxVcpmBidValue)
    {
      $this->maxVcpmBidValue = $maxVcpmBidValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxCpcBidValue()
    {
      return $this->maxCpcBidValue;
    }

    /**
     * @param int $maxCpcBidValue
     * @return \Jp\YahooApis\YDN\V201911\AdGroup\AdGroupBiddingStrategy
     */
    public function setMaxCpcBidValue($maxCpcBidValue)
    {
      $this->maxCpcBidValue = $maxCpcBidValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxCpvBidValue()
    {
      return $this->maxCpvBidValue;
    }

    /**
     * @param int $maxCpvBidValue
     * @return \Jp\YahooApis\YDN\V201911\AdGroup\AdGroupBiddingStrategy
     */
    public function setMaxCpvBidValue($maxCpvBidValue)
    {
      $this->maxCpvBidValue = $maxCpvBidValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetCpaBidValue()
    {
      return $this->targetCpaBidValue;
    }

    /**
     * @param int $targetCpaBidValue
     * @return \Jp\YahooApis\YDN\V201911\AdGroup\AdGroupBiddingStrategy
     */
    public function setTargetCpaBidValue($targetCpaBidValue)
    {
      $this->targetCpaBidValue = $targetCpaBidValue;
      return $this;
    }

}
