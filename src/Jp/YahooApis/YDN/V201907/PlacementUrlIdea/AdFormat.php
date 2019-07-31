<?php

namespace Jp\YahooApis\YDN\V201907\PlacementUrlIdea;

class AdFormat
{

    /**
     * @var string $adStyle
     */
    protected $adStyle = null;

    /**
     * @var string $adType
     */
    protected $adType = null;

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdStyle()
    {
      return $this->adStyle;
    }

    /**
     * @param string $adStyle
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\AdFormat
     */
    public function setAdStyle($adStyle)
    {
      $this->adStyle = $adStyle;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdType()
    {
      return $this->adType;
    }

    /**
     * @param string $adType
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\AdFormat
     */
    public function setAdType($adType)
    {
      $this->adType = $adType;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param int $width
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\AdFormat
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param int $height
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlIdea\AdFormat
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

}
