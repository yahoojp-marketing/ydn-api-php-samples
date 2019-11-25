<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class CampaignDownloadSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var MigrationLang $lang
     */
    protected $lang = null;

    
    public function __construct()
    {
    
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
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\CampaignDownloadSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
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
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\CampaignDownloadSelector
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

}
