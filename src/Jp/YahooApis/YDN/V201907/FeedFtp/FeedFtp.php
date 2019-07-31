<?php

namespace Jp\YahooApis\YDN\V201907\FeedFtp;

class FeedFtp
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
     * @var ItemListUploadType $itemListUploadType
     */
    protected $itemListUploadType = null;

    /**
     * @var Schedule $schedule
     */
    protected $schedule = null;

    /**
     * @var string $feedUrl
     */
    protected $feedUrl = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $userPassword
     */
    protected $userPassword = null;

    /**
     * @var ActiveStatus $activeStatus
     */
    protected $activeStatus = null;

    /**
     * @param int $feedHolderId
     */
    public function __construct($feedHolderId)
    {
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
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\FeedFtp
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
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\FeedFtp
     */
    public function setFeedHolderId($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
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
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\FeedFtp
     */
    public function setItemListUploadType($itemListUploadType)
    {
      $this->itemListUploadType = $itemListUploadType;
      return $this;
    }

    /**
     * @return Schedule
     */
    public function getSchedule()
    {
      return $this->schedule;
    }

    /**
     * @param Schedule $schedule
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\FeedFtp
     */
    public function setSchedule($schedule)
    {
      $this->schedule = $schedule;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedUrl()
    {
      return $this->feedUrl;
    }

    /**
     * @param string $feedUrl
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\FeedFtp
     */
    public function setFeedUrl($feedUrl)
    {
      $this->feedUrl = $feedUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\FeedFtp
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
      return $this->userPassword;
    }

    /**
     * @param string $userPassword
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\FeedFtp
     */
    public function setUserPassword($userPassword)
    {
      $this->userPassword = $userPassword;
      return $this;
    }

    /**
     * @return ActiveStatus
     */
    public function getActiveStatus()
    {
      return $this->activeStatus;
    }

    /**
     * @param ActiveStatus $activeStatus
     * @return \Jp\YahooApis\YDN\V201907\FeedFtp\FeedFtp
     */
    public function setActiveStatus($activeStatus)
    {
      $this->activeStatus = $activeStatus;
      return $this;
    }

}
