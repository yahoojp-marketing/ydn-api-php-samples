<?php

namespace Jp\YahooApis\YDN\V201911\PlacementUrlList;

class PlacementUrlList
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $urlListId
     */
    protected $urlListId = null;

    /**
     * @var string $urlListName
     */
    protected $urlListName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var UnknownDomainFlg $isUnknownDomain
     */
    protected $isUnknownDomain = null;

    /**
     * @var UrlList[] $urls
     */
    protected $urls = null;

    /**
     * @param int $accountId
     */
    public function __construct($accountId)
    {
      $this->accountId = $accountId;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlList
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUrlListId()
    {
      return $this->urlListId;
    }

    /**
     * @param int $urlListId
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlList
     */
    public function setUrlListId($urlListId)
    {
      $this->urlListId = $urlListId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlListName()
    {
      return $this->urlListName;
    }

    /**
     * @param string $urlListName
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlList
     */
    public function setUrlListName($urlListName)
    {
      $this->urlListName = $urlListName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlList
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return UnknownDomainFlg
     */
    public function getIsUnknownDomain()
    {
      return $this->isUnknownDomain;
    }

    /**
     * @param UnknownDomainFlg $isUnknownDomain
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlList
     */
    public function setIsUnknownDomain($isUnknownDomain)
    {
      $this->isUnknownDomain = $isUnknownDomain;
      return $this;
    }

    /**
     * @return UrlList[]
     */
    public function getUrls()
    {
      return $this->urls;
    }

    /**
     * @param UrlList[] $urls
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlList
     */
    public function setUrls(array $urls = null)
    {
      $this->urls = $urls;
      return $this;
    }

}
