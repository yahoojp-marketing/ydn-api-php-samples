<?php

namespace Jp\YahooApis\YDN\V201903\PlacementUrlList;

class UrlList
{

    /**
     * @var string $placementUrl
     */
    protected $placementUrl = null;

    /**
     * @var UrlActiveFlg $activeFlg
     */
    protected $activeFlg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPlacementUrl()
    {
      return $this->placementUrl;
    }

    /**
     * @param string $placementUrl
     * @return \Jp\YahooApis\YDN\V201903\PlacementUrlList\UrlList
     */
    public function setPlacementUrl($placementUrl)
    {
      $this->placementUrl = $placementUrl;
      return $this;
    }

    /**
     * @return UrlActiveFlg
     */
    public function getActiveFlg()
    {
      return $this->activeFlg;
    }

    /**
     * @param UrlActiveFlg $activeFlg
     * @return \Jp\YahooApis\YDN\V201903\PlacementUrlList\UrlList
     */
    public function setActiveFlg($activeFlg)
    {
      $this->activeFlg = $activeFlg;
      return $this;
    }

}
