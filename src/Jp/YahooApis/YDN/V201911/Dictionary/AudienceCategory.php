<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class AudienceCategory
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
     * @var int $reach
     */
    protected $reach = null;

    /**
     * @var AudienceCategoryType $categoryType
     */
    protected $categoryType = null;

    /**
     * @var AudienceCategory[] $child
     */
    protected $child = null;

    /**
     * @param string $code
     * @param string $name
     * @param string $fullName
     * @param int $reach
     * @param AudienceCategoryType $categoryType
     */
    public function __construct($code, $name, $fullName, $reach, $categoryType)
    {
      $this->code = $code;
      $this->name = $name;
      $this->fullName = $fullName;
      $this->reach = $reach;
      $this->categoryType = $categoryType;
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
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategory
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
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategory
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
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategory
     */
    public function setFullName($fullName)
    {
      $this->fullName = $fullName;
      return $this;
    }

    /**
     * @return int
     */
    public function getReach()
    {
      return $this->reach;
    }

    /**
     * @param int $reach
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategory
     */
    public function setReach($reach)
    {
      $this->reach = $reach;
      return $this;
    }

    /**
     * @return AudienceCategoryType
     */
    public function getCategoryType()
    {
      return $this->categoryType;
    }

    /**
     * @param AudienceCategoryType $categoryType
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategory
     */
    public function setCategoryType($categoryType)
    {
      $this->categoryType = $categoryType;
      return $this;
    }

    /**
     * @return AudienceCategory[]
     */
    public function getChild()
    {
      return $this->child;
    }

    /**
     * @param AudienceCategory[] $child
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategory
     */
    public function setChild(array $child = null)
    {
      $this->child = $child;
      return $this;
    }

}
