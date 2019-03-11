<?php

namespace Jp\YahooApis\YDN\V201903\Media;

class ImageMedia extends Media
{

    /**
     * @var MediaFileType $mediaFileType
     */
    protected $mediaFileType = null;

    /**
     * @var string $mediaAdFormat
     */
    protected $mediaAdFormat = null;

    /**
     * @var int $fileSize
     */
    protected $fileSize = null;

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @var string $downloadUrl
     */
    protected $downloadUrl = null;

    /**
     * @var base64Binary $data
     */
    protected $data = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MediaFileType
     */
    public function getMediaFileType()
    {
      return $this->mediaFileType;
    }

    /**
     * @param MediaFileType $mediaFileType
     * @return \Jp\YahooApis\YDN\V201903\Media\ImageMedia
     */
    public function setMediaFileType($mediaFileType)
    {
      $this->mediaFileType = $mediaFileType;
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
     * @return \Jp\YahooApis\YDN\V201903\Media\ImageMedia
     */
    public function setMediaAdFormat($mediaAdFormat)
    {
      $this->mediaAdFormat = $mediaAdFormat;
      return $this;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
      return $this->fileSize;
    }

    /**
     * @param int $fileSize
     * @return \Jp\YahooApis\YDN\V201903\Media\ImageMedia
     */
    public function setFileSize($fileSize)
    {
      $this->fileSize = $fileSize;
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
     * @return \Jp\YahooApis\YDN\V201903\Media\ImageMedia
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
     * @return \Jp\YahooApis\YDN\V201903\Media\ImageMedia
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadUrl()
    {
      return $this->downloadUrl;
    }

    /**
     * @param string $downloadUrl
     * @return \Jp\YahooApis\YDN\V201903\Media\ImageMedia
     */
    public function setDownloadUrl($downloadUrl)
    {
      $this->downloadUrl = $downloadUrl;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param base64Binary $data
     * @return \Jp\YahooApis\YDN\V201903\Media\ImageMedia
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
