<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Repository;

use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201903\PlacementUrlList\PlacementUrlList;

/**
 * Utility method collection for PHP Sample Program.
 */
class PlacementUrlListValuesRepository
{

    /**
     * @var ValuesHolder
     */
    private $valuesHolder;

    /**
     * PlacementUrlListValuesRepository constructor.
     * @param ValuesHolder $valuesHolder
     */
    public function __construct(ValuesHolder $valuesHolder)
    {
        $this->valuesHolder = $valuesHolder;
    }

    /**
     * @return PlacementUrlList[]
     */
    public function getPlacementUrlLists(): array
    {
        $urlList = [];

        foreach ($this->valuesHolder->getPlacementUrlListValuesList() as $placementUrlListValues) {
            $urlList[] = $placementUrlListValues->getUrlList();
        }
        return $urlList;
    }

    /**
     * @return array
     */
    public function getPlacementUrlIdLists(): array
    {
        $urlIdList = [];

        foreach ($this->valuesHolder->getPlacementUrlListValuesList() as $placementUrlListValues) {
            $urlIdList[] = $placementUrlListValues->getUrlList()->getUrlListId();
        }
        return $urlIdList;
    }
}
