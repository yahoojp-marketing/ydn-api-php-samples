<?php

namespace Jp\YahooApis\YDN\V201903\Label;

class LabelValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var Label $label
     */
    protected $label = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Label
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param Label $label
     * @return \Jp\YahooApis\YDN\V201903\Label\LabelValues
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
