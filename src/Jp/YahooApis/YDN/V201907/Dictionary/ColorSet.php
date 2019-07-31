<?php

namespace Jp\YahooApis\YDN\V201907\Dictionary;

class ColorSet
{

    /**
     * @var string $element
     */
    protected $element = null;

    /**
     * @var string $color
     */
    protected $color = null;

    /**
     * @param string $element
     * @param string $color
     */
    public function __construct($element, $color)
    {
      $this->element = $element;
      $this->color = $color;
    }

    /**
     * @return string
     */
    public function getElement()
    {
      return $this->element;
    }

    /**
     * @param string $element
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\ColorSet
     */
    public function setElement($element)
    {
      $this->element = $element;
      return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
      return $this->color;
    }

    /**
     * @param string $color
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\ColorSet
     */
    public function setColor($color)
    {
      $this->color = $color;
      return $this;
    }

}
