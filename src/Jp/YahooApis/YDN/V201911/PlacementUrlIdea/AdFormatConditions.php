<?php

namespace Jp\YahooApis\YDN\V201911\PlacementUrlIdea;

class AdFormatConditions
{

    /**
     * @var string $adStyle
     */
    protected $adStyle = null;

    /**
     * @var string $mediaAdFormat
     */
    protected $mediaAdFormat = null;

    
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
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlIdea\AdFormatConditions
     */
    public function setAdStyle($adStyle)
    {
      $this->adStyle = $adStyle;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaAdFormat()
    {
      return $this->mediaAdFormat;
    }

    /**
     * @param string $mediaAdFormat
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlIdea\AdFormatConditions
     */
    public function setMediaAdFormat($mediaAdFormat)
    {
      $this->mediaAdFormat = $mediaAdFormat;
      return $this;
    }

}
