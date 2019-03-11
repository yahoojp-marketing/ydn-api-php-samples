<?php

namespace Jp\YahooApis\YDN\V201903\Report;

class ReportValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var ReportRecord $reportRecord
     */
    protected $reportRecord = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReportRecord
     */
    public function getReportRecord()
    {
      return $this->reportRecord;
    }

    /**
     * @param ReportRecord $reportRecord
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportValues
     */
    public function setReportRecord($reportRecord)
    {
      $this->reportRecord = $reportRecord;
      return $this;
    }

}
