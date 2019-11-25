<?php

namespace Jp\YahooApis\YDN\V201911\Bulk;

class UploadBulkJob
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $uploadBulkJobId
     */
    protected $uploadBulkJobId = null;

    /**
     * @var string $uploadBulkJobName
     */
    protected $uploadBulkJobName = null;

    /**
     * @var string $uploadBulkUserName
     */
    protected $uploadBulkUserName = null;

    /**
     * @var string $uploadBulkStartDate
     */
    protected $uploadBulkStartDate = null;

    /**
     * @var string $uploadBulkEndDate
     */
    protected $uploadBulkEndDate = null;

    /**
     * @var UploadBulkJobStatus $uploadBulkJobStatus
     */
    protected $uploadBulkJobStatus = null;

    /**
     * @var ProcessingItemsCount $processingItemsCount
     */
    protected $processingItemsCount = null;

    /**
     * @var int $progress
     */
    protected $progress = null;

    /**
     * @var string $downloadBulkUploadFileUrl
     */
    protected $downloadBulkUploadFileUrl = null;

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
     * @return \Jp\YahooApis\YDN\V201911\Bulk\UploadBulkJob
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUploadBulkJobId()
    {
      return $this->uploadBulkJobId;
    }

    /**
     * @param int $uploadBulkJobId
     * @return \Jp\YahooApis\YDN\V201911\Bulk\UploadBulkJob
     */
    public function setUploadBulkJobId($uploadBulkJobId)
    {
      $this->uploadBulkJobId = $uploadBulkJobId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploadBulkJobName()
    {
      return $this->uploadBulkJobName;
    }

    /**
     * @param string $uploadBulkJobName
     * @return \Jp\YahooApis\YDN\V201911\Bulk\UploadBulkJob
     */
    public function setUploadBulkJobName($uploadBulkJobName)
    {
      $this->uploadBulkJobName = $uploadBulkJobName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploadBulkUserName()
    {
      return $this->uploadBulkUserName;
    }

    /**
     * @param string $uploadBulkUserName
     * @return \Jp\YahooApis\YDN\V201911\Bulk\UploadBulkJob
     */
    public function setUploadBulkUserName($uploadBulkUserName)
    {
      $this->uploadBulkUserName = $uploadBulkUserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploadBulkStartDate()
    {
      return $this->uploadBulkStartDate;
    }

    /**
     * @param string $uploadBulkStartDate
     * @return \Jp\YahooApis\YDN\V201911\Bulk\UploadBulkJob
     */
    public function setUploadBulkStartDate($uploadBulkStartDate)
    {
      $this->uploadBulkStartDate = $uploadBulkStartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploadBulkEndDate()
    {
      return $this->uploadBulkEndDate;
    }

    /**
     * @param string $uploadBulkEndDate
     * @return \Jp\YahooApis\YDN\V201911\Bulk\UploadBulkJob
     */
    public function setUploadBulkEndDate($uploadBulkEndDate)
    {
      $this->uploadBulkEndDate = $uploadBulkEndDate;
      return $this;
    }

    /**
     * @return UploadBulkJobStatus
     */
    public function getUploadBulkJobStatus()
    {
      return $this->uploadBulkJobStatus;
    }

    /**
     * @param UploadBulkJobStatus $uploadBulkJobStatus
     * @return \Jp\YahooApis\YDN\V201911\Bulk\UploadBulkJob
     */
    public function setUploadBulkJobStatus($uploadBulkJobStatus)
    {
      $this->uploadBulkJobStatus = $uploadBulkJobStatus;
      return $this;
    }

    /**
     * @return ProcessingItemsCount
     */
    public function getProcessingItemsCount()
    {
      return $this->processingItemsCount;
    }

    /**
     * @param ProcessingItemsCount $processingItemsCount
     * @return \Jp\YahooApis\YDN\V201911\Bulk\UploadBulkJob
     */
    public function setProcessingItemsCount($processingItemsCount)
    {
      $this->processingItemsCount = $processingItemsCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getProgress()
    {
      return $this->progress;
    }

    /**
     * @param int $progress
     * @return \Jp\YahooApis\YDN\V201911\Bulk\UploadBulkJob
     */
    public function setProgress($progress)
    {
      $this->progress = $progress;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadBulkUploadFileUrl()
    {
      return $this->downloadBulkUploadFileUrl;
    }

    /**
     * @param string $downloadBulkUploadFileUrl
     * @return \Jp\YahooApis\YDN\V201911\Bulk\UploadBulkJob
     */
    public function setDownloadBulkUploadFileUrl($downloadBulkUploadFileUrl)
    {
      $this->downloadBulkUploadFileUrl = $downloadBulkUploadFileUrl;
      return $this;
    }

}
