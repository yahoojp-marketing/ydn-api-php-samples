<?php

namespace Jp\YahooApis\YDN\V201907\Dictionary;

class MediaAdFormat
{

    /**
     * @var string $adFormat
     */
    protected $adFormat = null;

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @var int $size
     */
    protected $size = null;

    /**
     * @var boolean $transparent
     */
    protected $transparent = null;

    /**
     * @var boolean $logo
     */
    protected $logo = null;

    /**
     * @var boolean $thumbnail
     */
    protected $thumbnail = null;

    /**
     * @var int $sizeTo
     */
    protected $sizeTo = null;

    /**
     * @var int $maxWidth
     */
    protected $maxWidth = null;

    /**
     * @var int $maxHeight
     */
    protected $maxHeight = null;

    /**
     * @var int $aspectWidth
     */
    protected $aspectWidth = null;

    /**
     * @var int $aspectHeight
     */
    protected $aspectHeight = null;

    /**
     * @var boolean $staticImage
     */
    protected $staticImage = null;

    /**
     * @var boolean $aspect
     */
    protected $aspect = null;

    /**
     * @param string $adFormat
     * @param int $width
     * @param int $height
     * @param int $size
     * @param boolean $transparent
     * @param boolean $logo
     * @param boolean $thumbnail
     * @param int $sizeTo
     * @param int $maxWidth
     * @param int $maxHeight
     * @param int $aspectWidth
     * @param int $aspectHeight
     * @param boolean $staticImage
     * @param boolean $aspect
     */
    public function __construct($adFormat, $width, $height, $size, $transparent, $logo, $thumbnail, $sizeTo, $maxWidth, $maxHeight, $aspectWidth, $aspectHeight, $staticImage, $aspect)
    {
      $this->adFormat = $adFormat;
      $this->width = $width;
      $this->height = $height;
      $this->size = $size;
      $this->transparent = $transparent;
      $this->logo = $logo;
      $this->thumbnail = $thumbnail;
      $this->sizeTo = $sizeTo;
      $this->maxWidth = $maxWidth;
      $this->maxHeight = $maxHeight;
      $this->aspectWidth = $aspectWidth;
      $this->aspectHeight = $aspectHeight;
      $this->staticImage = $staticImage;
      $this->aspect = $aspect;
    }

    /**
     * @return string
     */
    public function getAdFormat()
    {
      return $this->adFormat;
    }

    /**
     * @param string $adFormat
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setAdFormat($adFormat)
    {
      $this->adFormat = $adFormat;
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
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
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
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param int $size
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTransparent()
    {
      return $this->transparent;
    }

    /**
     * @param boolean $transparent
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setTransparent($transparent)
    {
      $this->transparent = $transparent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLogo()
    {
      return $this->logo;
    }

    /**
     * @param boolean $logo
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setLogo($logo)
    {
      $this->logo = $logo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThumbnail()
    {
      return $this->thumbnail;
    }

    /**
     * @param boolean $thumbnail
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setThumbnail($thumbnail)
    {
      $this->thumbnail = $thumbnail;
      return $this;
    }

    /**
     * @return int
     */
    public function getSizeTo()
    {
      return $this->sizeTo;
    }

    /**
     * @param int $sizeTo
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setSizeTo($sizeTo)
    {
      $this->sizeTo = $sizeTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxWidth()
    {
      return $this->maxWidth;
    }

    /**
     * @param int $maxWidth
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setMaxWidth($maxWidth)
    {
      $this->maxWidth = $maxWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxHeight()
    {
      return $this->maxHeight;
    }

    /**
     * @param int $maxHeight
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setMaxHeight($maxHeight)
    {
      $this->maxHeight = $maxHeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getAspectWidth()
    {
      return $this->aspectWidth;
    }

    /**
     * @param int $aspectWidth
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setAspectWidth($aspectWidth)
    {
      $this->aspectWidth = $aspectWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getAspectHeight()
    {
      return $this->aspectHeight;
    }

    /**
     * @param int $aspectHeight
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setAspectHeight($aspectHeight)
    {
      $this->aspectHeight = $aspectHeight;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStaticImage()
    {
      return $this->staticImage;
    }

    /**
     * @param boolean $staticImage
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setStaticImage($staticImage)
    {
      $this->staticImage = $staticImage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAspect()
    {
      return $this->aspect;
    }

    /**
     * @param boolean $aspect
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat
     */
    public function setAspect($aspect)
    {
      $this->aspect = $aspect;
      return $this;
    }

}
