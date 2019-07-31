<?php

namespace Jp\YahooApis\YDN\V201907\SearchKeywordIdea;

class SearchKeywordIdea
{

    /**
     * @var int $searchKeywordId
     */
    protected $searchKeywordId = null;

    /**
     * @var string $searchKeyword
     */
    protected $searchKeyword = null;

    /**
     * @var int $desktopSearchVolume
     */
    protected $desktopSearchVolume = null;

    /**
     * @var int $smartPhoneSearchVolume
     */
    protected $smartPhoneSearchVolume = null;

    /**
     * @var int $tabletSearchVolume
     */
    protected $tabletSearchVolume = null;

    /**
     * @var string $releaseDate
     */
    protected $releaseDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getSearchKeywordId()
    {
      return $this->searchKeywordId;
    }

    /**
     * @param int $searchKeywordId
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdea
     */
    public function setSearchKeywordId($searchKeywordId)
    {
      $this->searchKeywordId = $searchKeywordId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchKeyword()
    {
      return $this->searchKeyword;
    }

    /**
     * @param string $searchKeyword
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdea
     */
    public function setSearchKeyword($searchKeyword)
    {
      $this->searchKeyword = $searchKeyword;
      return $this;
    }

    /**
     * @return int
     */
    public function getDesktopSearchVolume()
    {
      return $this->desktopSearchVolume;
    }

    /**
     * @param int $desktopSearchVolume
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdea
     */
    public function setDesktopSearchVolume($desktopSearchVolume)
    {
      $this->desktopSearchVolume = $desktopSearchVolume;
      return $this;
    }

    /**
     * @return int
     */
    public function getSmartPhoneSearchVolume()
    {
      return $this->smartPhoneSearchVolume;
    }

    /**
     * @param int $smartPhoneSearchVolume
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdea
     */
    public function setSmartPhoneSearchVolume($smartPhoneSearchVolume)
    {
      $this->smartPhoneSearchVolume = $smartPhoneSearchVolume;
      return $this;
    }

    /**
     * @return int
     */
    public function getTabletSearchVolume()
    {
      return $this->tabletSearchVolume;
    }

    /**
     * @param int $tabletSearchVolume
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdea
     */
    public function setTabletSearchVolume($tabletSearchVolume)
    {
      $this->tabletSearchVolume = $tabletSearchVolume;
      return $this;
    }

    /**
     * @return string
     */
    public function getReleaseDate()
    {
      return $this->releaseDate;
    }

    /**
     * @param string $releaseDate
     * @return \Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdea
     */
    public function setReleaseDate($releaseDate)
    {
      $this->releaseDate = $releaseDate;
      return $this;
    }

}
