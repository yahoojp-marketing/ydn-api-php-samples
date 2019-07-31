<?php

namespace Jp\YahooApis\YDN\V201907\ReportDefinition;

class ReportClosedDateRecord extends \Jp\YahooApis\YDN\V201907\ReturnValue
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $closedDate
     */
    protected $closedDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportClosedDateRecord
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getClosedDate()
    {
      return $this->closedDate;
    }

    /**
     * @param string $closedDate
     * @return \Jp\YahooApis\YDN\V201907\ReportDefinition\ReportClosedDateRecord
     */
    public function setClosedDate($closedDate)
    {
      $this->closedDate = $closedDate;
      return $this;
    }

}
