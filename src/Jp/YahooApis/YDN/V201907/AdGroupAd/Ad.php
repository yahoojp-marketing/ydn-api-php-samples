<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupAd;

class Ad
{

    /**
     * @var AdType $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param AdType $type
     * @return \Jp\YahooApis\YDN\V201907\AdGroupAd\Ad
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
