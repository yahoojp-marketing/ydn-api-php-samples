<?php

namespace Jp\YahooApis\YDN\V201903\RetargetingList;

class RetargetingListPage extends \Jp\YahooApis\YDN\V201903\Page
{

    /**
     * @var RetargetingListValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RetargetingListValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param RetargetingListValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingListPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
