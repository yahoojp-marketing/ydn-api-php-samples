<?php

namespace Jp\YahooApis\YDN\V201903\PlacementUrlList;

class PlacementUrlListValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var PlacementUrlList $urlList
     */
    protected $urlList = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PlacementUrlList
     */
    public function getUrlList()
    {
      return $this->urlList;
    }

    /**
     * @param PlacementUrlList $urlList
     * @return \Jp\YahooApis\YDN\V201903\PlacementUrlList\PlacementUrlListValues
     */
    public function setUrlList($urlList)
    {
      $this->urlList = $urlList;
      return $this;
    }

}
