<?php

namespace Jp\YahooApis\YDN\V201903\Campaign;

class Budget
{

    /**
     * @var int $amount
     */
    protected $amount = null;

    /**
     * @var BudgetDeliveryMethod $deliveryMethod
     */
    protected $deliveryMethod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param int $amount
     * @return \Jp\YahooApis\YDN\V201903\Campaign\Budget
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return BudgetDeliveryMethod
     */
    public function getDeliveryMethod()
    {
      return $this->deliveryMethod;
    }

    /**
     * @param BudgetDeliveryMethod $deliveryMethod
     * @return \Jp\YahooApis\YDN\V201903\Campaign\Budget
     */
    public function setDeliveryMethod($deliveryMethod)
    {
      $this->deliveryMethod = $deliveryMethod;
      return $this;
    }

}
