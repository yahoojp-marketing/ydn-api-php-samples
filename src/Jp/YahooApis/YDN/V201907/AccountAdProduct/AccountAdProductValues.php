<?php

namespace Jp\YahooApis\YDN\V201907\AccountAdProduct;

class AccountAdProductValues extends \Jp\YahooApis\YDN\V201907\ReturnValue
{

    /**
     * @var AccountAdProduct $accountAdProduct
     */
    protected $accountAdProduct = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AccountAdProduct
     */
    public function getAccountAdProduct()
    {
      return $this->accountAdProduct;
    }

    /**
     * @param AccountAdProduct $accountAdProduct
     * @return \Jp\YahooApis\YDN\V201907\AccountAdProduct\AccountAdProductValues
     */
    public function setAccountAdProduct($accountAdProduct)
    {
      $this->accountAdProduct = $accountAdProduct;
      return $this;
    }

}
