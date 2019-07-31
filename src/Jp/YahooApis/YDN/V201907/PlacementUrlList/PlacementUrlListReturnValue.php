<?php

namespace Jp\YahooApis\YDN\V201907\PlacementUrlList;

class PlacementUrlListReturnValue extends \Jp\YahooApis\YDN\V201907\ListReturnValue
{

    /**
     * @var PlacementUrlListValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PlacementUrlListValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param PlacementUrlListValues[] $values
     * @return \Jp\YahooApis\YDN\V201907\PlacementUrlList\PlacementUrlListReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
