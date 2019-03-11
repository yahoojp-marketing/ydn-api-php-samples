<?php

namespace Jp\YahooApis\YDN\V201903\Video;

class VideoSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $mediaIds
     */
    protected $mediaIds = null;

    /**
     * @var UserStatus[] $userStatuses
     */
    protected $userStatuses = null;

    /**
     * @var ApprovalStatus[] $approvalStatuses
     */
    protected $approvalStatuses = null;

    /**
     * @var VideoProcessStatus[] $processStatuses
     */
    protected $processStatuses = null;

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
     * @return \Jp\YahooApis\YDN\V201903\Video\VideoSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getMediaIds()
    {
      return $this->mediaIds;
    }

    /**
     * @param long[] $mediaIds
     * @return \Jp\YahooApis\YDN\V201903\Video\VideoSelector
     */
    public function setMediaIds(array $mediaIds = null)
    {
      $this->mediaIds = $mediaIds;
      return $this;
    }

    /**
     * @return UserStatus[]
     */
    public function getUserStatuses()
    {
      return $this->userStatuses;
    }

    /**
     * @param UserStatus[] $userStatuses
     * @return \Jp\YahooApis\YDN\V201903\Video\VideoSelector
     */
    public function setUserStatuses(array $userStatuses = null)
    {
      $this->userStatuses = $userStatuses;
      return $this;
    }

    /**
     * @return ApprovalStatus[]
     */
    public function getApprovalStatuses()
    {
      return $this->approvalStatuses;
    }

    /**
     * @param ApprovalStatus[] $approvalStatuses
     * @return \Jp\YahooApis\YDN\V201903\Video\VideoSelector
     */
    public function setApprovalStatuses(array $approvalStatuses = null)
    {
      $this->approvalStatuses = $approvalStatuses;
      return $this;
    }

    /**
     * @return VideoProcessStatus[]
     */
    public function getProcessStatuses()
    {
      return $this->processStatuses;
    }

    /**
     * @param VideoProcessStatus[] $processStatuses
     * @return \Jp\YahooApis\YDN\V201903\Video\VideoSelector
     */
    public function setProcessStatuses(array $processStatuses = null)
    {
      $this->processStatuses = $processStatuses;
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
     * @return \Jp\YahooApis\YDN\V201903\Video\VideoSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
