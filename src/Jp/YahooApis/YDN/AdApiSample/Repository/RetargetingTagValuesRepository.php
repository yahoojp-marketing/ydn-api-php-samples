<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Repository;

use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTag;

/**
 * Utility method collection for PHP Sample Program.
 */
class RetargetingTagValuesRepository
{

    /**
     * @var ValuesHolder
     */
    private $valuesHolder;

    /**
     * RetargetingTagValuesRepository constructor.
     * @param ValuesHolder $valuesHolder
     */
    public function __construct(ValuesHolder $valuesHolder)
    {
        $this->valuesHolder = $valuesHolder;
    }

    /**
     * @return RetargetingTag[]
     */
    public function getRetargetingTags(): array
    {
        $retargetingTags = [];
        if (is_null($this->valuesHolder->getRetargetingTagValuesList())) {
            return $retargetingTags;
        }
        foreach ($this->valuesHolder->getRetargetingTagValuesList() as $retargetingTagValues) {
            $retargetingTags[] = $retargetingTagValues->getRetargetingTag();
        }
        return $retargetingTags;
    }

    /**
     * @return string[]
     */
    public function getRetargetingTagIds(): array
    {
        $retargetingTagIds = [];
        if (is_null($this->valuesHolder->getRetargetingTagValuesList())) {
            return $retargetingTagIds;
        }
        foreach ($this->valuesHolder->getRetargetingTagValuesList() as $retargetingTagValues) {
            $retargetingTagIds[] = $retargetingTagValues->getRetargetingTag()->getRetargetingTagId();
        }
        return $retargetingTagIds;
    }
}
