<?php

namespace Jp\YahooApis\YDN\V201911\PlacementUrlList;

class PlacementUrlListSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $urlListIds
     */
    protected $urlListIds = null;

    /**
     * @var \Jp\YahooApis\YDN\V201911\Paging $paging
     */
    protected $paging = null;

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
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlListSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getUrlListIds()
    {
      return $this->urlListIds;
    }

    /**
     * @param long[] $urlListIds
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlListSelector
     */
    public function setUrlListIds(array $urlListIds = null)
    {
      $this->urlListIds = $urlListIds;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\YDN\V201911\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\YDN\V201911\Paging $paging
     * @return \Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlListSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
