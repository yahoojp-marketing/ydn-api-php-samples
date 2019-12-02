<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class CampaignUploadSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    
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
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\CampaignUploadSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

}
