<?php

namespace Jp\YahooApis\YDN\V201911\Video;

class VideoValues extends \Jp\YahooApis\YDN\V201911\ReturnValue
{

    /**
     * @var Video $video
     */
    protected $video = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Video
     */
    public function getVideo()
    {
      return $this->video;
    }

    /**
     * @param Video $video
     * @return \Jp\YahooApis\YDN\V201911\Video\VideoValues
     */
    public function setVideo($video)
    {
      $this->video = $video;
      return $this;
    }

}
