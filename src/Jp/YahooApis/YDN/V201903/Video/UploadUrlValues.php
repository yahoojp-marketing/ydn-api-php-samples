<?php

namespace Jp\YahooApis\YDN\V201903\Video;

class UploadUrlValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var UploadUrlValue $uploadUrlValue
     */
    protected $uploadUrlValue = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return UploadUrlValue
     */
    public function getUploadUrlValue()
    {
      return $this->uploadUrlValue;
    }

    /**
     * @param UploadUrlValue $uploadUrlValue
     * @return \Jp\YahooApis\YDN\V201903\Video\UploadUrlValues
     */
    public function setUploadUrlValue($uploadUrlValue)
    {
      $this->uploadUrlValue = $uploadUrlValue;
      return $this;
    }

}
