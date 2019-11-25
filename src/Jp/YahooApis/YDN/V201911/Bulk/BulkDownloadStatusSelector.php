<?php

namespace Jp\YahooApis\YDN\V201911\Bulk;

class BulkDownloadStatusSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $downloadBulkJobIds
     */
    protected $downloadBulkJobIds = null;

    /**
     * @var DownloadBulkJobStatus[] $downloadBulkJobStatus
     */
    protected $downloadBulkJobStatus = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Paging $paging
     */
    protected $paging = null;

    /**
     * @param int $accountId
     * @param long[] $downloadBulkJobIds
     */
    public function __construct($accountId, array $downloadBulkJobIds)
    {
      $this->accountId = $accountId;
      $this->downloadBulkJobIds = $downloadBulkJobIds;
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
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadStatusSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getDownloadBulkJobIds()
    {
      return $this->downloadBulkJobIds;
    }

    /**
     * @param long[] $downloadBulkJobIds
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadStatusSelector
     */
    public function setDownloadBulkJobIds(array $downloadBulkJobIds)
    {
      $this->downloadBulkJobIds = $downloadBulkJobIds;
      return $this;
    }

    /**
     * @return DownloadBulkJobStatus[]
     */
    public function getDownloadBulkJobStatus()
    {
      return $this->downloadBulkJobStatus;
    }

    /**
     * @param DownloadBulkJobStatus[] $downloadBulkJobStatus
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadStatusSelector
     */
    public function setDownloadBulkJobStatus(array $downloadBulkJobStatus = null)
    {
      $this->downloadBulkJobStatus = $downloadBulkJobStatus;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201911\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201911\Paging $paging
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadStatusSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
