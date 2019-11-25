<?php

namespace Jp\YahooApis\YDN\V201911\Media;

class MediaPage extends \Jp\YahooApis\YDN\V201911\Page
{

    /**
     * @var MediaValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MediaValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param MediaValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
