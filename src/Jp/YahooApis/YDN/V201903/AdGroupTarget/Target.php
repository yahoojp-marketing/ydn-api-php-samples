<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupTarget;

class Target
{

    /**
     * @var TargetType $type
     */
    protected $type = null;

    /**
     * @var string $targetId
     */
    protected $targetId = null;

    /**
     * @var boolean $isRemove
     */
    protected $isRemove = null;

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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupTarget\Target
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Jp\YahooApis\YDN\V201903\AdGroupTarget\Target
     */
    public function setTargetId($targetId)
    {
      $this->targetId = $targetId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRemove()
    {
      return $this->isRemove;
    }

    /**
     * @param boolean $isRemove
     * @return \Jp\YahooApis\YDN\V201903\AdGroupTarget\Target
     */
    public function setIsRemove($isRemove)
    {
      $this->isRemove = $isRemove;
      return $this;
    }

}
