<?php

namespace Jp\YahooApis\YDN\V201907\RetargetingList;

class RuleCondition
{

    /**
     * @var RuleType $type
     */
    protected $type = null;

    /**
     * @var CompareOperator $compareOperator
     */
    protected $compareOperator = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param RuleType $type
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\RuleCondition
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return CompareOperator
     */
    public function getCompareOperator()
    {
      return $this->compareOperator;
    }

    /**
     * @param CompareOperator $compareOperator
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\RuleCondition
     */
    public function setCompareOperator($compareOperator)
    {
      $this->compareOperator = $compareOperator;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Jp\YahooApis\YDN\V201907\RetargetingList\RuleCondition
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
