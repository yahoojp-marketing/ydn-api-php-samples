<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupTarget;

class OsVersionTarget extends Target
{

    /**
     * @var string $osVersion
     */
    protected $osVersion = null;

    /**
     * @param TargetType $type
     */
    public function __construct($type)
    {
      parent::__construct($type);
    }

    /**
     * @return string
     */
    public function getOsVersion()
    {
      return $this->osVersion;
    }

    /**
     * @param string $osVersion
     * @return \Jp\YahooApis\YDN\V201907\AdGroupTarget\OsVersionTarget
     */
    public function setOsVersion($osVersion)
    {
      $this->osVersion = $osVersion;
      return $this;
    }

}
