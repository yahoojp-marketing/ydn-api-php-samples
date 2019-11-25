<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class UploadUrlValue
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var string $uploadUrl
     */
    protected $uploadUrl = null;

    /**
     * @param string $uploadUrl
     */
    public function __construct($uploadUrl)
    {
      $this->uploadUrl = $uploadUrl;
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
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\UploadUrlValue
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
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
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\UploadUrlValue
     */
    public function setUploadUrl($uploadUrl)
    {
      $this->uploadUrl = $uploadUrl;
      return $this;
    }

}
