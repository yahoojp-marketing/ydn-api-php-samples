<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupTarget;

class AdScheduleTarget extends Target
{

    /**
     * @var DayOfWeek $dayOfWeek
     */
    protected $dayOfWeek = null;

    /**
     * @var int $startHour
     */
    protected $startHour = null;

    /**
     * @var int $endHour
     */
    protected $endHour = null;

    /**
     * @param TargetType $type
     */
    public function __construct($type)
    {
      parent::__construct($type);
    }

    /**
     * @return DayOfWeek
     */
    public function getDayOfWeek()
    {
      return $this->dayOfWeek;
    }

    /**
     * @param DayOfWeek $dayOfWeek
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AdScheduleTarget
     */
    public function setDayOfWeek($dayOfWeek)
    {
      $this->dayOfWeek = $dayOfWeek;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartHour()
    {
      return $this->startHour;
    }

    /**
     * @param int $startHour
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AdScheduleTarget
     */
    public function setStartHour($startHour)
    {
      $this->startHour = $startHour;
      return $this;
    }

    /**
     * @return int
     */
    public function getEndHour()
    {
      return $this->endHour;
    }

    /**
     * @param int $endHour
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AdScheduleTarget
     */
    public function setEndHour($endHour)
    {
      $this->endHour = $endHour;
      return $this;
    }

}
