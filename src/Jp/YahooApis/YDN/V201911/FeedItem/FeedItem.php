<?php

namespace Jp\YahooApis\YDN\V201911\FeedItem;

class FeedItem
{

    /**
     * @var int $feedHolderId
     */
    protected $feedHolderId = null;

    /**
     * @var string $itemId
     */
    protected $itemId = null;

    /**
     * @var int $inStock
     */
    protected $inStock = null;

    /**
     * @var int $capacity
     */
    protected $capacity = null;

    /**
     * @var isRemoveFlg $isRemoveCapacity
     */
    protected $isRemoveCapacity = null;

    /**
     * @var int $price
     */
    protected $price = null;

    /**
     * @var isRemoveFlg $isRemovePrice
     */
    protected $isRemovePrice = null;

    /**
     * @var int $salePrice
     */
    protected $salePrice = null;

    /**
     * @var isRemoveFlg $isRemoveSalePrice
     */
    protected $isRemoveSalePrice = null;

    /**
     * @var string $formattedPrice
     */
    protected $formattedPrice = null;

    /**
     * @var isRemoveFlg $isRemoveFormattedPrice
     */
    protected $isRemoveFormattedPrice = null;

    /**
     * @var string $formattedSalePrice
     */
    protected $formattedSalePrice = null;

    /**
     * @var isRemoveFlg $isRemoveFormattedSalePrice
     */
    protected $isRemoveFormattedSalePrice = null;

    /**
     * @var int $displaySettings
     */
    protected $displaySettings = null;

    /**
     * @var Availability $availability
     */
    protected $availability = null;

    /**
     * @param int $feedHolderId
     */
    public function __construct($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
    }

    /**
     * @return int
     */
    public function getFeedHolderId()
    {
      return $this->feedHolderId;
    }

    /**
     * @param int $feedHolderId
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setFeedHolderId($feedHolderId)
    {
      $this->feedHolderId = $feedHolderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param string $itemId
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getInStock()
    {
      return $this->inStock;
    }

    /**
     * @param int $inStock
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setInStock($inStock)
    {
      $this->inStock = $inStock;
      return $this;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
      return $this->capacity;
    }

    /**
     * @param int $capacity
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setCapacity($capacity)
    {
      $this->capacity = $capacity;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveCapacity()
    {
      return $this->isRemoveCapacity;
    }

    /**
     * @param isRemoveFlg $isRemoveCapacity
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setIsRemoveCapacity($isRemoveCapacity)
    {
      $this->isRemoveCapacity = $isRemoveCapacity;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param int $price
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemovePrice()
    {
      return $this->isRemovePrice;
    }

    /**
     * @param isRemoveFlg $isRemovePrice
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setIsRemovePrice($isRemovePrice)
    {
      $this->isRemovePrice = $isRemovePrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getSalePrice()
    {
      return $this->salePrice;
    }

    /**
     * @param int $salePrice
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setSalePrice($salePrice)
    {
      $this->salePrice = $salePrice;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveSalePrice()
    {
      return $this->isRemoveSalePrice;
    }

    /**
     * @param isRemoveFlg $isRemoveSalePrice
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setIsRemoveSalePrice($isRemoveSalePrice)
    {
      $this->isRemoveSalePrice = $isRemoveSalePrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormattedPrice()
    {
      return $this->formattedPrice;
    }

    /**
     * @param string $formattedPrice
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setFormattedPrice($formattedPrice)
    {
      $this->formattedPrice = $formattedPrice;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveFormattedPrice()
    {
      return $this->isRemoveFormattedPrice;
    }

    /**
     * @param isRemoveFlg $isRemoveFormattedPrice
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setIsRemoveFormattedPrice($isRemoveFormattedPrice)
    {
      $this->isRemoveFormattedPrice = $isRemoveFormattedPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormattedSalePrice()
    {
      return $this->formattedSalePrice;
    }

    /**
     * @param string $formattedSalePrice
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setFormattedSalePrice($formattedSalePrice)
    {
      $this->formattedSalePrice = $formattedSalePrice;
      return $this;
    }

    /**
     * @return isRemoveFlg
     */
    public function getIsRemoveFormattedSalePrice()
    {
      return $this->isRemoveFormattedSalePrice;
    }

    /**
     * @param isRemoveFlg $isRemoveFormattedSalePrice
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setIsRemoveFormattedSalePrice($isRemoveFormattedSalePrice)
    {
      $this->isRemoveFormattedSalePrice = $isRemoveFormattedSalePrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getDisplaySettings()
    {
      return $this->displaySettings;
    }

    /**
     * @param int $displaySettings
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setDisplaySettings($displaySettings)
    {
      $this->displaySettings = $displaySettings;
      return $this;
    }

    /**
     * @return Availability
     */
    public function getAvailability()
    {
      return $this->availability;
    }

    /**
     * @param Availability $availability
     * @return \Jp\YahooApis\YDN\V201911\FeedItem\FeedItem
     */
    public function setAvailability($availability)
    {
      $this->availability = $availability;
      return $this;
    }

}
