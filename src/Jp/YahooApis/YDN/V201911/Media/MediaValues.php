<?php

namespace Jp\YahooApis\YDN\V201911\Media;

class MediaValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var MediaRecord $mediaRecord
     */
    protected $mediaRecord = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MediaRecord
     */
    public function getMediaRecord()
    {
      return $this->mediaRecord;
    }

    /**
     * @param MediaRecord $mediaRecord
     * @return \Jp\YahooApis\YDN\V201911\Media\MediaValues
     */
    public function setMediaRecord($mediaRecord)
    {
      $this->mediaRecord = $mediaRecord;
      return $this;
    }

}
