<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class MediaAdFormatValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var MediaAdFormat[] $mediaAdFormat
     */
    protected $mediaAdFormat = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MediaAdFormat[]
     */
    public function getMediaAdFormat()
    {
      return $this->mediaAdFormat;
    }

    /**
     * @param MediaAdFormat[] $mediaAdFormat
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\MediaAdFormatValues
     */
    public function setMediaAdFormat(array $mediaAdFormat = null)
    {
      $this->mediaAdFormat = $mediaAdFormat;
      return $this;
    }

}
