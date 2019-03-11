<?php

namespace Jp\YahooApis\YDN\V201903\Report;

class ReportDateRange
{

    /**
     * @var string $startDate
     */
    protected $startDate = null;

    /**
     * @var string $endDate
     */
    protected $endDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportDateRange
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return \Jp\YahooApis\YDN\V201903\Report\ReportDateRange
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

}
