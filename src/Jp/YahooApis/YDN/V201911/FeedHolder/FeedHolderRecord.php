<?php

namespace Jp\YahooApis\YDN\V201911\FeedHolder;

class FeedHolderRecord
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
     * @var string $feedHolderName
     */
    protected $feedHolderName = null;

    /**
     * @var int $itemCount
     */
    protected $itemCount = null;

    /**
     * @var int $approvedItemCount
     */
    protected $approvedItemCount = null;

    /**
     * @var int $disApprovedItemCount
     */
    protected $disApprovedItemCount = null;

    /**
     * @var string $disApprovalReasonListDownloadUrl
     */
    protected $disApprovalReasonListDownloadUrl = null;

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
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderRecord
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
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderRecord
     */
    public function setFeedHolderId($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedHolderName()
    {
      return $this->feedHolderName;
    }

    /**
     * @param string $feedHolderName
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderRecord
     */
    public function setFeedHolderName($feedHolderName)
    {
      $this->feedHolderName = $feedHolderName;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
      return $this->itemCount;
    }

    /**
     * @param int $itemCount
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderRecord
     */
    public function setItemCount($itemCount)
    {
      $this->itemCount = $itemCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getApprovedItemCount()
    {
      return $this->approvedItemCount;
    }

    /**
     * @param int $approvedItemCount
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderRecord
     */
    public function setApprovedItemCount($approvedItemCount)
    {
      $this->approvedItemCount = $approvedItemCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getDisApprovedItemCount()
    {
      return $this->disApprovedItemCount;
    }

    /**
     * @param int $disApprovedItemCount
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderRecord
     */
    public function setDisApprovedItemCount($disApprovedItemCount)
    {
      $this->disApprovedItemCount = $disApprovedItemCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisApprovalReasonListDownloadUrl()
    {
      return $this->disApprovalReasonListDownloadUrl;
    }

    /**
     * @param string $disApprovalReasonListDownloadUrl
     * @return \Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderRecord
     */
    public function setDisApprovalReasonListDownloadUrl($disApprovalReasonListDownloadUrl)
    {
      $this->disApprovalReasonListDownloadUrl = $disApprovalReasonListDownloadUrl;
      return $this;
    }

}
