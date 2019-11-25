<?php

namespace Jp\YahooApis\YDN\V201911\Account;

class AccountReturnValue extends \Jp\YahooApis\YDN\V201911\ListReturnValue
{

    /**
     * @var AccountValues $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AccountValues
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AccountValues $values
     * @return \Jp\YahooApis\YDN\V201911\Account\AccountReturnValue
     */
    public function setValues($values)
    {
      $this->values = $values;
      return $this;
    }

}
