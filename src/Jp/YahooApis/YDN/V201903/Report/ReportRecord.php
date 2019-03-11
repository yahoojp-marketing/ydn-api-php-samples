<?php

namespace Jp\YahooApis\YDN\V201903\Report;

class ReportRecord
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $reportJobId
     */
    protected $reportJobId = null;

    /**
     * @var int $reportId
     */
    protected $reportId = null;

    /**
     * @var string $reportName
     */
    protected $reportName = null;

    /**
     * @var string $requestTime
     */
    protected $requestTime = null;

    /**
     * @var string $completeTime
     */
    protected $completeTime = null;

    /**
     * @var ReportDateRangeType $dateRangeType
     */
    protected $dateRangeType = null;

    /**
     * @var ReportDateRange $dateRange
     */
    protected $dateRange = null;

    /**
     * @var ReportJobStatus $status
     */
    protected $status = null;

    /**
     * @var string $jobErrorDetail
     */
    protected $jobErrorDetail = null;

    /**
     * @var string $reportDownloadUrl
     */
    protected $reportDownloadUrl = null;

    
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
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportRecord
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getReportJobId()
    {
      return $this->reportJobId;
    }

    /**
     * @param int $reportJobId
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportRecord
     */
    public function setReportJobId($reportJobId)
    {
      $this->reportJobId = $reportJobId;
      return $this;
    }

    /**
     * @return int
     */
    public function getReportId()
    {
      return $this->reportId;
    }

    /**
     * @param int $reportId
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportRecord
     */
    public function setReportId($reportId)
    {
      $this->reportId = $reportId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportName()
    {
      return $this->reportName;
    }

    /**
     * @param string $reportName
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportRecord
     */
    public function setReportName($reportName)
    {
      $this->reportName = $reportName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestTime()
    {
      return $this->requestTime;
    }

    /**
     * @param string $requestTime
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportRecord
     */
    public function setRequestTime($requestTime)
    {
      $this->requestTime = $requestTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompleteTime()
    {
      return $this->completeTime;
    }

    /**
     * @param string $completeTime
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportRecord
     */
    public function setCompleteTime($completeTime)
    {
      $this->completeTime = $completeTime;
      return $this;
    }

    /**
     * @return ReportDateRangeType
     */
    public function getDateRangeType()
    {
      return $this->dateRangeType;
    }

    /**
     * @param ReportDateRangeType $dateRangeType
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportRecord
     */
    public function setDateRangeType($dateRangeType)
    {
      $this->dateRangeType = $dateRangeType;
      return $this;
    }

    /**
     * @return ReportDateRange
     */
    public function getDateRange()
    {
      return $this->dateRange;
    }

    /**
     * @param ReportDateRange $dateRange
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportRecord
     */
    public function setDateRange($dateRange)
    {
      $this->dateRange = $dateRange;
      return $this;
    }

    /**
     * @return ReportJobStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param ReportJobStatus $status
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportRecord
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobErrorDetail()
    {
      return $this->jobErrorDetail;
    }

    /**
     * @param string $jobErrorDetail
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportRecord
     */
    public function setJobErrorDetail($jobErrorDetail)
    {
      $this->jobErrorDetail = $jobErrorDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportDownloadUrl()
    {
      return $this->reportDownloadUrl;
    }

    /**
     * @param string $reportDownloadUrl
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportRecord
     */
    public function setReportDownloadUrl($reportDownloadUrl)
    {
      $this->reportDownloadUrl = $reportDownloadUrl;
      return $this;
    }

}
