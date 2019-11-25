<?php

namespace Jp\YahooApis\YDN\V201911\PlacementUrlList;

class PlacementUrlListPage extends \Jp\YahooApis\YDN\V201911\Page
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
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlListPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
