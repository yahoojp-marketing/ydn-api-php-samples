<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class AudienceCategoryPage extends \Jp\YahooApis\YDN\V201911\Page
{

    /**
     * @var AudienceCategoryValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AudienceCategoryValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AudienceCategoryValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategoryPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
