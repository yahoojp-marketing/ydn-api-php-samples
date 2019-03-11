<?php

namespace Jp\YahooApis\YDN\V201903\ReportDefinition;

class getReportFields
{

    /**
     * @var ReportCategory $reportCategory
     */
    protected $reportCategory = null;

    /**
     * @param ReportCategory $reportCategory
     */
    public function __construct($reportCategory)
    {
      $this->reportCategory = $reportCategory;
    }

    /**
     * @return ReportCategory
     */
    public function getReportCategory()
    {
      return $this->reportCategory;
    }

    /**
     * @param ReportCategory $reportCategory
     * @return \Jp\YahooApis\YDN\V201903\ReportDefinition\getReportFields
     */
    public function setReportCategory($reportCategory)
    {
      $this->reportCategory = $reportCategory;
      return $this;
    }

}
