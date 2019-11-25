<?php

namespace Jp\YahooApis\YDN\V201911\Media;

class Media
{

    /**
     * @var MediaType $mediaType
     */
    protected $mediaType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MediaType
     */
    public function getMediaType()
    {
      return $this->mediaType;
    }

    /**
     * @param MediaType $mediaType
     * @return \Jp\YahooApis\YDN\V201911\Media\Media
     */
    public function setMediaType($mediaType)
    {
      $this->mediaType = $mediaType;
      return $this;
    }

}
