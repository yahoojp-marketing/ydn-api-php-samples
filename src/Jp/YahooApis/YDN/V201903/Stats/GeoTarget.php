<?php

namespace Jp\YahooApis\YDN\V201903\Stats;

class GeoTarget extends Target
{

    /**
     * @var string $geoNameJa
     */
    protected $geoNameJa = null;

    /**
     * @var string $geoNameEn
     */
    protected $geoNameEn = null;

    /**
     * @param TargetType $type
     */
    public function __construct($type)
    {
      parent::__construct($type);
    }

    /**
     * @return string
     */
    public function getGeoNameJa()
    {
      return $this->geoNameJa;
    }

    /**
     * @param string $geoNameJa
     * @return \Jp\YahooApis\YDN\V201903\Stats\GeoTarget
     */
    public function setGeoNameJa($geoNameJa)
    {
      $this->geoNameJa = $geoNameJa;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeoNameEn()
    {
      return $this->geoNameEn;
    }

    /**
     * @param string $geoNameEn
     * @return \Jp\YahooApis\YDN\V201903\Stats\GeoTarget
     */
    public function setGeoNameEn($geoNameEn)
    {
      $this->geoNameEn = $geoNameEn;
      return $this;
    }

}
