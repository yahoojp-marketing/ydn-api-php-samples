<?php

namespace Jp\YahooApis\YDN\V201907\Bulk;

class UploadUrlValue
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var boolean $acceptableUploadStatus
     */
    protected $acceptableUploadStatus = null;

    /**
     * @var string $uploadUrl
     */
    protected $uploadUrl = null;

    
    public function __construct()
    {
    
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
     * @return \Jp\YahooApis\YDN\V201907\Bulk\UploadUrlValue
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAcceptableUploadStatus()
    {
      return $this->acceptableUploadStatus;
    }

    /**
     * @param boolean $acceptableUploadStatus
     * @return \Jp\YahooApis\YDN\V201907\Bulk\UploadUrlValue
     */
    public function setAcceptableUploadStatus($acceptableUploadStatus)
    {
      $this->acceptableUploadStatus = $acceptableUploadStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploadUrl()
    {
      return $this->uploadUrl;
    }

    /**
     * @param string $uploadUrl
     * @return \Jp\YahooApis\YDN\V201907\Bulk\UploadUrlValue
     */
    public function setUploadUrl($uploadUrl)
    {
      $this->uploadUrl = $uploadUrl;
      return $this;
    }

}
