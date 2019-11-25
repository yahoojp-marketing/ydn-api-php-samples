<?php

namespace Jp\YahooApis\YDN\V201911\FeedData;

class UploadUrlValue
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
     * @var string $uploadUrl
     */
    protected $uploadUrl = null;

    /**
     * @var boolean $isDebug
     */
    protected $isDebug = null;

    
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
     * @return \Jp\YahooApis\YDN\V201911\FeedData\UploadUrlValue
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
     * @return \Jp\YahooApis\YDN\V201911\FeedData\UploadUrlValue
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
     * @return \Jp\YahooApis\YDN\V201911\FeedData\UploadUrlValue
     */
    public function setFeedHolderId($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploadUrl()
    {
      return $this->uploadUrl;
    }

    /**
     * @param string $uploadUrl
     * @return \Jp\YahooApis\YDN\V201911\FeedData\UploadUrlValue
     */
    public function setUploadUrl($uploadUrl)
    {
      $this->uploadUrl = $uploadUrl;
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
     * @return \Jp\YahooApis\YDN\V201911\FeedData\UploadUrlValue
     */
    public function setIsDebug($isDebug)
    {
      $this->isDebug = $isDebug;
      return $this;
    }

}
