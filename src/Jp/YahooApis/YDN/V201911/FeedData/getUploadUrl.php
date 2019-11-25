<?php

namespace Jp\YahooApis\YDN\V201911\FeedData;

class getUploadUrl
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var ItemListUploadType $itemListUploadType
     */
    protected $itemListUploadType = null;

    /**
     * @var int $feedHolderId
     */
    protected $feedHolderId = null;

    /**
     * @var boolean $isDebug
     */
    protected $isDebug = null;

    /**
     * @param int $accountId
     * @param ItemListUploadType $itemListUploadType
     * @param int $feedHolderId
     * @param boolean $isDebug
     */
    public function __construct($accountId, $itemListUploadType, $feedHolderId, $isDebug)
    {
      $this->accountId = $accountId;
      $this->itemListUploadType = $itemListUploadType;
      $this->feedHolderId = $feedHolderId;
      $this->isDebug = $isDebug;
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
     * @return \Jp\YahooApis\YDN\V201911\FeedData\getUploadUrl
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return ItemListUploadType
     */
    public function getItemListUploadType()
    {
      return $this->itemListUploadType;
    }

    /**
     * @param ItemListUploadType $itemListUploadType
     * @return \Jp\YahooApis\YDN\V201911\FeedData\getUploadUrl
     */
    public function setItemListUploadType($itemListUploadType)
    {
      $this->itemListUploadType = $itemListUploadType;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedHolderId()
    {
      return $this->feedHolderId;
    }

    /**
     * @param int $feedHolderId
     * @return \Jp\YahooApis\YDN\V201911\FeedData\getUploadUrl
     */
    public function setFeedHolderId($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDebug()
    {
      return $this->isDebug;
    }

    /**
     * @param boolean $isDebug
     * @return \Jp\YahooApis\YDN\V201911\FeedData\getUploadUrl
     */
    public function setIsDebug($isDebug)
    {
      $this->isDebug = $isDebug;
      return $this;
    }

}
