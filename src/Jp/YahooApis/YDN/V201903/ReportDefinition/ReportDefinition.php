<?php

namespace Jp\YahooApis\YDN\V201903\ReportDefinition;

class ReportDefinition
{

    /**
     * @var int $reportId
     */
    protected $reportId = null;

    /**
     * @var int $accountId
     */
    protected $accountId = null;

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
     * @var ReportZip $zip
     */
    protected $zip = null;

    /**
     * @var ReportLang $lang
     */
    protected $lang = null;

    /**
     * @var ReportIntervalType $intervalType
     */
    protected $intervalType = null;

    /**
     * @var int $specifyDay
     */
    protected $specifyDay = null;

    /**
     * @var ReportAddTemplate $addTemplate
     */
    protected $addTemplate = null;

    
    public function __construct()
    {
    
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
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
     */
    public function setReportId($reportId)
    {
      $this->reportId = $reportId;
      return $this;
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
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
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
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
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
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
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
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
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
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
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
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
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
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
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
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
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
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
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
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
     */
    public function setEncode($encode)
    {
      $this->encode = $encode;
      return $this;
    }

    /**
     * @return ReportZip
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param ReportZip $zip
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
     */
    public function setZip($zip)
    {
      $this->zip = $zip;
      return $this;
    }

    /**
     * @return ReportLang
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param ReportLang $lang
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

    /**
     * @return ReportIntervalType
     */
    public function getIntervalType()
    {
      return $this->intervalType;
    }

    /**
     * @param ReportIntervalType $intervalType
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
     */
    public function setIntervalType($intervalType)
    {
      $this->intervalType = $intervalType;
      return $this;
    }

    /**
     * @return int
     */
    public function getSpecifyDay()
    {
      return $this->specifyDay;
    }

    /**
     * @param int $specifyDay
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
     */
    public function setSpecifyDay($specifyDay)
    {
      $this->specifyDay = $specifyDay;
      return $this;
    }

    /**
     * @return ReportAddTemplate
     */
    public function getAddTemplate()
    {
      return $this->addTemplate;
    }

    /**
     * @param ReportAddTemplate $addTemplate
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\ReportDefinition
     */
    public function setAddTemplate($addTemplate)
    {
      $this->addTemplate = $addTemplate;
      return $this;
    }

}
