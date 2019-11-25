<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class Stats
{

    /**
     * @var int $imps
     */
    protected $imps = null;

    /**
     * @var float $clickRate
     */
    protected $clickRate = null;

    /**
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var int $clickCnt
     */
    protected $clickCnt = null;

    /**
     * @var float $avgCpc
     */
    protected $avgCpc = null;

    /**
     * @var int $conversions
     */
    protected $conversions = null;

    /**
     * @var float $conversionRate
     */
    protected $conversionRate = null;

    /**
     * @var string $cpa
     */
    protected $cpa = null;

    /**
     * @var string $conversionValue
     */
    protected $conversionValue = null;

    /**
     * @var string $valuePerConversions
     */
    protected $valuePerConversions = null;

    /**
     * @var int $conversionsViaAdClick
     */
    protected $conversionsViaAdClick = null;

    /**
     * @var float $conversionRateViaAdClick
     */
    protected $conversionRateViaAdClick = null;

    /**
     * @var string $cpaViaAdClick
     */
    protected $cpaViaAdClick = null;

    /**
     * @var string $conversionValueViaAdClick
     */
    protected $conversionValueViaAdClick = null;

    /**
     * @var string $valuePerConversionsViaAdClick
     */
    protected $valuePerConversionsViaAdClick = null;

    /**
     * @var int $allConversions
     */
    protected $allConversions = null;

    /**
     * @var float $allConversionRate
     */
    protected $allConversionRate = null;

    /**
     * @var string $allCpa
     */
    protected $allCpa = null;

    /**
     * @var string $allConversionValue
     */
    protected $allConversionValue = null;

    /**
     * @var string $valuePerAllConversions
     */
    protected $valuePerAllConversions = null;

    /**
     * @var int $crossDeviceConversions
     */
    protected $crossDeviceConversions = null;

    /**
     * @var float $avgDeliverRank
     */
    protected $avgDeliverRank = null;

    /**
     * @var int $totalVimps
     */
    protected $totalVimps = null;

    /**
     * @var int $vImps
     */
    protected $vImps = null;

    /**
     * @var int $inViewClickCnt
     */
    protected $inViewClickCnt = null;

    /**
     * @var float $inViewRate
     */
    protected $inViewRate = null;

    /**
     * @var float $inViewClickRate
     */
    protected $inViewClickRate = null;

    /**
     * @var int $paidVideoViews
     */
    protected $paidVideoViews = null;

    /**
     * @var float $paidVideoViewRate
     */
    protected $paidVideoViewRate = null;

    /**
     * @var float $averageCpv
     */
    protected $averageCpv = null;

    /**
     * @var int $videoViews
     */
    protected $videoViews = null;

    /**
     * @var int $videoViewsTo25
     */
    protected $videoViewsTo25 = null;

    /**
     * @var int $videoViewsTo50
     */
    protected $videoViewsTo50 = null;

    /**
     * @var int $videoViewsTo75
     */
    protected $videoViewsTo75 = null;

    /**
     * @var int $videoViewsTo95
     */
    protected $videoViewsTo95 = null;

    /**
     * @var int $videoViewsTo100
     */
    protected $videoViewsTo100 = null;

    /**
     * @var int $videoViewsTo3Sec
     */
    protected $videoViewsTo3Sec = null;

    /**
     * @var float $averageRateVideoViewed
     */
    protected $averageRateVideoViewed = null;

    /**
     * @var float $averageDurationVideoViewed
     */
    protected $averageDurationVideoViewed = null;

    /**
     * @var float $convValuePerCost
     */
    protected $convValuePerCost = null;

    /**
     * @var float $allConvValuePerCost
     */
    protected $allConvValuePerCost = null;

    /**
     * @var float $convValueViaAdClickPerCost
     */
    protected $convValueViaAdClickPerCost = null;

    /**
     * @var float $impsPrev
     */
    protected $impsPrev = null;

    /**
     * @var float $clickRatePrev
     */
    protected $clickRatePrev = null;

    /**
     * @var float $measuredImps
     */
    protected $measuredImps = null;

    /**
     * @var float $viewableImpsRate
     */
    protected $viewableImpsRate = null;

    /**
     * @var float $viewableClicks
     */
    protected $viewableClicks = null;

    /**
     * @var float $measuredImpsRate
     */
    protected $measuredImpsRate = null;

    /**
     * @var float $viewableClickRate
     */
    protected $viewableClickRate = null;

    /**
     * @var int $videoViewsTo10Sec
     */
    protected $videoViewsTo10Sec = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getImps()
    {
      return $this->imps;
    }

    /**
     * @param int $imps
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setImps($imps)
    {
      $this->imps = $imps;
      return $this;
    }

    /**
     * @return float
     */
    public function getClickRate()
    {
      return $this->clickRate;
    }

    /**
     * @param float $clickRate
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setClickRate($clickRate)
    {
      $this->clickRate = $clickRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param float $cost
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return int
     */
    public function getClickCnt()
    {
      return $this->clickCnt;
    }

    /**
     * @param int $clickCnt
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setClickCnt($clickCnt)
    {
      $this->clickCnt = $clickCnt;
      return $this;
    }

    /**
     * @return float
     */
    public function getAvgCpc()
    {
      return $this->avgCpc;
    }

    /**
     * @param float $avgCpc
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setAvgCpc($avgCpc)
    {
      $this->avgCpc = $avgCpc;
      return $this;
    }

    /**
     * @return int
     */
    public function getConversions()
    {
      return $this->conversions;
    }

    /**
     * @param int $conversions
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setConversions($conversions)
    {
      $this->conversions = $conversions;
      return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate()
    {
      return $this->conversionRate;
    }

    /**
     * @param float $conversionRate
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setConversionRate($conversionRate)
    {
      $this->conversionRate = $conversionRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCpa()
    {
      return $this->cpa;
    }

    /**
     * @param string $cpa
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setCpa($cpa)
    {
      $this->cpa = $cpa;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionValue()
    {
      return $this->conversionValue;
    }

    /**
     * @param string $conversionValue
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setConversionValue($conversionValue)
    {
      $this->conversionValue = $conversionValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getValuePerConversions()
    {
      return $this->valuePerConversions;
    }

    /**
     * @param string $valuePerConversions
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setValuePerConversions($valuePerConversions)
    {
      $this->valuePerConversions = $valuePerConversions;
      return $this;
    }

    /**
     * @return int
     */
    public function getConversionsViaAdClick()
    {
      return $this->conversionsViaAdClick;
    }

    /**
     * @param int $conversionsViaAdClick
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setConversionsViaAdClick($conversionsViaAdClick)
    {
      $this->conversionsViaAdClick = $conversionsViaAdClick;
      return $this;
    }

    /**
     * @return float
     */
    public function getConversionRateViaAdClick()
    {
      return $this->conversionRateViaAdClick;
    }

    /**
     * @param float $conversionRateViaAdClick
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setConversionRateViaAdClick($conversionRateViaAdClick)
    {
      $this->conversionRateViaAdClick = $conversionRateViaAdClick;
      return $this;
    }

    /**
     * @return string
     */
    public function getCpaViaAdClick()
    {
      return $this->cpaViaAdClick;
    }

    /**
     * @param string $cpaViaAdClick
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setCpaViaAdClick($cpaViaAdClick)
    {
      $this->cpaViaAdClick = $cpaViaAdClick;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionValueViaAdClick()
    {
      return $this->conversionValueViaAdClick;
    }

    /**
     * @param string $conversionValueViaAdClick
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setConversionValueViaAdClick($conversionValueViaAdClick)
    {
      $this->conversionValueViaAdClick = $conversionValueViaAdClick;
      return $this;
    }

    /**
     * @return string
     */
    public function getValuePerConversionsViaAdClick()
    {
      return $this->valuePerConversionsViaAdClick;
    }

    /**
     * @param string $valuePerConversionsViaAdClick
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setValuePerConversionsViaAdClick($valuePerConversionsViaAdClick)
    {
      $this->valuePerConversionsViaAdClick = $valuePerConversionsViaAdClick;
      return $this;
    }

    /**
     * @return int
     */
    public function getAllConversions()
    {
      return $this->allConversions;
    }

    /**
     * @param int $allConversions
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setAllConversions($allConversions)
    {
      $this->allConversions = $allConversions;
      return $this;
    }

    /**
     * @return float
     */
    public function getAllConversionRate()
    {
      return $this->allConversionRate;
    }

    /**
     * @param float $allConversionRate
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setAllConversionRate($allConversionRate)
    {
      $this->allConversionRate = $allConversionRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllCpa()
    {
      return $this->allCpa;
    }

    /**
     * @param string $allCpa
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setAllCpa($allCpa)
    {
      $this->allCpa = $allCpa;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllConversionValue()
    {
      return $this->allConversionValue;
    }

    /**
     * @param string $allConversionValue
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setAllConversionValue($allConversionValue)
    {
      $this->allConversionValue = $allConversionValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getValuePerAllConversions()
    {
      return $this->valuePerAllConversions;
    }

    /**
     * @param string $valuePerAllConversions
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setValuePerAllConversions($valuePerAllConversions)
    {
      $this->valuePerAllConversions = $valuePerAllConversions;
      return $this;
    }

    /**
     * @return int
     */
    public function getCrossDeviceConversions()
    {
      return $this->crossDeviceConversions;
    }

    /**
     * @param int $crossDeviceConversions
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setCrossDeviceConversions($crossDeviceConversions)
    {
      $this->crossDeviceConversions = $crossDeviceConversions;
      return $this;
    }

    /**
     * @return float
     */
    public function getAvgDeliverRank()
    {
      return $this->avgDeliverRank;
    }

    /**
     * @param float $avgDeliverRank
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setAvgDeliverRank($avgDeliverRank)
    {
      $this->avgDeliverRank = $avgDeliverRank;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalVimps()
    {
      return $this->totalVimps;
    }

    /**
     * @param int $totalVimps
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setTotalVimps($totalVimps)
    {
      $this->totalVimps = $totalVimps;
      return $this;
    }

    /**
     * @return int
     */
    public function getVImps()
    {
      return $this->vImps;
    }

    /**
     * @param int $vImps
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setVImps($vImps)
    {
      $this->vImps = $vImps;
      return $this;
    }

    /**
     * @return int
     */
    public function getInViewClickCnt()
    {
      return $this->inViewClickCnt;
    }

    /**
     * @param int $inViewClickCnt
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setInViewClickCnt($inViewClickCnt)
    {
      $this->inViewClickCnt = $inViewClickCnt;
      return $this;
    }

    /**
     * @return float
     */
    public function getInViewRate()
    {
      return $this->inViewRate;
    }

    /**
     * @param float $inViewRate
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setInViewRate($inViewRate)
    {
      $this->inViewRate = $inViewRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getInViewClickRate()
    {
      return $this->inViewClickRate;
    }

    /**
     * @param float $inViewClickRate
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setInViewClickRate($inViewClickRate)
    {
      $this->inViewClickRate = $inViewClickRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaidVideoViews()
    {
      return $this->paidVideoViews;
    }

    /**
     * @param int $paidVideoViews
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setPaidVideoViews($paidVideoViews)
    {
      $this->paidVideoViews = $paidVideoViews;
      return $this;
    }

    /**
     * @return float
     */
    public function getPaidVideoViewRate()
    {
      return $this->paidVideoViewRate;
    }

    /**
     * @param float $paidVideoViewRate
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setPaidVideoViewRate($paidVideoViewRate)
    {
      $this->paidVideoViewRate = $paidVideoViewRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getAverageCpv()
    {
      return $this->averageCpv;
    }

    /**
     * @param float $averageCpv
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setAverageCpv($averageCpv)
    {
      $this->averageCpv = $averageCpv;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoViews()
    {
      return $this->videoViews;
    }

    /**
     * @param int $videoViews
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setVideoViews($videoViews)
    {
      $this->videoViews = $videoViews;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoViewsTo25()
    {
      return $this->videoViewsTo25;
    }

    /**
     * @param int $videoViewsTo25
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setVideoViewsTo25($videoViewsTo25)
    {
      $this->videoViewsTo25 = $videoViewsTo25;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoViewsTo50()
    {
      return $this->videoViewsTo50;
    }

    /**
     * @param int $videoViewsTo50
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setVideoViewsTo50($videoViewsTo50)
    {
      $this->videoViewsTo50 = $videoViewsTo50;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoViewsTo75()
    {
      return $this->videoViewsTo75;
    }

    /**
     * @param int $videoViewsTo75
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setVideoViewsTo75($videoViewsTo75)
    {
      $this->videoViewsTo75 = $videoViewsTo75;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoViewsTo95()
    {
      return $this->videoViewsTo95;
    }

    /**
     * @param int $videoViewsTo95
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setVideoViewsTo95($videoViewsTo95)
    {
      $this->videoViewsTo95 = $videoViewsTo95;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoViewsTo100()
    {
      return $this->videoViewsTo100;
    }

    /**
     * @param int $videoViewsTo100
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setVideoViewsTo100($videoViewsTo100)
    {
      $this->videoViewsTo100 = $videoViewsTo100;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoViewsTo3Sec()
    {
      return $this->videoViewsTo3Sec;
    }

    /**
     * @param int $videoViewsTo3Sec
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setVideoViewsTo3Sec($videoViewsTo3Sec)
    {
      $this->videoViewsTo3Sec = $videoViewsTo3Sec;
      return $this;
    }

    /**
     * @return float
     */
    public function getAverageRateVideoViewed()
    {
      return $this->averageRateVideoViewed;
    }

    /**
     * @param float $averageRateVideoViewed
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setAverageRateVideoViewed($averageRateVideoViewed)
    {
      $this->averageRateVideoViewed = $averageRateVideoViewed;
      return $this;
    }

    /**
     * @return float
     */
    public function getAverageDurationVideoViewed()
    {
      return $this->averageDurationVideoViewed;
    }

    /**
     * @param float $averageDurationVideoViewed
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setAverageDurationVideoViewed($averageDurationVideoViewed)
    {
      $this->averageDurationVideoViewed = $averageDurationVideoViewed;
      return $this;
    }

    /**
     * @return float
     */
    public function getConvValuePerCost()
    {
      return $this->convValuePerCost;
    }

    /**
     * @param float $convValuePerCost
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setConvValuePerCost($convValuePerCost)
    {
      $this->convValuePerCost = $convValuePerCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getAllConvValuePerCost()
    {
      return $this->allConvValuePerCost;
    }

    /**
     * @param float $allConvValuePerCost
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setAllConvValuePerCost($allConvValuePerCost)
    {
      $this->allConvValuePerCost = $allConvValuePerCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getConvValueViaAdClickPerCost()
    {
      return $this->convValueViaAdClickPerCost;
    }

    /**
     * @param float $convValueViaAdClickPerCost
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setConvValueViaAdClickPerCost($convValueViaAdClickPerCost)
    {
      $this->convValueViaAdClickPerCost = $convValueViaAdClickPerCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getImpsPrev()
    {
      return $this->impsPrev;
    }

    /**
     * @param float $impsPrev
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setImpsPrev($impsPrev)
    {
      $this->impsPrev = $impsPrev;
      return $this;
    }

    /**
     * @return float
     */
    public function getClickRatePrev()
    {
      return $this->clickRatePrev;
    }

    /**
     * @param float $clickRatePrev
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setClickRatePrev($clickRatePrev)
    {
      $this->clickRatePrev = $clickRatePrev;
      return $this;
    }

    /**
     * @return float
     */
    public function getMeasuredImps()
    {
      return $this->measuredImps;
    }

    /**
     * @param float $measuredImps
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setMeasuredImps($measuredImps)
    {
      $this->measuredImps = $measuredImps;
      return $this;
    }

    /**
     * @return float
     */
    public function getViewableImpsRate()
    {
      return $this->viewableImpsRate;
    }

    /**
     * @param float $viewableImpsRate
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setViewableImpsRate($viewableImpsRate)
    {
      $this->viewableImpsRate = $viewableImpsRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getViewableClicks()
    {
      return $this->viewableClicks;
    }

    /**
     * @param float $viewableClicks
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setViewableClicks($viewableClicks)
    {
      $this->viewableClicks = $viewableClicks;
      return $this;
    }

    /**
     * @return float
     */
    public function getMeasuredImpsRate()
    {
      return $this->measuredImpsRate;
    }

    /**
     * @param float $measuredImpsRate
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setMeasuredImpsRate($measuredImpsRate)
    {
      $this->measuredImpsRate = $measuredImpsRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getViewableClickRate()
    {
      return $this->viewableClickRate;
    }

    /**
     * @param float $viewableClickRate
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setViewableClickRate($viewableClickRate)
    {
      $this->viewableClickRate = $viewableClickRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoViewsTo10Sec()
    {
      return $this->videoViewsTo10Sec;
    }

    /**
     * @param int $videoViewsTo10Sec
     * @return \Jp\YahooApis\YDN\V201911\Stats\Stats
     */
    public function setVideoViewsTo10Sec($videoViewsTo10Sec)
    {
      $this->videoViewsTo10Sec = $videoViewsTo10Sec;
      return $this;
    }

}
