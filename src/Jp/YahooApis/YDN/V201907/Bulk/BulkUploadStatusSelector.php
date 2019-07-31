<?php

namespace Jp\YahooApis\YDN\V201907\Bulk;

class BulkUploadStatusSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $uploadBulkJobIds
     */
    protected $uploadBulkJobIds = null;

    /**
     * @var UploadBulkJobStatus[] $uploadBulkJobStatus
     */
    protected $uploadBulkJobStatus = null;

    /**
     * @var \Jp\YahooApis\YDN\V201907\Paging $paging
     */
    protected $paging = null;

    /**
     * @param int $accountId
     * @param long[] $uploadBulkJobIds
     */
    public function __construct($accountId, array $uploadBulkJobIds)
    {
      $this->accountId = $accountId;
      $this->uploadBulkJobIds = $uploadBulkJobIds;
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
     * @return \Jp\YahooApis\YDN\V201907\Bulk\BulkUploadStatusSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getUploadBulkJobIds()
    {
      return $this->uploadBulkJobIds;
    }

    /**
     * @param long[] $uploadBulkJobIds
     * @return \Jp\YahooApis\YDN\V201907\Bulk\BulkUploadStatusSelector
     */
    public function setUploadBulkJobIds(array $uploadBulkJobIds)
    {
      $this->uploadBulkJobIds = $uploadBulkJobIds;
      return $this;
    }

    /**
     * @return UploadBulkJobStatus[]
     */
    public function getUploadBulkJobStatus()
    {
      return $this->uploadBulkJobStatus;
    }

    /**
     * @param UploadBulkJobStatus[] $uploadBulkJobStatus
     * @return \Jp\YahooApis\YDN\V201907\Bulk\BulkUploadStatusSelector
     */
    public function setUploadBulkJobStatus(array $uploadBulkJobStatus = null)
    {
      $this->uploadBulkJobStatus = $uploadBulkJobStatus;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201907\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201907\Paging $paging
     * @return \Jp\YahooApis\YDN\V201907\Bulk\BulkUploadStatusSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
