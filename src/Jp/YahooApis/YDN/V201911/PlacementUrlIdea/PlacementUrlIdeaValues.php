<?php

namespace Jp\YahooApis\YDN\V201911\PlacementUrlIdea;

class PlacementUrlIdeaValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var PlacementUrlIdea $placementUrlIdea
     */
    protected $placementUrlIdea = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PlacementUrlIdea
     */
    public function getPlacementUrlIdea()
    {
      return $this->placementUrlIdea;
    }

    /**
     * @param PlacementUrlIdea $placementUrlIdea
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlIdea\PlacementUrlIdeaValues
     */
    public function setPlacementUrlIdea($placementUrlIdea)
    {
      $this->placementUrlIdea = $placementUrlIdea;
      return $this;
    }

}
