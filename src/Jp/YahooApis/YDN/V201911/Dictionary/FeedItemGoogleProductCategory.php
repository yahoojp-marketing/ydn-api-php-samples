<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class FeedItemGoogleProductCategory
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $parent
     */
    protected $parent = null;

    /**
     * @var string $order
     */
    protected $order = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $fullName
     */
    protected $fullName = null;

    /**
     * @var FeedItemGoogleProductCategory[] $child
     */
    protected $child = null;

    /**
     * @param string $id
     * @param string $order
     * @param string $name
     * @param string $fullName
     */
    public function __construct($id, $order, $name, $fullName)
    {
      $this->id = $id;
      $this->order = $order;
      $this->name = $name;
      $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategory
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param string $parent
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategory
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param string $order
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategory
     */
    public function setOrder($order)
    {
      $this->order = $order;
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
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategory
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
      return $this->fullName;
    }

    /**
     * @param string $fullName
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategory
     */
    public function setFullName($fullName)
    {
      $this->fullName = $fullName;
      return $this;
    }

    /**
     * @return FeedItemGoogleProductCategory[]
     */
    public function getChild()
    {
      return $this->child;
    }

    /**
     * @param FeedItemGoogleProductCategory[] $child
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategory
     */
    public function setChild(array $child = null)
    {
      $this->child = $child;
      return $this;
    }

}
