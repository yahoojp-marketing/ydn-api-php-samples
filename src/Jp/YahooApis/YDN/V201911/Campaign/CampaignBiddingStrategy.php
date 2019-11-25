<?php

namespace Jp\YahooApis\YDN\V201911\Campaign;

class CampaignBiddingStrategy
{

    /**
     * @var CampaignBiddingStrategyType $type
     */
    protected $type = null;

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

    /**
     * @param CampaignBiddingStrategyType $type
     */
    public function __construct($type)
    {
      $this->type = $type;
    }

    /**
     * @return CampaignBiddingStrategyType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CampaignBiddingStrategyType $type
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignBiddingStrategy
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignBiddingStrategy
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignBiddingStrategy
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignBiddingStrategy
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
     * @return \Jp\YahooApis\YDN\V201911\Campaign\CampaignBiddingStrategy
     */
    public function setTargetCpaBidValue($targetCpaBidValue)
    {
      $this->targetCpaBidValue = $targetCpaBidValue;
      return $this;
    }

}
