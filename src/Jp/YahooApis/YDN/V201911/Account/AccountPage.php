<?php

namespace Jp\YahooApis\YDN\V201911\Account;

class AccountPage extends \Jp\YahooApis\YDN\V201911\Page
{

    /**
     * @var AccountValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AccountValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AccountValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\Account\AccountPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
