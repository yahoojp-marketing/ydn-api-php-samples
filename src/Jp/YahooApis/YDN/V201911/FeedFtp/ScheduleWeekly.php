<?php

namespace Jp\YahooApis\YDN\V201911\FeedFtp;

class ScheduleWeekly extends Schedule
{

    /**
     * @var int $time
     */
    protected $time = null;

    /**
     * @var ScheduleWeek $week
     */
    protected $week = null;

    /**
     * @param ScheduleType $type
     * @param int $time
     * @param ScheduleWeek $week
     */
    public function __construct($type, $time, $week)
    {
      parent::__construct($type);
      $this->time = $time;
      $this->week = $week;
    }

    /**
     * @return int
     */
    public function getTime()
    {
      return $this->time;
    }

    /**
     * @param int $time
     * @return \Jp\YahooApis\YDN\V201911\FeedFtp\ScheduleWeekly
     */
    public function setTime($time)
    {
      $this->time = $time;
      return $this;
    }

    /**
     * @return ScheduleWeek
     */
    public function getWeek()
    {
      return $this->week;
    }

    /**
     * @param ScheduleWeek $week
     * @return \Jp\YahooApis\YDN\V201911\FeedFtp\ScheduleWeekly
     */
    public function setWeek($week)
    {
      $this->week = $week;
      return $this;
    }

}
