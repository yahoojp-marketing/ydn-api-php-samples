<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class CategoryPage extends \Jp\YahooApis\YDN\V201903\Page
{

    /**
     * @var CategoryValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CategoryValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param CategoryValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\CategoryPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
