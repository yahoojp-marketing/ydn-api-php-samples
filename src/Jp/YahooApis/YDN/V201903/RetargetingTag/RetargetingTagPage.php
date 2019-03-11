<?php

namespace Jp\YahooApis\YDN\V201903\RetargetingTag;

class RetargetingTagPage extends \Jp\YahooApis\YDN\V201903\Page
{

    /**
     * @var RetargetingTagValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RetargetingTagValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param RetargetingTagValues[] $values
     * @return \Jp\YahooApis\YDN\V201903\RetargetingTag\RetargetingTagPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
