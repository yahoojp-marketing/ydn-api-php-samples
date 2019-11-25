<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Repository;

use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDefinition;

/**
 * Utility method collection for PHP Sample Program.
 */
class ReportDefinitionValuesRepository
{

    /**
     * @var ValuesHolder
     */
    private $valuesHolder;

    /**
     * ReportDefinitionValuesRepository constructor.
     * @param ValuesHolder $valuesHolder
     */
    public function __construct(ValuesHolder $valuesHolder)
    {
        $this->valuesHolder = $valuesHolder;
    }

    /**
     * @return ReportDefinition[]
     */
    public function getReportDefinitions(): array
    {
        $reportDefinitions = [];
        if (is_null($this->valuesHolder->getReportDefinitionValuesList())) {
            return $reportDefinitions;
        }
        foreach ($this->valuesHolder->getReportDefinitionValuesList() as $reportDefinitionValues) {
            $reportDefinitions[] = $reportDefinitionValues->getReportDefinition();
        }
        return $reportDefinitions;
    }

    /**
     * @return int[]
     */
    public function getReportJobIds(): array
    {
        $reportJobIds = [];
        if (is_null($this->valuesHolder->getReportDefinitionValuesList())) {
            return $reportJobIds;
        }
        foreach ($this->valuesHolder->getReportDefinitionValuesList() as $reportDefinitionValues) {
            $reportJobIds[] = $reportDefinitionValues->getReportDefinition()->getReportJobId();
        }
        return $reportJobIds;
    }
}
