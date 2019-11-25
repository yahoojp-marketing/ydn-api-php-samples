<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class getMigrationStatus
{

    /**
     * @var MigrationStatusSelector $selector
     */
    protected $selector = null;

    /**
     * @param MigrationStatusSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return MigrationStatusSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param MigrationStatusSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\getMigrationStatus
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
