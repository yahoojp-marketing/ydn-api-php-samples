<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class ColorSetPage extends \Jp\YahooApis\YDN\V201903\Page
{

    /**
     * @var ColorSetValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ColorSetValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param ColorSetValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\ColorSetPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
