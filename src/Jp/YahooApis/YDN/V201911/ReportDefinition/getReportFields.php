<?php

namespace Jp\YahooApis\YDN\V201911\ReportDefinition;

class getReportFields
{

    /**
     * @var ReportType $reportCategory
     */
    protected $reportCategory = null;

    /**
     * @param ReportType $reportCategory
     */
    public function __construct($reportCategory)
    {
      $this->reportCategory = $reportCategory;
    }

    /**
     * @return ReportType
     */
    public function getReportCategory()
    {
      return $this->reportCategory;
    }

    /**
     * @param ReportType $reportCategory
     * @return \Jp\YahooApis\YDN\V201911\ReportDefinition\getReportFields
     */
    public function setReportCategory($reportCategory)
    {
      $this->reportCategory = $reportCategory;
      return $this;
    }

}
