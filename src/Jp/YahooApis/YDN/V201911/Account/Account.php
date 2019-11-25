<?php

namespace Jp\YahooApis\YDN\V201911\Account;

class Account
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var string $accountName
     */
    protected $accountName = null;

    /**
     * @var AccountType $accountType
     */
    protected $accountType = null;

    /**
     * @var AccountStatus $accountStatus
     */
    protected $accountStatus = null;

    /**
     * @var DeliveryStatus $deliveryStatus
     */
    protected $deliveryStatus = null;

    /**
     * @var AccountBudget $budget
     */
    protected $budget = null;

    /**
     * @var AutoTaggingEnabled $autoTaggingEnabled
     */
    protected $autoTaggingEnabled = null;

    /**
     * @var string[] $accountAuthorities
     */
    protected $accountAuthorities = null;

    
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
     * @return \Jp\YahooApis\YDN\V201911\Account\Account
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return \Jp\YahooApis\YDN\V201911\Account\Account
     */
    public function setAccountName($accountName)
    {
      $this->accountName = $accountName;
      return $this;
    }

    /**
     * @return AccountType
     */
    public function getAccountType()
    {
      return $this->accountType;
    }

    /**
     * @param AccountType $accountType
     * @return \Jp\YahooApis\YDN\V201911\Account\Account
     */
    public function setAccountType($accountType)
    {
      $this->accountType = $accountType;
      return $this;
    }

    /**
     * @return AccountStatus
     */
    public function getAccountStatus()
    {
      return $this->accountStatus;
    }

    /**
     * @param AccountStatus $accountStatus
     * @return \Jp\YahooApis\YDN\V201911\Account\Account
     */
    public function setAccountStatus($accountStatus)
    {
      $this->accountStatus = $accountStatus;
      return $this;
    }

    /**
     * @return DeliveryStatus
     */
    public function getDeliveryStatus()
    {
      return $this->deliveryStatus;
    }

    /**
     * @param DeliveryStatus $deliveryStatus
     * @return \Jp\YahooApis\YDN\V201911\Account\Account
     */
    public function setDeliveryStatus($deliveryStatus)
    {
      $this->deliveryStatus = $deliveryStatus;
      return $this;
    }

    /**
     * @return AccountBudget
     */
    public function getBudget()
    {
      return $this->budget;
    }

    /**
     * @param AccountBudget $budget
     * @return \Jp\YahooApis\YDN\V201911\Account\Account
     */
    public function setBudget($budget)
    {
      $this->budget = $budget;
      return $this;
    }

    /**
     * @return AutoTaggingEnabled
     */
    public function getAutoTaggingEnabled()
    {
      return $this->autoTaggingEnabled;
    }

    /**
     * @param AutoTaggingEnabled $autoTaggingEnabled
     * @return \Jp\YahooApis\YDN\V201911\Account\Account
     */
    public function setAutoTaggingEnabled($autoTaggingEnabled)
    {
      $this->autoTaggingEnabled = $autoTaggingEnabled;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAccountAuthorities()
    {
      return $this->accountAuthorities;
    }

    /**
     * @param string[] $accountAuthorities
     * @return \Jp\YahooApis\YDN\V201911\Account\Account
     */
    public function setAccountAuthorities(array $accountAuthorities = null)
    {
      $this->accountAuthorities = $accountAuthorities;
      return $this;
    }

}
