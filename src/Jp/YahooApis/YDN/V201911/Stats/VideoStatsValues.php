<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class VideoStatsValues extends StatsValues
{

    /**
     * @var int $mediaId
     */
    protected $mediaId = null;

    /**
     * @var string $videoName
     */
    protected $videoName = null;

    /**
     * @var string $videoTitle
     */
    protected $videoTitle = null;

    /**
     * @var Stats $stats
     */
    protected $stats = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getMediaId()
    {
      return $this->mediaId;
    }

    /**
     * @param int $mediaId
     * @return \Jp\YahooApis\YDN\V201911\Stats\VideoStatsValues
     */
    public function setMediaId($mediaId)
    {
      $this->mediaId = $mediaId;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoName()
    {
      return $this->videoName;
    }

    /**
     * @param string $videoName
     * @return \Jp\YahooApis\YDN\V201911\Stats\VideoStatsValues
     */
    public function setVideoName($videoName)
    {
      $this->videoName = $videoName;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoTitle()
    {
      return $this->videoTitle;
    }

    /**
     * @param string $videoTitle
     * @return \Jp\YahooApis\YDN\V201911\Stats\VideoStatsValues
     */
    public function setVideoTitle($videoTitle)
    {
      $this->videoTitle = $videoTitle;
      return $this;
    }

    /**
     * @return Stats
     */
    public function getStats()
    {
      return $this->stats;
    }

    /**
     * @param Stats $stats
     * @return \Jp\YahooApis\YDN\V201911\Stats\VideoStatsValues
     */
    public function setStats($stats)
    {
      $this->stats = $stats;
      return $this;
    }

}
