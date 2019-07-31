<?php

namespace Jp\YahooApis\YDN\V201907\Video;

class Video
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $mediaId
     */
    protected $mediaId = null;

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
     * @var string $creationTime
     */
    protected $creationTime = null;

    /**
     * @var ApprovalStatus $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var string[] $disapprovalReasonCodes
     */
    protected $disapprovalReasonCodes = null;

    /**
     * @var VideoProcessStatus $processStatus
     */
    protected $processStatus = null;

    /**
     * @var VideoSetting $videoSetting
     */
    protected $videoSetting = null;

    /**
     * @param int $accountId
     */
    public function __construct($accountId)
    {
      $this->accountId = $accountId;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\YDN\V201907\Video\Video
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getMediaId()
    {
      return $this->mediaId;
    }

    /**
     * @param int $mediaId
     * @return \Jp\YahooApis\YDN\V201907\Video\Video
     */
    public function setMediaId($mediaId)
    {
      $this->mediaId = $mediaId;
      return $this;
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
     * @return \Jp\YahooApis\YDN\V201907\Video\Video
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
     * @return \Jp\YahooApis\YDN\V201907\Video\Video
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
     * @return \Jp\YahooApis\YDN\V201907\Video\Video
     */
    public function setUserStatus($userStatus)
    {
      $this->userStatus = $userStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreationTime()
    {
      return $this->creationTime;
    }

    /**
     * @param string $creationTime
     * @return \Jp\YahooApis\YDN\V201907\Video\Video
     */
    public function setCreationTime($creationTime)
    {
      $this->creationTime = $creationTime;
      return $this;
    }

    /**
     * @return ApprovalStatus
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param ApprovalStatus $approvalStatus
     * @return \Jp\YahooApis\YDN\V201907\Video\Video
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDisapprovalReasonCodes()
    {
      return $this->disapprovalReasonCodes;
    }

    /**
     * @param string[] $disapprovalReasonCodes
     * @return \Jp\YahooApis\YDN\V201907\Video\Video
     */
    public function setDisapprovalReasonCodes(array $disapprovalReasonCodes = null)
    {
      $this->disapprovalReasonCodes = $disapprovalReasonCodes;
      return $this;
    }

    /**
     * @return VideoProcessStatus
     */
    public function getProcessStatus()
    {
      return $this->processStatus;
    }

    /**
     * @param VideoProcessStatus $processStatus
     * @return \Jp\YahooApis\YDN\V201907\Video\Video
     */
    public function setProcessStatus($processStatus)
    {
      $this->processStatus = $processStatus;
      return $this;
    }

    /**
     * @return VideoSetting
     */
    public function getVideoSetting()
    {
      return $this->videoSetting;
    }

    /**
     * @param VideoSetting $videoSetting
     * @return \Jp\YahooApis\YDN\V201907\Video\Video
     */
    public function setVideoSetting($videoSetting)
    {
      $this->videoSetting = $videoSetting;
      return $this;
    }

}
