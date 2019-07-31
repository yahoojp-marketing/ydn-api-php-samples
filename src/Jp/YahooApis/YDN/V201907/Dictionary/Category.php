<?php

namespace Jp\YahooApis\YDN\V201907\Dictionary;

class Category
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var CategoryChildValues[] $child
     */
    protected $child = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
      $this->name = $name;
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
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\Category
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return CategoryChildValues[]
     */
    public function getChild()
    {
      return $this->child;
    }

    /**
     * @param CategoryChildValues[] $child
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\Category
     */
    public function setChild(array $child = null)
    {
      $this->child = $child;
      return $this;
    }

}
