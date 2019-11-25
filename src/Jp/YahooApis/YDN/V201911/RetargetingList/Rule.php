<?php

namespace Jp\YahooApis\YDN\V201911\RetargetingList;

class Rule
{

    /**
     * @var RuleCondition[] $ruleConditions
     */
    protected $ruleConditions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleCondition[]
     */
    public function getRuleConditions()
    {
      return $this->ruleConditions;
    }

    /**
     * @param RuleCondition[] $ruleConditions
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\Rule
     */
    public function setRuleConditions(array $ruleConditions = null)
    {
      $this->ruleConditions = $ruleConditions;
      return $this;
    }

}
