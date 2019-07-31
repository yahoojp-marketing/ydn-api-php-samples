<?php

namespace Jp\YahooApis\YDN\V201907\PlacementUrlIdea;

class PlacementUrlIdea
{

    /**
     * @var string $searchUrl
     */
    protected $searchUrl = null;

    /**
     * @var string $keyword
     */
    protected $keyword = null;

    /**
     * @var string[] $siteCategory
     */
    protected $siteCategory = null;

    /**
     * @var AdFormat[] $adFormat
     */
    protected $adFormat = null;

    /**
     * @var int $desktopReaches
     */
    protected $desktopReaches = null;

    /**
     * @var int $desktopAdRequests
     */
    protected $desktopAdRequests = null;

    /**
     * @var int $smartPhoneReaches
     */
    protected $smartPhoneReaches = null;

    /**
     * @var int $smartPhoneAdRequests
     */
    protected $smartPhoneAdRequests = null;

    /**
     * @var int $tabletReaches
     */
    protected $tabletReaches = null;

    /**
     * @var int $tabletAdRequests
     */
    protected $tabletAdRequests = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSearchUrl()
    {
      return $this->searchUrl;
    }

    /**
     * @param string $searchUrl
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdea
     */
    public function setSearchUrl($searchUrl)
    {
      $this->searchUrl = $searchUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
      return $this->keyword;
    }

    /**
     * @param string $keyword
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdea
     */
    public function setKeyword($keyword)
    {
      $this->keyword = $keyword;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSiteCategory()
    {
      return $this->siteCategory;
    }

    /**
     * @param string[] $siteCategory
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdea
     */
    public function setSiteCategory(array $siteCategory = null)
    {
      $this->siteCategory = $siteCategory;
      return $this;
    }

    /**
     * @return AdFormat[]
     */
    public function getAdFormat()
    {
      return $this->adFormat;
    }

    /**
     * @param AdFormat[] $adFormat
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdea
     */
    public function setAdFormat(array $adFormat = null)
    {
      $this->adFormat = $adFormat;
      return $this;
    }

    /**
     * @return int
     */
    public function getDesktopReaches()
    {
      return $this->desktopReaches;
    }

    /**
     * @param int $desktopReaches
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdea
     */
    public function setDesktopReaches($desktopReaches)
    {
      $this->desktopReaches = $desktopReaches;
      return $this;
    }

    /**
     * @return int
     */
    public function getDesktopAdRequests()
    {
      return $this->desktopAdRequests;
    }

    /**
     * @param int $desktopAdRequests
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdea
     */
    public function setDesktopAdRequests($desktopAdRequests)
    {
      $this->desktopAdRequests = $desktopAdRequests;
      return $this;
    }

    /**
     * @return int
     */
    public function getSmartPhoneReaches()
    {
      return $this->smartPhoneReaches;
    }

    /**
     * @param int $smartPhoneReaches
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdea
     */
    public function setSmartPhoneReaches($smartPhoneReaches)
    {
      $this->smartPhoneReaches = $smartPhoneReaches;
      return $this;
    }

    /**
     * @return int
     */
    public function getSmartPhoneAdRequests()
    {
      return $this->smartPhoneAdRequests;
    }

    /**
     * @param int $smartPhoneAdRequests
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdea
     */
    public function setSmartPhoneAdRequests($smartPhoneAdRequests)
    {
      $this->smartPhoneAdRequests = $smartPhoneAdRequests;
      return $this;
    }

    /**
     * @return int
     */
    public function getTabletReaches()
    {
      return $this->tabletReaches;
    }

    /**
     * @param int $tabletReaches
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdea
     */
    public function setTabletReaches($tabletReaches)
    {
      $this->tabletReaches = $tabletReaches;
      return $this;
    }

    /**
     * @return int
     */
    public function getTabletAdRequests()
    {
      return $this->tabletAdRequests;
    }

    /**
     * @param int $tabletAdRequests
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdea
     */
    public function setTabletAdRequests($tabletAdRequests)
    {
      $this->tabletAdRequests = $tabletAdRequests;
      return $this;
    }

}
