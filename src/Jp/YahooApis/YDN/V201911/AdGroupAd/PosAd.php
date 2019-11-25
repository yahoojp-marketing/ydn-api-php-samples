<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupAd;

class PosAd extends Ad
{

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $description
     */
    protected $description = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\PosAd
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAd\PosAd
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
