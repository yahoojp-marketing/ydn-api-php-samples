<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Repository;

use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201903\Media\MediaRecord;

/**
 * Utility method collection for PHP Sample Program.
 */
class MediaValuesRepository
{

    /**
     * @var ValuesHolder
     */
    private $valuesHolder;

    /**
     * MediaValuesRepository constructor.
     * @param ValuesHolder $valuesHolder
     */
    public function __construct(ValuesHolder $valuesHolder)
    {
        $this->valuesHolder = $valuesHolder;
    }

    /**
     * @return MediaRecord[]
     */
    public function getMediaRecord(): array
    {
        $mediaRecords = [];
        if (!is_null($this->valuesHolder->getMediaValuesList())) {
            foreach ($this->valuesHolder->getMediaValuesList() as $mediaValues) {
                $mediaRecords[] = $mediaValues->getMediaRecord();
            }
        }
        return $mediaRecords;
    }

    /**
     * @return int[]
     */
    public function getMediaIds(): array
    {
        $mediaIds = [];
        if (!is_null($this->valuesHolder->getMediaValuesList())) {
            foreach ($this->valuesHolder->getMediaValuesList() as $mediaValues) {
                $mediaIds[] = $mediaValues->getMediaRecord()->getMediaId();
            }
        }
        return $mediaIds;
    }
}
