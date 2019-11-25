<?php

namespace Jp\YahooApis\YDN\V201911\FeedSet;

class ConditionSet
{

    /**
     * @var ConditionType $type
     */
    protected $type = null;

    /**
     * @var Condition[] $orConditions
     */
    protected $orConditions = null;

    /**
     * @param ConditionType $type
     * @param Condition[] $orConditions
     */
    public function __construct($type, array $orConditions)
    {
      $this->type = $type;
      $this->orConditions = $orConditions;
    }

    /**
     * @return ConditionType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param ConditionType $type
     * @return \Jp\YahooApis\YDN\V201911\FeedSet\ConditionSet
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return Condition[]
     */
    public function getOrConditions()
    {
      return $this->orConditions;
    }

    /**
     * @param Condition[] $orConditions
     * @return \Jp\YahooApis\YDN\V201911\FeedSet\ConditionSet
     */
    public function setOrConditions(array $orConditions)
    {
      $this->orConditions = $orConditions;
      return $this;
    }

}
