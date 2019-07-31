<?php

namespace Jp\YahooApis\YDN\V201907\Video;

class getUploadUrl
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var UploadVideo $uploadVideo
     */
    protected $uploadVideo = null;

    /**
     * @param int $accountId
     * @param UploadVideo $uploadVideo
     */
    public function __construct($accountId, $uploadVideo)
    {
      $this->accountId = $accountId;
      $this->uploadVideo = $uploadVideo;
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
     * @return \Jp\YahooApis\YDN\V201907\Video\getUploadUrl
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return UploadVideo
     */
    public function getUploadVideo()
    {
      return $this->uploadVideo;
    }

    /**
     * @param UploadVideo $uploadVideo
     * @return \Jp\YahooApis\YDN\V201907\Video\getUploadUrl
     */
    public function setUploadVideo($uploadVideo)
    {
      $this->uploadVideo = $uploadVideo;
      return $this;
    }

}
