<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupAdLabel;

class AdGroupAdLabelValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var AdGroupAdLabel $adGroupAdLabel
     */
    protected $adGroupAdLabel = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroupAdLabel
     */
    public function getAdGroupAdLabel()
    {
      return $this->adGroupAdLabel;
    }

    /**
     * @param AdGroupAdLabel $adGroupAdLabel
     * @return \Jp\YahooApis\YDN\V201911\AdGroupAdLabel\AdGroupAdLabelValues
     */
    public function setAdGroupAdLabel($adGroupAdLabel)
    {
      $this->adGroupAdLabel = $adGroupAdLabel;
      return $this;
    }

}
