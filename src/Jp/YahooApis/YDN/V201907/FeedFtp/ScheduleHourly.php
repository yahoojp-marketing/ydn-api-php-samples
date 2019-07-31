<?php

namespace Jp\YahooApis\YDN\V201907\FeedFtp;

class ScheduleHourly extends Schedule
{

    /**
     * @var int $interval
     */
    protected $interval = null;

    /**
     * @param ScheduleType $type
     * @param int $interval
     */
    public function __construct($type, $interval)
    {
      parent::__construct($type);
      $this->interval = $interval;
    }

    /**
     * @return int
     */
    public function getInterval()
    {
      return $this->interval;
    }

    /**
     * @param int $interval
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\ScheduleHourly
     */
    public function setInterval($interval)
    {
      $this->interval = $interval;
      return $this;
    }

}
