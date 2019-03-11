<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class GeographicLocation
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $parent
     */
    protected $parent = null;

    /**
     * @var string $order
     */
    protected $order = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $fullName
     */
    protected $fullName = null;

    /**
     * @var GeographicLocation[] $child
     */
    protected $child = null;

    /**
     * @param string $code
     * @param string $order
     * @param string $name
     * @param string $fullName
     */
    public function __construct($code, $order, $name, $fullName)
    {
      $this->code = $code;
      $this->order = $order;
      $this->name = $name;
      $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\GeographicLocation
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param string $parent
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\GeographicLocation
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param string $order
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\GeographicLocation
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\GeographicLocation
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
      return $this->fullName;
    }

    /**
     * @param string $fullName
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\GeographicLocation
     */
    public function setFullName($fullName)
    {
      $this->fullName = $fullName;
      return $this;
    }

    /**
     * @return GeographicLocation[]
     */
    public function getChild()
    {
      return $this->child;
    }

    /**
     * @param GeographicLocation[] $child
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\GeographicLocation
     */
    public function setChild(array $child = null)
    {
      $this->child = $child;
      return $this;
    }

}
