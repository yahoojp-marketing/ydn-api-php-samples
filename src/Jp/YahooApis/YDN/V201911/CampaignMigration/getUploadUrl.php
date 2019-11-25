<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class getUploadUrl
{

    /**
     * @var CampaignUploadSelector $selector
     */
    protected $selector = null;

    /**
     * @param CampaignUploadSelector $selector
     */
    public function __construct($selector)
    {
      $this->selector = $selector;
    }

    /**
     * @return CampaignUploadSelector
     */
    public function getSelector()
    {
      return $this->selector;
    }

    /**
     * @param CampaignUploadSelector $selector
     * @return \Jp\YahooApis\YDN\V201911\CampaignMigration\getUploadUrl
     */
    public function setSelector($selector)
    {
      $this->selector = $selector;
      return $this;
    }

}
