<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class CampaignDownloadUrlValue
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var MigrationScope $downloadScope
     */
    protected $downloadScope = null;

    /**
     * @var MigrationLang $lang
     */
    protected $lang = null;

    /**
     * @var string $downloadUrl
     */
    protected $downloadUrl = null;

    /**
     * @param MigrationScope $downloadScope
     * @param MigrationLang $lang
     * @param string $downloadUrl
     */
    public function __construct($downloadScope, $lang, $downloadUrl)
    {
      $this->downloadScope = $downloadScope;
      $this->lang = $lang;
      $this->downloadUrl = $downloadUrl;
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
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\CampaignDownloadUrlValue
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return MigrationScope
     */
    public function getDownloadScope()
    {
      return $this->downloadScope;
    }

    /**
     * @param MigrationScope $downloadScope
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\CampaignDownloadUrlValue
     */
    public function setDownloadScope($downloadScope)
    {
      $this->downloadScope = $downloadScope;
      return $this;
    }

    /**
     * @return MigrationLang
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param MigrationLang $lang
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\CampaignDownloadUrlValue
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadUrl()
    {
      return $this->downloadUrl;
    }

    /**
     * @param string $downloadUrl
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\CampaignDownloadUrlValue
     */
    public function setDownloadUrl($downloadUrl)
    {
      $this->downloadUrl = $downloadUrl;
      return $this;
    }

}
