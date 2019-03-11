<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupLabel;

class AdGroupLabelValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var AdGroupLabel $adGroupLabel
     */
    protected $adGroupLabel = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroupLabel
     */
    public function getAdGroupLabel()
    {
      return $this->adGroupLabel;
    }

    /**
     * @param AdGroupLabel $adGroupLabel
     * @return \Jp\YahooApis\YDN\V201903\AdGroupLabel\AdGroupLabelValues
     */
    public function setAdGroupLabel($adGroupLabel)
    {
      $this->adGroupLabel = $adGroupLabel;
      return $this;
    }

}
