<?php

namespace Jp\YahooApis\YDN\V201907\Video;

class UploadVideo
{

    /**
     * @var string $videoName
     */
    protected $videoName = null;

    /**
     * @var string $videoTitle
     */
    protected $videoTitle = null;

    /**
     * @var UserStatus $userStatus
     */
    protected $userStatus = null;

    /**
     * @param string $videoName
     * @param string $videoTitle
     * @param UserStatus $userStatus
     */
    public function __construct($videoName, $videoTitle, $userStatus)
    {
      $this->videoName = $videoName;
      $this->videoTitle = $videoTitle;
      $this->userStatus = $userStatus;
    }

    /**
     * @return string
     */
    public function getVideoName()
    {
      return $this->videoName;
    }

    /**
     * @param string $videoName
     * @return \Jp\YahooApis\YDN\V201907\Video\UploadVideo
     */
    public function setVideoName($videoName)
    {
      $this->videoName = $videoName;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoTitle()
    {
      return $this->videoTitle;
    }

    /**
     * @param string $videoTitle
     * @return \Jp\YahooApis\YDN\V201907\Video\UploadVideo
     */
    public function setVideoTitle($videoTitle)
    {
      $this->videoTitle = $videoTitle;
      return $this;
    }

    /**
     * @return UserStatus
     */
    public function getUserStatus()
    {
      return $this->userStatus;
    }

    /**
     * @param UserStatus $userStatus
     * @return \Jp\YahooApis\YDN\V201907\Video\UploadVideo
     */
    public function setUserStatus($userStatus)
    {
      $this->userStatus = $userStatus;
      return $this;
    }

}
