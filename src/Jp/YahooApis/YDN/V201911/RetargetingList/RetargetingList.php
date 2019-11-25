<?php

namespace Jp\YahooApis\YDN\V201911\RetargetingList;

class RetargetingList
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $targetListId
     */
    protected $targetListId = null;

    /**
     * @var string $targetListName
     */
    protected $targetListName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var DeliveryStatus $deliveryStatus
     */
    protected $deliveryStatus = null;

    /**
     * @var int $reach
     */
    protected $reach = null;

    /**
     * @var RetargetingTargetList $targetList
     */
    protected $targetList = null;

    
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
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\RetargetingList
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetListId()
    {
      return $this->targetListId;
    }

    /**
     * @param int $targetListId
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\RetargetingList
     */
    public function setTargetListId($targetListId)
    {
      $this->targetListId = $targetListId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetListName()
    {
      return $this->targetListName;
    }

    /**
     * @param string $targetListName
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\RetargetingList
     */
    public function setTargetListName($targetListName)
    {
      $this->targetListName = $targetListName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\RetargetingList
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\RetargetingList
     */
    public function setDeliveryStatus($deliveryStatus)
    {
      $this->deliveryStatus = $deliveryStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getReach()
    {
      return $this->reach;
    }

    /**
     * @param int $reach
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\RetargetingList
     */
    public function setReach($reach)
    {
      $this->reach = $reach;
      return $this;
    }

    /**
     * @return RetargetingTargetList
     */
    public function getTargetList()
    {
      return $this->targetList;
    }

    /**
     * @param RetargetingTargetList $targetList
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\RetargetingList
     */
    public function setTargetList($targetList)
    {
      $this->targetList = $targetList;
      return $this;
    }

}
