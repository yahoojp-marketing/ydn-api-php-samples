<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupTarget;

class SiteCategoryTarget extends Target
{

    /**
     * @var string $categoryFullNameJa
     */
    protected $categoryFullNameJa = null;

    /**
     * @var string $categoryFullNameEn
     */
    protected $categoryFullNameEn = null;

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
    public function getCategoryFullNameJa()
    {
      return $this->categoryFullNameJa;
    }

    /**
     * @param string $categoryFullNameJa
     * @return \Jp\YahooApis\YDN\V201903\AdGroupTarget\SiteCategoryTarget
     */
    public function setCategoryFullNameJa($categoryFullNameJa)
    {
      $this->categoryFullNameJa = $categoryFullNameJa;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryFullNameEn()
    {
      return $this->categoryFullNameEn;
    }

    /**
     * @param string $categoryFullNameEn
     * @return \Jp\YahooApis\YDN\V201903\AdGroupTarget\SiteCategoryTarget
     */
    public function setCategoryFullNameEn($categoryFullNameEn)
    {
      $this->categoryFullNameEn = $categoryFullNameEn;
      return $this;
    }

}
