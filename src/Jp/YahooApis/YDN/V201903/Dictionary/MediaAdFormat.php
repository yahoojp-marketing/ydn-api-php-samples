<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class MediaAdFormat
{

    /**
     * @var int $id
     */
    protected $id = null;

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
     * @var boolean $animation
     */
    protected $animation = null;

    /**
     * @var boolean $logo
     */
    protected $logo = null;

    /**
     * @var boolean $thumbnail
     */
    protected $thumbnail = null;

    /**
     * @var string $adFormat
     */
    protected $adFormat = null;

    /**
     * @param int $id
     * @param int $width
     * @param int $height
     * @param int $size
     * @param boolean $transparent
     * @param boolean $animation
     * @param boolean $logo
     * @param boolean $thumbnail
     * @param string $adFormat
     */
    public function __construct($id, $width, $height, $size, $transparent, $animation, $logo, $thumbnail, $adFormat)
    {
      $this->id = $id;
      $this->width = $width;
      $this->height = $height;
      $this->size = $size;
      $this->transparent = $transparent;
      $this->animation = $animation;
      $this->logo = $logo;
      $this->thumbnail = $thumbnail;
      $this->adFormat = $adFormat;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\MediaAdFormat
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\MediaAdFormat
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
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\MediaAdFormat
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
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\MediaAdFormat
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
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\MediaAdFormat
     */
    public function setTransparent($transparent)
    {
      $this->transparent = $transparent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAnimation()
    {
      return $this->animation;
    }

    /**
     * @param boolean $animation
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\MediaAdFormat
     */
    public function setAnimation($animation)
    {
      $this->animation = $animation;
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
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\MediaAdFormat
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
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\MediaAdFormat
     */
    public function setThumbnail($thumbnail)
    {
      $this->thumbnail = $thumbnail;
      return $this;
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
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\MediaAdFormat
     */
    public function setAdFormat($adFormat)
    {
      $this->adFormat = $adFormat;
      return $this;
    }

}
