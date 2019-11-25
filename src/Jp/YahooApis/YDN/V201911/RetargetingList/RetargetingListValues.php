<?php

namespace Jp\YahooApis\YDN\V201911\RetargetingList;

class RetargetingListValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var RetargetingList $retargetingList
     */
    protected $retargetingList = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RetargetingList
     */
    public function getRetargetingList()
    {
      return $this->retargetingList;
    }

    /**
     * @param RetargetingList $retargetingList
     * @return \Jp\YahooApis\YDN\V201911\RetargetingList\RetargetingListValues
     */
    public function setRetargetingList($retargetingList)
    {
      $this->retargetingList = $retargetingList;
      return $this;
    }

}
