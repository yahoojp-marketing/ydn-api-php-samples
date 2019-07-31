<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Repository;

use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201907\Campaign\Campaign;
use Jp\YahooApis\YDN\V201907\Campaign\CampaignType;

/**
 * Utility method collection for PHP Sample Program.
 */
class CampaignValuesRepository
{

    /**
     * @var ValuesHolder
     */
    private $valuesHolder;

    /**
     * CampaignValuesRepository constructor.
     * @param ValuesHolder $valuesHolder
     */
    public function __construct(ValuesHolder $valuesHolder)
    {
        $this->valuesHolder = $valuesHolder;
    }

    /**
     * @return Campaign[]
     */
    public function getCampaigns(): array
    {
        $campaigns = [];
        if (is_null($this->valuesHolder->getCampaignValuesList())) {
            return $campaigns;
        }
        foreach ($this->valuesHolder->getCampaignValuesList() as $campaignValues) {
            $campaigns[] = $campaignValues->getCampaign();
        }
        return $campaigns;
    }

    /**
     * @return int[]
     */
    public function getCampaignIds(): array
    {
        $campaignIds = [];
        if (is_null($this->valuesHolder->getCampaignValuesList())) {
            return $campaignIds;
        }
        foreach ($this->valuesHolder->getCampaignValuesList() as $campaignValues) {
            $campaignIds[] = $campaignValues->getCampaign()->getCampaignId();
        }
        return $campaignIds;
    }

    /**
     * @param string $campaignType
     * @param string|null $osType
     * @return int|null
     */
    public function findCampaignId(string $campaignType, string $osType = null): ?int
    {
        if ($campaignType === CampaignType::APP && !is_null($osType)) {
            return $this->findCampaignIdByAppOs($osType);
        } else {
            return $this->findCampaignIdByCampaignType($campaignType);
        }
    }

    /**
     * @param string $campaignType
     * @return int|null
     */
    private function findCampaignIdByCampaignType(string $campaignType): ?int
    {
        if (is_null($this->valuesHolder->getCampaignValuesList())) {
            return null;
        }
        foreach ($this->valuesHolder->getCampaignValuesList() as $campaignValues) {
            if ($campaignValues->getCampaign()->getCampaignType() === $campaignType) {
                return $campaignValues->getCampaign()->getCampaignId();
            }
        }
        return null;
    }

    /**
     * @param string $osType
     * @return int|null
     */
    private function findCampaignIdByAppOs(string $osType): ?int
    {
        if (is_null($this->valuesHolder->getCampaignValuesList())) {
            return null;
        }
        foreach ($this->valuesHolder->getCampaignValuesList() as $campaignValues) {
            if ($campaignValues->getCampaign()->getCampaignType() === CampaignType::APP
                && $campaignValues->getCampaign()->getAppOs() === $osType) {
                return $campaignValues->getCampaign()->getCampaignId();
            }
        }
        return null;
    }

    /**
     * @param int $campaignId
     * @return null|string
     */
    public function findAppId(int $campaignId): ?string
    {
        if (is_null($this->valuesHolder->getCampaignValuesList())) {
            return null;
        }
        foreach ($this->valuesHolder->getCampaignValuesList() as $campaignValues) {
            if ($campaignValues->getCampaign()->getCampaignId() === $campaignId) {
                return $campaignValues->getCampaign()->getAppId();
            }
        }
        return null;
    }
}
