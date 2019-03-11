<?php

namespace Jp\YahooApis\YDN\V201903\FeedData;

class FeedDataRecord
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $feedHolderId
     */
    protected $feedHolderId = null;

    /**
     * @var int $itemListUploadId
     */
    protected $itemListUploadId = null;

    /**
     * @var ItemListUploadType $itemListUploadType
     */
    protected $itemListUploadType = null;

    /**
     * @var FileUploadStatus $itemListUploadStatus
     */
    protected $itemListUploadStatus = null;

    /**
     * @var string $uploadDate
     */
    protected $uploadDate = null;

    /**
     * @var int $errorCount
     */
    protected $errorCount = null;

    /**
     * @var string $errorListDownloadUrl
     */
    protected $errorListDownloadUrl = null;

    
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
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataRecord
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
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
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataRecord
     */
    public function setFeedHolderId($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemListUploadId()
    {
      return $this->itemListUploadId;
    }

    /**
     * @param int $itemListUploadId
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataRecord
     */
    public function setItemListUploadId($itemListUploadId)
    {
      $this->itemListUploadId = $itemListUploadId;
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
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataRecord
     */
    public function setItemListUploadType($itemListUploadType)
    {
      $this->itemListUploadType = $itemListUploadType;
      return $this;
    }

    /**
     * @return FileUploadStatus
     */
    public function getItemListUploadStatus()
    {
      return $this->itemListUploadStatus;
    }

    /**
     * @param FileUploadStatus $itemListUploadStatus
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataRecord
     */
    public function setItemListUploadStatus($itemListUploadStatus)
    {
      $this->itemListUploadStatus = $itemListUploadStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploadDate()
    {
      return $this->uploadDate;
    }

    /**
     * @param string $uploadDate
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataRecord
     */
    public function setUploadDate($uploadDate)
    {
      $this->uploadDate = $uploadDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getErrorCount()
    {
      return $this->errorCount;
    }

    /**
     * @param int $errorCount
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataRecord
     */
    public function setErrorCount($errorCount)
    {
      $this->errorCount = $errorCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorListDownloadUrl()
    {
      return $this->errorListDownloadUrl;
    }

    /**
     * @param string $errorListDownloadUrl
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataRecord
     */
    public function setErrorListDownloadUrl($errorListDownloadUrl)
    {
      $this->errorListDownloadUrl = $errorListDownloadUrl;
      return $this;
    }

}
