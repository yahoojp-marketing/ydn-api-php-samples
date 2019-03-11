<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class CategoryChildValues
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $fullName
     */
    protected $fullName = null;

    /**
     * @var int $reachDesktop
     */
    protected $reachDesktop = null;

    /**
     * @var int $reachSmartphone
     */
    protected $reachSmartphone = null;

    /**
     * @var int $reachTablet
     */
    protected $reachTablet = null;

    /**
     * @param string $code
     * @param string $name
     * @param string $fullName
     * @param int $reachDesktop
     * @param int $reachSmartphone
     * @param int $reachTablet
     */
    public function __construct($code, $name, $fullName, $reachDesktop, $reachSmartphone, $reachTablet)
    {
      $this->code = $code;
      $this->name = $name;
      $this->fullName = $fullName;
      $this->reachDesktop = $reachDesktop;
      $this->reachSmartphone = $reachSmartphone;
      $this->reachTablet = $reachTablet;
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
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\CategoryChildValues
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\CategoryChildValues
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
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\CategoryChildValues
     */
    public function setFullName($fullName)
    {
      $this->fullName = $fullName;
      return $this;
    }

    /**
     * @return int
     */
    public function getReachDesktop()
    {
      return $this->reachDesktop;
    }

    /**
     * @param int $reachDesktop
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\CategoryChildValues
     */
    public function setReachDesktop($reachDesktop)
    {
      $this->reachDesktop = $reachDesktop;
      return $this;
    }

    /**
     * @return int
     */
    public function getReachSmartphone()
    {
      return $this->reachSmartphone;
    }

    /**
     * @param int $reachSmartphone
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\CategoryChildValues
     */
    public function setReachSmartphone($reachSmartphone)
    {
      $this->reachSmartphone = $reachSmartphone;
      return $this;
    }

    /**
     * @return int
     */
    public function getReachTablet()
    {
      return $this->reachTablet;
    }

    /**
     * @param int $reachTablet
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\CategoryChildValues
     */
    public function setReachTablet($reachTablet)
    {
      $this->reachTablet = $reachTablet;
      return $this;
    }

}
