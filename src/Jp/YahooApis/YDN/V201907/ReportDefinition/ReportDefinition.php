<?php

namespace Jp\YahooApis\YDN\V201907\ReportDefinition;

class ReportDefinition
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
     * @var ReportJobStatus $reportJobStatus
     */
    protected $reportJobStatus = null;

    /**
     * @var string $reportJobErrorDetail
     */
    protected $reportJobErrorDetail = null;

    /**
     * @var string $requestTime
     */
    protected $requestTime = null;

    /**
     * @var string $completeTime
     */
    protected $completeTime = null;

    /**
     * @var string $reportDownloadUrl
     */
    protected $reportDownloadUrl = null;

    /**
     * @var string $reportName
     */
    protected $reportName = null;

    /**
     * @var ReportDateRangeType $dateRangeType
     */
    protected $dateRangeType = null;

    /**
     * @var ReportDateRange $dateRange
     */
    protected $dateRange = null;

    /**
     * @var ReportFrequencyRange $frequencyRange
     */
    protected $frequencyRange = null;

    /**
     * @var ReportFilter[] $filters
     */
    protected $filters = null;

    /**
     * @var string[] $sortFields
     */
    protected $sortFields = null;

    /**
     * @var string[] $fields
     */
    protected $fields = null;

    /**
     * @var ReportDownloadFormat $format
     */
    protected $format = null;

    /**
     * @var ReportDownloadEncode $encode
     */
    protected $encode = null;

    /**
     * @var ReportZip $compress
     */
    protected $compress = null;

    /**
     * @var ReportLang $language
     */
    protected $language = null;

    
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
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
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
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setReportJobId($reportJobId)
    {
      $this->reportJobId = $reportJobId;
      return $this;
    }

    /**
     * @return ReportJobStatus
     */
    public function getReportJobStatus()
    {
      return $this->reportJobStatus;
    }

    /**
     * @param ReportJobStatus $reportJobStatus
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setReportJobStatus($reportJobStatus)
    {
      $this->reportJobStatus = $reportJobStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportJobErrorDetail()
    {
      return $this->reportJobErrorDetail;
    }

    /**
     * @param string $reportJobErrorDetail
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setReportJobErrorDetail($reportJobErrorDetail)
    {
      $this->reportJobErrorDetail = $reportJobErrorDetail;
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
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
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
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setCompleteTime($completeTime)
    {
      $this->completeTime = $completeTime;
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
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setReportDownloadUrl($reportDownloadUrl)
    {
      $this->reportDownloadUrl = $reportDownloadUrl;
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
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setReportName($reportName)
    {
      $this->reportName = $reportName;
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
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
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
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setDateRange($dateRange)
    {
      $this->dateRange = $dateRange;
      return $this;
    }

    /**
     * @return ReportFrequencyRange
     */
    public function getFrequencyRange()
    {
      return $this->frequencyRange;
    }

    /**
     * @param ReportFrequencyRange $frequencyRange
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setFrequencyRange($frequencyRange)
    {
      $this->frequencyRange = $frequencyRange;
      return $this;
    }

    /**
     * @return ReportFilter[]
     */
    public function getFilters()
    {
      return $this->filters;
    }

    /**
     * @param ReportFilter[] $filters
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setFilters(array $filters = null)
    {
      $this->filters = $filters;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSortFields()
    {
      return $this->sortFields;
    }

    /**
     * @param string[] $sortFields
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setSortFields(array $sortFields = null)
    {
      $this->sortFields = $sortFields;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param string[] $fields
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setFields(array $fields = null)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return ReportDownloadFormat
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param ReportDownloadFormat $format
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

    /**
     * @return ReportDownloadEncode
     */
    public function getEncode()
    {
      return $this->encode;
    }

    /**
     * @param ReportDownloadEncode $encode
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setEncode($encode)
    {
      $this->encode = $encode;
      return $this;
    }

    /**
     * @return ReportZip
     */
    public function getCompress()
    {
      return $this->compress;
    }

    /**
     * @param ReportZip $compress
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setCompress($compress)
    {
      $this->compress = $compress;
      return $this;
    }

    /**
     * @return ReportLang
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param ReportLang $language
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportDefinition
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

}
