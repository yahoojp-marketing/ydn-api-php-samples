<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupLabel;

class mutate
{

    /**
     * @var AdGroupLabelOperation $operations
     */
    protected $operations = null;

    /**
     * @param AdGroupLabelOperation $operations
     */
    public function __construct($operations)
    {
      $this->operations = $operations;
    }

    /**
     * @return AdGroupLabelOperation
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param AdGroupLabelOperation $operations
     * @return \Jp\YahooApis\YDN\V201907\AdGroupLabel\mutate
     */
    public function setOperations($operations)
    {
      $this->operations = $operations;
      return $this;
    }

}
