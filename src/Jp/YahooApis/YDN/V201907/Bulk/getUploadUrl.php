<?php

namespace Jp\YahooApis\YDN\V201907\Bulk;

class getUploadUrl
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var string $uploadBulkJobName
     */
    protected $uploadBulkJobName = null;

    /**
     * @param int $accountId
     * @param string $uploadBulkJobName
     */
    public function __construct($accountId, $uploadBulkJobName)
    {
      $this->accountId = $accountId;
      $this->uploadBulkJobName = $uploadBulkJobName;
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
     * @return \Jp\YahooApis\YDN\V201907\Bulk\getUploadUrl
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploadBulkJobName()
    {
      return $this->uploadBulkJobName;
    }

    /**
     * @param string $uploadBulkJobName
     * @return \Jp\YahooApis\YDN\V201907\Bulk\getUploadUrl
     */
    public function setUploadBulkJobName($uploadBulkJobName)
    {
      $this->uploadBulkJobName = $uploadBulkJobName;
      return $this;
    }

}
