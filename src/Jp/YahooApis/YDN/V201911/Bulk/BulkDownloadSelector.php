<?php

namespace Jp\YahooApis\YDN\V201911\Bulk;

class BulkDownloadSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $campaignIds
     */
    protected $campaignIds = null;

    /**
     * @var long[] $adGroupIds
     */
    protected $adGroupIds = null;

    /**
     * @var long[] $adIds
     */
    protected $adIds = null;

    /**
     * @var long[] $mediaIds
     */
    protected $mediaIds = null;

    /**
     * @var UserStatus[] $campaignUserStatuses
     */
    protected $campaignUserStatuses = null;

    /**
     * @var UserStatus[] $adGroupUserStatuses
     */
    protected $adGroupUserStatuses = null;

    /**
     * @var UserStatus[] $adGroupAdUserStatuses
     */
    protected $adGroupAdUserStatuses = null;

    /**
     * @var UserStatus[] $mediaUserStatuses
     */
    protected $mediaUserStatuses = null;

    /**
     * @var ApprovalStatus[] $adGroupAdApprovalStatuses
     */
    protected $adGroupAdApprovalStatuses = null;

    /**
     * @var MediaApprovalStatus[] $mediaApprovalStatuses
     */
    protected $mediaApprovalStatuses = null;

    /**
     * @var EntityType $entityTypes
     */
    protected $entityTypes = null;

    /**
     * @var DownloadBulkJob $downloadBulkJob
     */
    protected $downloadBulkJob = null;

    /**
     * @var BulkDownloadType $downloadType
     */
    protected $downloadType = null;

    /**
     * @var BulkLang $lang
     */
    protected $lang = null;

    /**
     * @var BulkOutput $output
     */
    protected $output = null;

    /**
     * @var BulkEncoding $encoding
     */
    protected $encoding = null;

    /**
     * @param int $accountId
     * @param BulkOutput $output
     * @param BulkEncoding $encoding
     */
    public function __construct($accountId, $output, $encoding)
    {
      $this->accountId = $accountId;
      $this->output = $output;
      $this->encoding = $encoding;
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
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCampaignIds()
    {
      return $this->campaignIds;
    }

    /**
     * @param long[] $campaignIds
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setCampaignIds(array $campaignIds = null)
    {
      $this->campaignIds = $campaignIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAdGroupIds()
    {
      return $this->adGroupIds;
    }

    /**
     * @param long[] $adGroupIds
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setAdGroupIds(array $adGroupIds = null)
    {
      $this->adGroupIds = $adGroupIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAdIds()
    {
      return $this->adIds;
    }

    /**
     * @param long[] $adIds
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setAdIds(array $adIds = null)
    {
      $this->adIds = $adIds;
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
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setMediaIds(array $mediaIds = null)
    {
      $this->mediaIds = $mediaIds;
      return $this;
    }

    /**
     * @return UserStatus[]
     */
    public function getCampaignUserStatuses()
    {
      return $this->campaignUserStatuses;
    }

    /**
     * @param UserStatus[] $campaignUserStatuses
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setCampaignUserStatuses(array $campaignUserStatuses = null)
    {
      $this->campaignUserStatuses = $campaignUserStatuses;
      return $this;
    }

    /**
     * @return UserStatus[]
     */
    public function getAdGroupUserStatuses()
    {
      return $this->adGroupUserStatuses;
    }

    /**
     * @param UserStatus[] $adGroupUserStatuses
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setAdGroupUserStatuses(array $adGroupUserStatuses = null)
    {
      $this->adGroupUserStatuses = $adGroupUserStatuses;
      return $this;
    }

    /**
     * @return UserStatus[]
     */
    public function getAdGroupAdUserStatuses()
    {
      return $this->adGroupAdUserStatuses;
    }

    /**
     * @param UserStatus[] $adGroupAdUserStatuses
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setAdGroupAdUserStatuses(array $adGroupAdUserStatuses = null)
    {
      $this->adGroupAdUserStatuses = $adGroupAdUserStatuses;
      return $this;
    }

    /**
     * @return UserStatus[]
     */
    public function getMediaUserStatuses()
    {
      return $this->mediaUserStatuses;
    }

    /**
     * @param UserStatus[] $mediaUserStatuses
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setMediaUserStatuses(array $mediaUserStatuses = null)
    {
      $this->mediaUserStatuses = $mediaUserStatuses;
      return $this;
    }

    /**
     * @return ApprovalStatus[]
     */
    public function getAdGroupAdApprovalStatuses()
    {
      return $this->adGroupAdApprovalStatuses;
    }

    /**
     * @param ApprovalStatus[] $adGroupAdApprovalStatuses
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setAdGroupAdApprovalStatuses(array $adGroupAdApprovalStatuses = null)
    {
      $this->adGroupAdApprovalStatuses = $adGroupAdApprovalStatuses;
      return $this;
    }

    /**
     * @return MediaApprovalStatus[]
     */
    public function getMediaApprovalStatuses()
    {
      return $this->mediaApprovalStatuses;
    }

    /**
     * @param MediaApprovalStatus[] $mediaApprovalStatuses
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setMediaApprovalStatuses(array $mediaApprovalStatuses = null)
    {
      $this->mediaApprovalStatuses = $mediaApprovalStatuses;
      return $this;
    }

    /**
     * @return EntityType
     */
    public function getEntityTypes()
    {
      return $this->entityTypes;
    }

    /**
     * @param EntityType $entityTypes
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setEntityTypes($entityTypes)
    {
      $this->entityTypes = $entityTypes;
      return $this;
    }

    /**
     * @return DownloadBulkJob
     */
    public function getDownloadBulkJob()
    {
      return $this->downloadBulkJob;
    }

    /**
     * @param DownloadBulkJob $downloadBulkJob
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setDownloadBulkJob($downloadBulkJob)
    {
      $this->downloadBulkJob = $downloadBulkJob;
      return $this;
    }

    /**
     * @return BulkDownloadType
     */
    public function getDownloadType()
    {
      return $this->downloadType;
    }

    /**
     * @param BulkDownloadType $downloadType
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setDownloadType($downloadType)
    {
      $this->downloadType = $downloadType;
      return $this;
    }

    /**
     * @return BulkLang
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param BulkLang $lang
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

    /**
     * @return BulkOutput
     */
    public function getOutput()
    {
      return $this->output;
    }

    /**
     * @param BulkOutput $output
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setOutput($output)
    {
      $this->output = $output;
      return $this;
    }

    /**
     * @return BulkEncoding
     */
    public function getEncoding()
    {
      return $this->encoding;
    }

    /**
     * @param BulkEncoding $encoding
     * @return \Jp\YahooApis\YDN\V201911\Bulk\BulkDownloadSelector
     */
    public function setEncoding($encoding)
    {
      $this->encoding = $encoding;
      return $this;
    }

}
