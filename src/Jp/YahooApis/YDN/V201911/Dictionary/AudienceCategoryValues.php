<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class AudienceCategoryValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var AudienceCategory $category
     */
    protected $category = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AudienceCategory
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param AudienceCategory $category
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategoryValues
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

}
