<?php

namespace Jp\YahooApis\YDN\V201907\Video;

class VideoPage extends \Jp\YahooApis\YDN\V201907\Page
{

    /**
     * @var VideoValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return VideoValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param VideoValues[] $values
     * @return \Jp\YahooApis\YDN\V201907\Video\VideoPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
