<?php

namespace Jp\YahooApis\YDN\V201911\FeedFtp;

class Schedule
{

    /**
     * @var ScheduleType $type
     */
    protected $type = null;

    /**
     * @param ScheduleType $type
     */
    public function __construct($type)
    {
      $this->type = $type;
    }

    /**
     * @return ScheduleType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param ScheduleType $type
     * @return \Jp\YahooApis\YDN\V201911\FeedFtp\Schedule
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
