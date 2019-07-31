<?php

namespace Jp\YahooApis\YDN\V201907\Video;

class VideoSetting
{

    /**
     * @var VideoFileType $videoFileType
     */
    protected $videoFileType = null;

    /**
     * @var string $videoAdFormat
     */
    protected $videoAdFormat = null;

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
     * @var int $playbackTime
     */
    protected $playbackTime = null;

    /**
     * @var string $downloadOriginalUrl
     */
    protected $downloadOriginalUrl = null;

    /**
     * @var string $downloadHighBitrateUrl
     */
    protected $downloadHighBitrateUrl = null;

    /**
     * @var string $downloadMiddleBitrateUrl
     */
    protected $downloadMiddleBitrateUrl = null;

    /**
     * @var string $downloadLowBitrateUrl
     */
    protected $downloadLowBitrateUrl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VideoFileType
     */
    public function getVideoFileType()
    {
      return $this->videoFileType;
    }

    /**
     * @param VideoFileType $videoFileType
     * @return \Jp\YahooApis\YDN\V201907\Video\VideoSetting
     */
    public function setVideoFileType($videoFileType)
    {
      $this->videoFileType = $videoFileType;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoAdFormat()
    {
      return $this->videoAdFormat;
    }

    /**
     * @param string $videoAdFormat
     * @return \Jp\YahooApis\YDN\V201907\Video\VideoSetting
     */
    public function setVideoAdFormat($videoAdFormat)
    {
      $this->videoAdFormat = $videoAdFormat;
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
     * @return \Jp\YahooApis\YDN\V201907\Video\VideoSetting
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
     * @return \Jp\YahooApis\YDN\V201907\Video\VideoSetting
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
     * @return \Jp\YahooApis\YDN\V201907\Video\VideoSetting
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return int
     */
    public function getPlaybackTime()
    {
      return $this->playbackTime;
    }

    /**
     * @param int $playbackTime
     * @return \Jp\YahooApis\YDN\V201907\Video\VideoSetting
     */
    public function setPlaybackTime($playbackTime)
    {
      $this->playbackTime = $playbackTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadOriginalUrl()
    {
      return $this->downloadOriginalUrl;
    }

    /**
     * @param string $downloadOriginalUrl
     * @return \Jp\YahooApis\YDN\V201907\Video\VideoSetting
     */
    public function setDownloadOriginalUrl($downloadOriginalUrl)
    {
      $this->downloadOriginalUrl = $downloadOriginalUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadHighBitrateUrl()
    {
      return $this->downloadHighBitrateUrl;
    }

    /**
     * @param string $downloadHighBitrateUrl
     * @return \Jp\YahooApis\YDN\V201907\Video\VideoSetting
     */
    public function setDownloadHighBitrateUrl($downloadHighBitrateUrl)
    {
      $this->downloadHighBitrateUrl = $downloadHighBitrateUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadMiddleBitrateUrl()
    {
      return $this->downloadMiddleBitrateUrl;
    }

    /**
     * @param string $downloadMiddleBitrateUrl
     * @return \Jp\YahooApis\YDN\V201907\Video\VideoSetting
     */
    public function setDownloadMiddleBitrateUrl($downloadMiddleBitrateUrl)
    {
      $this->downloadMiddleBitrateUrl = $downloadMiddleBitrateUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadLowBitrateUrl()
    {
      return $this->downloadLowBitrateUrl;
    }

    /**
     * @param string $downloadLowBitrateUrl
     * @return \Jp\YahooApis\YDN\V201907\Video\VideoSetting
     */
    public function setDownloadLowBitrateUrl($downloadLowBitrateUrl)
    {
      $this->downloadLowBitrateUrl = $downloadLowBitrateUrl;
      return $this;
    }

}
