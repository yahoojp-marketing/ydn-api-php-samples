<?php

namespace Jp\YahooApis\YDN\V201903\FeedData;

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
     * @param int $accountId
     * @param ItemListUploadType $itemListUploadType
     * @param int $feedHolderId
     */
    public function __construct($accountId, $itemListUploadType, $feedHolderId)
    {
      $this->accountId = $accountId;
      $this->itemListUploadType = $itemListUploadType;
      $this->feedHolderId = $feedHolderId;
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
     * @return \Jp\YahooApis\YDN\V201903\FeedData\getUploadUrl
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
     * @return \Jp\YahooApis\YDN\V201903\FeedData\getUploadUrl
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
     * @return \Jp\YahooApis\YDN\V201903\FeedData\getUploadUrl
     */
    public function setFeedHolderId($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
      return $this;
    }

}
