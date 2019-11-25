<?php

namespace Jp\YahooApis\YDN\V201911\PlacementUrlIdea;

class PlacementUrlIdeaSelector
{

    /**
     * @var string $keyword
     */
    protected $keyword = null;

    /**
     * @var string[] $siteCategories
     */
    protected $siteCategories = null;

    /**
     * @var AdFormatConditions[] $adFormats
     */
    protected $adFormats = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Paging $paging
     */
    protected $paging = null;

    
    public function __construct()
    {
    
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
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlIdea\PlacementUrlIdeaSelector
     */
    public function setKeyword($keyword)
    {
      $this->keyword = $keyword;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSiteCategories()
    {
      return $this->siteCategories;
    }

    /**
     * @param string[] $siteCategories
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlIdea\PlacementUrlIdeaSelector
     */
    public function setSiteCategories(array $siteCategories = null)
    {
      $this->siteCategories = $siteCategories;
      return $this;
    }

    /**
     * @return AdFormatConditions[]
     */
    public function getAdFormats()
    {
      return $this->adFormats;
    }

    /**
     * @param AdFormatConditions[] $adFormats
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlIdea\PlacementUrlIdeaSelector
     */
    public function setAdFormats(array $adFormats = null)
    {
      $this->adFormats = $adFormats;
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
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlIdea\PlacementUrlIdeaSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
