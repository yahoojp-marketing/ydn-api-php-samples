<?php

namespace Jp\YahooApis\YDN\V201903\FeedData;

class FeedDataSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $feedHolderIds
     */
    protected $feedHolderIds = null;

    /**
     * @var long[] $itemListUploadIds
     */
    protected $itemListUploadIds = null;

    /**
     * @var FileUploadStatus[] $uploadStatuses
     */
    protected $uploadStatuses = null;

    /**
     * @var FileUploadDateRange $dateRange
     */
    protected $dateRange = null;

    /**
     * @var \Jp\YahooApis\YDN\V201903\Paging $paging
     */
    protected $paging = null;

    /**
     * @param int $accountId
     */
    public function __construct($accountId)
    {
      $this->accountId = $accountId;
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
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getFeedHolderIds()
    {
      return $this->feedHolderIds;
    }

    /**
     * @param long[] $feedHolderIds
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataSelector
     */
    public function setFeedHolderIds(array $feedHolderIds = null)
    {
      $this->feedHolderIds = $feedHolderIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getItemListUploadIds()
    {
      return $this->itemListUploadIds;
    }

    /**
     * @param long[] $itemListUploadIds
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataSelector
     */
    public function setItemListUploadIds(array $itemListUploadIds = null)
    {
      $this->itemListUploadIds = $itemListUploadIds;
      return $this;
    }

    /**
     * @return FileUploadStatus[]
     */
    public function getUploadStatuses()
    {
      return $this->uploadStatuses;
    }

    /**
     * @param FileUploadStatus[] $uploadStatuses
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataSelector
     */
    public function setUploadStatuses(array $uploadStatuses = null)
    {
      $this->uploadStatuses = $uploadStatuses;
      return $this;
    }

    /**
     * @return FileUploadDateRange
     */
    public function getDateRange()
    {
      return $this->dateRange;
    }

    /**
     * @param FileUploadDateRange $dateRange
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataSelector
     */
    public function setDateRange($dateRange)
    {
      $this->dateRange = $dateRange;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201903\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201903\Paging $paging
     * @return \Jp\YahooApis\YDN\V201903\FeedData\FeedDataSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
