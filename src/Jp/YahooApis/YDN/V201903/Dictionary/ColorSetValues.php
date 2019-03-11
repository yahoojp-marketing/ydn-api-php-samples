<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class ColorSetValues extends \Jp\YahooApis\YDN\V201903\ReturnValue
{

    /**
     * @var int $colorSetId
     */
    protected $colorSetId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var ColorSet[] $colorSet
     */
    protected $colorSet = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getColorSetId()
    {
      return $this->colorSetId;
    }

    /**
     * @param int $colorSetId
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\ColorSetValues
     */
    public function setColorSetId($colorSetId)
    {
      $this->colorSetId = $colorSetId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\ColorSetValues
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return ColorSet[]
     */
    public function getColorSet()
    {
      return $this->colorSet;
    }

    /**
     * @param ColorSet[] $colorSet
     * @return \Jp\YahooApis\YDN\V201903\Dictionary\ColorSetValues
     */
    public function setColorSet(array $colorSet = null)
    {
      $this->colorSet = $colorSet;
      return $this;
    }

}
