<?php

namespace Jp\YahooApis\YDN\V201903\Location;

class LocationReturnValue extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Jp\YahooApis\YDN\V201903\Location\LocationReturnValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
