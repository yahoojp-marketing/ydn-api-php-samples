<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Repository;

use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201907\FeedHolder\FeedHolderRecord;

/**
 * Utility method collection for PHP Sample Program.
 */
class FeedHolderValuesRepository
{

    /**
     * @var ValuesHolder
     */
    private $valuesHolder;

    /**
     * FeedHolderValuesRepository constructor.
     * @param ValuesHolder $valuesHolder
     */
    public function __construct(ValuesHolder $valuesHolder)
    {
        $this->valuesHolder = $valuesHolder;
    }

    /**
     * @return FeedHolderRecord[]
     */
    public function getFeedHolderRecords(): array
    {
        $feedHolderRecords = [];
        if (is_null($this->valuesHolder->getFeedHolderValuesList())) {
            return $feedHolderRecords;
        }
        foreach ($this->valuesHolder->getFeedHolderValuesList() as $feedHolderValues) {
            $feedHolderRecords[] = $feedHolderValues->getFeedHolder();
        }
        return $feedHolderRecords;
    }

    /**
     * @return string[]
     */
    public function getFeedHolderIds(): array
    {
        $feedHolderIds = [];
        if (is_null($this->valuesHolder->getFeedHolderValuesList())) {
            return $feedHolderIds;
        }
        foreach ($this->valuesHolder->getFeedHolderValuesList() as $feedHolderValues) {
            $feedHolderIds[] = $feedHolderValues->getFeedHolder()->getFeedHolderId();
        }
        return $feedHolderIds;
    }
}
