<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class MediaAdFormatPage extends \Jp\YahooApis\YDN\V201911\Page
{

    /**
     * @var MediaAdFormatValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MediaAdFormatValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param MediaAdFormatValues[] $values
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\MediaAdFormatPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
