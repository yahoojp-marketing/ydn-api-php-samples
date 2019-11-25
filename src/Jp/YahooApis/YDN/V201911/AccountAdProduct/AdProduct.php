<?php

namespace Jp\YahooApis\YDN\V201911\AccountAdProduct;

class AdProduct
{

    /**
     * @var string $adProductType
     */
    protected $adProductType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdProductType()
    {
      return $this->adProductType;
    }

    /**
     * @param string $adProductType
     * @return \Jp\YahooApis\YDN\V201911\AccountAdProduct\AdProduct
     */
    public function setAdProductType($adProductType)
    {
      $this->adProductType = $adProductType;
      return $this;
    }

}
