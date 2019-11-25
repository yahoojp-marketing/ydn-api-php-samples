<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupTarget;

class AudienceCategoryTarget extends Target
{

    /**
     * @var string $categoryNameJa
     */
    protected $categoryNameJa = null;

    /**
     * @var string $categoryNameEn
     */
    protected $categoryNameEn = null;

    /**
     * @var AudienceCategoryType $categoryType
     */
    protected $categoryType = null;

    /**
     * @param TargetType $type
     */
    public function __construct($type)
    {
      parent::__construct($type);
    }

    /**
     * @return string
     */
    public function getCategoryNameJa()
    {
      return $this->categoryNameJa;
    }

    /**
     * @param string $categoryNameJa
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AudienceCategoryTarget
     */
    public function setCategoryNameJa($categoryNameJa)
    {
      $this->categoryNameJa = $categoryNameJa;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryNameEn()
    {
      return $this->categoryNameEn;
    }

    /**
     * @param string $categoryNameEn
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AudienceCategoryTarget
     */
    public function setCategoryNameEn($categoryNameEn)
    {
      $this->categoryNameEn = $categoryNameEn;
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
     * @return \Jp\YahooApis\YDN\V201911\AdGroupTarget\AudienceCategoryTarget
     */
    public function setCategoryType($categoryType)
    {
      $this->categoryType = $categoryType;
      return $this;
    }

}
