<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupTarget;

class SearchTarget extends Target
{

    /**
     * @var string $searchKeywordListName
     */
    protected $searchKeywordListName = null;

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
    public function getSearchKeywordListName()
    {
      return $this->searchKeywordListName;
    }

    /**
     * @param string $searchKeywordListName
     * @return \Jp\YahooApis\YDN\V201907\AdGroupTarget\SearchTarget
     */
    public function setSearchKeywordListName($searchKeywordListName)
    {
      $this->searchKeywordListName = $searchKeywordListName;
      return $this;
    }

}
