<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Util;

use Jp\YahooApis\YDN\V201903\{AdGroupAd\AdGroupAdValues,
    AdGroup\AdGroupValues,
    Campaign\CampaignValues,
    Label\LabelValues,
    Media\MediaValues,
    PlacementUrlList\PlacementUrlListValues,
    ReportDefinition\ReportDefinitionValues,
    PlacementUrlIdea\PlacementUrlIdeaValues,
    RetargetingTag\RetargetingTagValues,
    FeedHolder\FeedHolderValues,
    SearchKeywordIdea\SearchKeywordIdeaValues,
    SearchKeywordList\SearchKeywordListValues};

/**
 * Utility method collection for PHP Sample Program.
 */
class ValuesHolder
{
    /**
     * @var CampaignValues[] $campaignValuesList
     */
    private $campaignValuesList = [];

    /**
     * @return CampaignValues[]
     */
    public function getCampaignValuesList(): array
    {
        return $this->campaignValuesList;
    }

    /**
     * @param CampaignValues[] $campaignValuesList
     */
    public function setCampaignValuesList(array $campaignValuesList): void
    {
        if (count($campaignValuesList) > 0) {
            $this->campaignValuesList = array_merge($this->campaignValuesList, $campaignValuesList);
        } else {
            $this->campaignValuesList = $campaignValuesList;
        }
    }

    /**
     * @var AdGroupValues[] $adGroupValuesList
     */
    private $adGroupValuesList = [];

    /**
     * @return AdGroupValues[]
     */
    public function getAdGroupValuesList(): array
    {
        return $this->adGroupValuesList;
    }

    /**
     * @param AdGroupValues[] $adGroupValuesList
     */
    public function setAdGroupValuesList(array $adGroupValuesList): void
    {
        $this->adGroupValuesList = array_merge($this->adGroupValuesList, $adGroupValuesList);
    }

    /**
     * @var AdGroupAdValues[] $adGroupAdValuesList
     */
    private $adGroupAdValuesList = [];

    /**
     * @return AdGroupAdValues[]
     */
    public function getAdGroupAdValuesList(): array
    {
        return $this->adGroupAdValuesList;
    }

    /**
     * @param AdGroupAdValues[] $adGroupAdValuesList
     */
    public function setAdGroupAdValuesList(array $adGroupAdValuesList): void
    {
        $this->adGroupAdValuesList = array_merge($this->adGroupAdValuesList, $adGroupAdValuesList);
    }

    /**
     * @var PlacementUrlIdeaValues[] $placementUrlIdeaValuesList
     */
    private $placementUrlIdeaValuesList = [];

    /**
     * @return PlacementUrlIdeaValues[]
     */
    public function getPlacementUrlIdeaValuesList(): array
    {
        return $this->placementUrlIdeaValuesList;
    }

    /**
     * @param PlacementUrlIdeaValues[] $placementUrlIdeaValuesList
     */
    public function setPlacementUrlIdeaValuesList(array $placementUrlIdeaValuesList): void
    {
        $this->placementUrlIdeaValuesList = array_merge($this->placementUrlIdeaValuesList, $placementUrlIdeaValuesList);
    }

    /**
     * @var PlacementUrlListValues[] $placementUrlListValuesList
     */
    private $placementUrlListValuesList = [];

    /**
     * @return PlacementUrlListValues[]
     */
    public function getPlacementUrlListValuesList(): array
    {
        return $this->placementUrlListValuesList;
    }

    /**
     * @param PlacementUrlListValues[] $placementUrlListValuesList
     */
    public function setPlacementUrlListValuesList(array $placementUrlListValuesList): void
    {
        if (count($placementUrlListValuesList) > 0) {
            $this->placementUrlListValuesList = array_merge($this->placementUrlListValuesList, $placementUrlListValuesList);
        } else {
            $this->placementUrlListValuesList = $placementUrlListValuesList;
        }
    }

    /**
     * @var SearchKeywordIdeaValues[] $searchKeywordIdeaValuesList
     */
    private $searchKeywordIdeaValuesList = [];

    /**
     * @return SearchKeywordIdeaValues[]
     */
    public function getSearchKeywordIdeaValuesList(): array
    {
        return $this->searchKeywordIdeaValuesList;
    }

    /**
     * @param SearchKeywordIdeaValues[] $searchKeywordIdeaValuesList
     */
    public function setSearchKeywordIdeaValuesList(array $searchKeywordIdeaValuesList): void
    {
        $this->searchKeywordIdeaValuesList = array_merge($this->searchKeywordIdeaValuesList, $searchKeywordIdeaValuesList);
    }

    /**
     * @var SearchKeywordListValues[] $searchKeywordListValuesList
     */
    private $searchKeywordListValuesList = [];

    /**
     * @return SearchKeywordListValues[]
     */
    public function getSearchKeywordListValuesList(): array
    {
        return $this->searchKeywordListValuesList;
    }

    /**
     * @param SearchKeywordListValues[] $searchKeywordListValuesList
     */
    public function setSearchKeywordListValuesList(array $searchKeywordListValuesList): void
    {
        if (count($searchKeywordListValuesList) > 0) {
            $this->searchKeywordListValuesList = array_merge($this->searchKeywordListValuesList, $searchKeywordListValuesList);
        } else {
            $this->searchKeywordListValuesList = $searchKeywordListValuesList;
        }
    }

    /**
     * @var MediaValues[] $mediaValuesList
     */
    private $mediaValuesList = [];

    /**
     * @return MediaValues[]
     */
    public function getMediaValuesList(): array
    {
        return $this->mediaValuesList;
    }

    /**
     * @param MediaValues[] $mediaValuesList
     */
    public function setMediaValuesList(array $mediaValuesList): void
    {
        if (count($mediaValuesList) > 0) {
            $this->mediaValuesList = array_merge($this->mediaValuesList, $mediaValuesList);
        } else {
            $this->mediaValuesList = $mediaValuesList;
        }
    }

    /**
     * @var LabelValues[] $labelValuesList
     */
    private $labelValuesList = [];

    /**
     * @return LabelValues[]
     */
    public function getLabelValuesList(): array
    {
        return $this->labelValuesList;
    }

    /**
     * @param LabelValues[] $labelValuesList
     */
    public function setLabelValuesList(array $labelValuesList): void
    {
        if (count($labelValuesList) > 0) {
            $this->labelValuesList = array_merge($this->labelValuesList, $labelValuesList);
        } else {
            $this->labelValuesList = $labelValuesList;
        }
    }

    /**
     * @var ReportDefinitionValues[] $reportDefinitionValuesList
     */
    private $reportDefinitionValuesList = [];

    /**
     * @return ReportDefinitionValues[]
     */
    public function getReportDefinitionValuesList(): array
    {
        return $this->reportDefinitionValuesList;
    }

    /**
     * @param ReportDefinitionValues[] $reportDefinitionValuesList
     */
    public function setReportDefinitionValuesList(array $reportDefinitionValuesList): void
    {
        $this->reportDefinitionValuesList = array_merge($this->reportDefinitionValuesList, $reportDefinitionValuesList);
    }

    /**
     * @var RetargetingTagValues[] $retargetingTagValuesList
     */
    private $retargetingTagValuesList = [];

    /**
     * @return RetargetingTagValues[]
     */
    public function getRetargetingTagValuesList(): array
    {
        return $this->retargetingTagValuesList;
    }

    /**
     * @param RetargetingTagValues[] $retargetingTagValuesList
     */
    public function setRetargetingTagValuesList(array $retargetingTagValuesList): void
    {
        $this->retargetingTagValuesList = array_merge($this->retargetingTagValuesList, $retargetingTagValuesList);
    }

    /**
     * @var FeedHolderValues[] $feedHolderValuesList
     */
    private $feedHolderValuesList = [];

    /**
     * @return FeedHolderValues[]
     */
    public function getFeedHolderValuesList(): array
    {
        return $this->feedHolderValuesList;
    }

    /**
     * @param FeedHolderValues[] $feedHolderValuesList
     */
    public function setFeedHolderValuesList(array $feedHolderValuesList): void
    {
        $this->feedHolderValuesList = array_merge($this->feedHolderValuesList, $feedHolderValuesList);
    }
}
