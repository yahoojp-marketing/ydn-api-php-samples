<?php

namespace Jp\YahooApis\YDN\V201907\FeedFtp;

class ScheduleDaily extends Schedule
{

    /**
     * @var int $time
     */
    protected $time = null;

    /**
     * @param ScheduleType $type
     * @param int $time
     */
    public function __construct($type, $time)
    {
      parent::__construct($type);
      $this->time = $time;
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
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\ScheduleDaily
     */
    public function setTime($time)
    {
      $this->time = $time;
      return $this;
    }

}
