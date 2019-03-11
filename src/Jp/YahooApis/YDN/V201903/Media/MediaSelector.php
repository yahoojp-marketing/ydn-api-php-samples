<?php

namespace Jp\YahooApis\YDN\V201903\Media;

class MediaSelector
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
     * @var MediaApprovalStatus[] $approvalStatuses
     */
    protected $approvalStatuses = null;

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
     * @return \Jp\YahooApis\YDN\V201903\Media\MediaSelector
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
     * @return \Jp\YahooApis\YDN\V201903\Media\MediaSelector
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
     * @return \Jp\YahooApis\YDN\V201903\Media\MediaSelector
     */
    public function setUserStatuses(array $userStatuses = null)
    {
      $this->userStatuses = $userStatuses;
      return $this;
    }

    /**
     * @return MediaApprovalStatus[]
     */
    public function getApprovalStatuses()
    {
      return $this->approvalStatuses;
    }

    /**
     * @param MediaApprovalStatus[] $approvalStatuses
     * @return \Jp\YahooApis\YDN\V201903\Media\MediaSelector
     */
    public function setApprovalStatuses(array $approvalStatuses = null)
    {
      $this->approvalStatuses = $approvalStatuses;
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
     * @return \Jp\YahooApis\YDN\V201903\Media\MediaSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
