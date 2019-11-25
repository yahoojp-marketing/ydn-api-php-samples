<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class OsVersionPage extends \Jp\YahooApis\YDN\V201911\Page
{

    /**
     * @var OsVersionValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return OsVersionValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param OsVersionValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\OsVersionPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
