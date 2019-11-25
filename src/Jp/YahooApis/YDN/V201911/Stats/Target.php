<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class Target
{

    /**
     * @var TargetType $type
     */
    protected $type = null;

    /**
     * @var TargetSetting $targetSetting
     */
    protected $targetSetting = null;

    /**
     * @var string $targetId
     */
    protected $targetId = null;

    /**
     * @param TargetType $type
     */
    public function __construct($type)
    {
      $this->type = $type;
    }

    /**
     * @return TargetType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param TargetType $type
     * @return \Jp\YahooApis\YDN\V201911\Stats\Target
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return TargetSetting
     */
    public function getTargetSetting()
    {
      return $this->targetSetting;
    }

    /**
     * @param TargetSetting $targetSetting
     * @return \Jp\YahooApis\YDN\V201911\Stats\Target
     */
    public function setTargetSetting($targetSetting)
    {
      $this->targetSetting = $targetSetting;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetId()
    {
      return $this->targetId;
    }

    /**
     * @param string $targetId
     * @return \Jp\YahooApis\YDN\V201911\Stats\Target
     */
    public function setTargetId($targetId)
    {
      $this->targetId = $targetId;
      return $this;
    }

}
