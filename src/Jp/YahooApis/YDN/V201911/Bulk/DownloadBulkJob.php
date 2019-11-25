<?php

namespace Jp\YahooApis\YDN\V201911\Bulk;

class DownloadBulkJob
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $downloadBulkJobId
     */
    protected $downloadBulkJobId = null;

    /**
     * @var string $downloadBulkJobName
     */
    protected $downloadBulkJobName = null;

    /**
     * @var string $downloadBulkUserName
     */
    protected $downloadBulkUserName = null;

    /**
     * @var string $downloadBulkStartDate
     */
    protected $downloadBulkStartDate = null;

    /**
     * @var string $downloadBulkEndDate
     */
    protected $downloadBulkEndDate = null;

    /**
     * @var DownloadBulkJobStatus $downloadJobStatus
     */
    protected $downloadJobStatus = null;

    /**
     * @var int $progress
     */
    protected $progress = null;

    /**
     * @var string $downloadBulkDownloadUrl
     */
    protected $downloadBulkDownloadUrl = null;

    
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
     * @return \Jp\YahooApis\YDN\V201911\Bulk\DownloadBulkJob
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDownloadBulkJobId()
    {
      return $this->downloadBulkJobId;
    }

    /**
     * @param int $downloadBulkJobId
     * @return \Jp\YahooApis\YDN\V201911\Bulk\DownloadBulkJob
     */
    public function setDownloadBulkJobId($downloadBulkJobId)
    {
      $this->downloadBulkJobId = $downloadBulkJobId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadBulkJobName()
    {
      return $this->downloadBulkJobName;
    }

    /**
     * @param string $downloadBulkJobName
     * @return \Jp\YahooApis\YDN\V201911\Bulk\DownloadBulkJob
     */
    public function setDownloadBulkJobName($downloadBulkJobName)
    {
      $this->downloadBulkJobName = $downloadBulkJobName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadBulkUserName()
    {
      return $this->downloadBulkUserName;
    }

    /**
     * @param string $downloadBulkUserName
     * @return \Jp\YahooApis\YDN\V201911\Bulk\DownloadBulkJob
     */
    public function setDownloadBulkUserName($downloadBulkUserName)
    {
      $this->downloadBulkUserName = $downloadBulkUserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadBulkStartDate()
    {
      return $this->downloadBulkStartDate;
    }

    /**
     * @param string $downloadBulkStartDate
     * @return \Jp\YahooApis\YDN\V201911\Bulk\DownloadBulkJob
     */
    public function setDownloadBulkStartDate($downloadBulkStartDate)
    {
      $this->downloadBulkStartDate = $downloadBulkStartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadBulkEndDate()
    {
      return $this->downloadBulkEndDate;
    }

    /**
     * @param string $downloadBulkEndDate
     * @return \Jp\YahooApis\YDN\V201911\Bulk\DownloadBulkJob
     */
    public function setDownloadBulkEndDate($downloadBulkEndDate)
    {
      $this->downloadBulkEndDate = $downloadBulkEndDate;
      return $this;
    }

    /**
     * @return DownloadBulkJobStatus
     */
    public function getDownloadJobStatus()
    {
      return $this->downloadJobStatus;
    }

    /**
     * @param DownloadBulkJobStatus $downloadJobStatus
     * @return \Jp\YahooApis\YDN\V201911\Bulk\DownloadBulkJob
     */
    public function setDownloadJobStatus($downloadJobStatus)
    {
      $this->downloadJobStatus = $downloadJobStatus;
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
     * @return \Jp\YahooApis\YDN\V201911\Bulk\DownloadBulkJob
     */
    public function setProgress($progress)
    {
      $this->progress = $progress;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadBulkDownloadUrl()
    {
      return $this->downloadBulkDownloadUrl;
    }

    /**
     * @param string $downloadBulkDownloadUrl
     * @return \Jp\YahooApis\YDN\V201911\Bulk\DownloadBulkJob
     */
    public function setDownloadBulkDownloadUrl($downloadBulkDownloadUrl)
    {
      $this->downloadBulkDownloadUrl = $downloadBulkDownloadUrl;
      return $this;
    }

}
