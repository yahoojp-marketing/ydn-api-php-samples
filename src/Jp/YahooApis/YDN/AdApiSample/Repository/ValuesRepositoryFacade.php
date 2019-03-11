<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Repository;

use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;

/**
 * Utility method collection for PHP Sample Program.
 */
class ValuesRepositoryFacade
{

    /**
     * @var ValuesHolder|null
     */
    private $valuesHolder;

    /**
     * @Var CampaignValuesRepository
     */
    private $campaignValuesRepository;

    /**
     * @Var AdGroupValuesRepository
     */
    private $adGroupValuesRepository;

    /**
     * @Var AdGroupAdValuesRepository
     */
    private $adGroupAdValuesRepository;

    /**
     * @Var PlacementUrlListValuesRepository
     */
    private $placementUrlListValuesRepository;

    /**
     * @Var SearchKeywordListValuesRepository
     */
    private $searchKeywordListValuesRepository;

    /**
     * @Var MediaValuesRepository
     */
    private $mediaValuesRepository;

    /**
     * @Var LabelValuesRepository
     */
    private $labelValuesRepository;

    /**
     * @Var ReportDefinitionValuesRepository
     */
    private $reportDefinitionValuesRepository;

    /**
     * @Var RetargetingTagValuesRepository
     */
    private $retargetingTagValuesRepository;

    /**
     * @Var FeedHolderValuesRepository
     */
    private $feedHolderValuesRepository;

    /**
     * ValuesRepositoryFacade constructor.
     * @param ValuesHolder $valuesHolder
     */
    public function __construct(ValuesHolder $valuesHolder)
    {
        $this->valuesHolder = $valuesHolder;
        $this->campaignValuesRepository = new CampaignValuesRepository($valuesHolder);
        $this->adGroupValuesRepository = new AdGroupValuesRepository($valuesHolder);
        $this->adGroupAdValuesRepository = new AdGroupAdValuesRepository($valuesHolder);
        $this->placementUrlListValuesRepository = new PlacementUrlListValuesRepository($valuesHolder);
        $this->searchKeywordListValuesRepository = new SearchKeywordListValuesRepository($valuesHolder);
        $this->mediaValuesRepository = new MediaValuesRepository($valuesHolder);
        $this->labelValuesRepository = new LabelValuesRepository($valuesHolder);
        $this->reportDefinitionValuesRepository = new ReportDefinitionValuesRepository($valuesHolder);
        $this->retargetingTagValuesRepository = new RetargetingTagValuesRepository($valuesHolder);
        $this->feedHolderValuesRepository = new FeedHolderValuesRepository($valuesHolder);
    }

    /**
     * @return ValuesHolder
     */
    public function getValuesHolder(): ValuesHolder
    {
        return $this->valuesHolder;
    }

    /**
     * @return CampaignValuesRepository
     */
    public function getCampaignValuesRepository(): CampaignValuesRepository
    {
        return $this->campaignValuesRepository;
    }

    /**
     * @return AdGroupValuesRepository
     */
    public function getAdGroupValuesRepository(): AdGroupValuesRepository
    {
        return $this->adGroupValuesRepository;
    }

    /**
     * @return AdGroupAdValuesRepository
     */
    public function getAdGroupAdValuesRepository(): AdGroupAdValuesRepository
    {
        return $this->adGroupAdValuesRepository;
    }

    /**
     * @return PlacementUrlListValuesRepository
     */
    public function getPlacementUrlListValuesRepository(): PlacementUrlListValuesRepository
    {
        return $this->placementUrlListValuesRepository;
    }

    /**
     * @return SearchKeywordListValuesRepository
     */
    public function getSearchKeywordListValuesRepository(): SearchKeywordListValuesRepository
    {
        return $this->searchKeywordListValuesRepository;
    }

    /**
     * @return MediaValuesRepository
     */
    public function getMediaValuesRepository(): MediaValuesRepository
    {
        return $this->mediaValuesRepository;
    }

    /**
     * @return LabelValuesRepository
     */
    public function getLabelValuesRepository(): LabelValuesRepository
    {
        return $this->labelValuesRepository;
    }

    /**
     * @return ReportDefinitionValuesRepository
     */
    public function getReportDefinitionValuesRepository(): ReportDefinitionValuesRepository
    {
        return $this->reportDefinitionValuesRepository;
    }
    /**
     * @return RetargetingTagValuesRepository
     */
    public function getRetargetingTagValuesRepository(): RetargetingTagValuesRepository
    {
        return $this->retargetingTagValuesRepository;
    }
    /**
     * @return FeedHolderValuesRepository
     */
    public function getFeedHolderValuesRepository(): FeedHolderValuesRepository
    {
        return $this->feedHolderValuesRepository;
    }
}
