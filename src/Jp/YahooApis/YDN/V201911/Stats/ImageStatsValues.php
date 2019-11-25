<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class ImageStatsValues extends StatsValues
{

    /**
     * @var int $mediaId
     */
    protected $mediaId = null;

    /**
     * @var string $mediaName
     */
    protected $mediaName = null;

    /**
     * @var string $mediaTitle
     */
    protected $mediaTitle = null;

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
     * @return \Jp\YahooApis\YDN\V201911\Stats\ImageStatsValues
     */
    public function setMediaId($mediaId)
    {
      $this->mediaId = $mediaId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaName()
    {
      return $this->mediaName;
    }

    /**
     * @param string $mediaName
     * @return \Jp\YahooApis\YDN\V201911\Stats\ImageStatsValues
     */
    public function setMediaName($mediaName)
    {
      $this->mediaName = $mediaName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaTitle()
    {
      return $this->mediaTitle;
    }

    /**
     * @param string $mediaTitle
     * @return \Jp\YahooApis\YDN\V201911\Stats\ImageStatsValues
     */
    public function setMediaTitle($mediaTitle)
    {
      $this->mediaTitle = $mediaTitle;
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
     * @return \Jp\YahooApis\YDN\V201911\Stats\ImageStatsValues
     */
    public function setStats($stats)
    {
      $this->stats = $stats;
      return $this;
    }

}
