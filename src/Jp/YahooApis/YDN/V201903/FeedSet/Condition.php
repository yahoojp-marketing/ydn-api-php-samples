<?php

namespace Jp\YahooApis\YDN\V201903\FeedSet;

class Condition
{

    /**
     * @var CompareOperator $operator
     */
    protected $operator = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param CompareOperator $operator
     * @param string $value
     */
    public function __construct($operator, $value)
    {
      $this->operator = $operator;
      $this->value = $value;
    }

    /**
     * @return CompareOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param CompareOperator $operator
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\Condition
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
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
     * @return \Jp\YahooApis\YDN\V201903\FeedSet\Condition
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
