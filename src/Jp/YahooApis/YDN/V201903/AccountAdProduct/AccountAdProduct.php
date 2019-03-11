<?php

namespace Jp\YahooApis\YDN\V201903\AccountAdProduct;

class AccountAdProduct
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var AdProduct[] $adProduct
     */
    protected $adProduct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\YDN\V201903\AccountAdProduct\AccountAdProduct
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return AdProduct[]
     */
    public function getAdProduct()
    {
      return $this->adProduct;
    }

    /**
     * @param AdProduct[] $adProduct
     * @return \Jp\YahooApis\YDN\V201903\AccountAdProduct\AccountAdProduct
     */
    public function setAdProduct(array $adProduct = null)
    {
      $this->adProduct = $adProduct;
      return $this;
    }

}
