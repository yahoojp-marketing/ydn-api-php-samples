<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\Stats;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\V201907\Stats\{StatsPeriod, StatsPeriodCustomDate, StatsType, TargetType, StatsSelector, get, getResponse, StatsService};
use Jp\YahooApis\YDN\V201907\Paging;

/**
 * example StatsService operation and Utility method collection.
 */
class StatsServiceSample
{

    const SERVICE_NAME = 'StatsService';

    /**
     * @var StatsService
     */
    private static $service = null;

    /**
     * StatsServiceSample constructor.
     */
    private static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(StatsService::class);
    }

    /**
     * example get stats.
     *
     * @param get $request
     * @return getResponse
     * @throws Exception
     */
    public static function get(get $request): getResponse
    {
        self::init();

        // Call API
        $response = self::$service->get($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/get.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/get.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/get.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example get request.
     *
     * @param int $accountId, $statsType, $targetId
     * @return get
     */
    public static function buildExampleGetRequest($accountId, $statsType, $targetId): get
    {
        $selector = new StatsSelector($accountId);
        $selector->setStatsType($statsType);

        switch ($statsType) {
            case StatsType::CAMPAIGN:
                $selector->setCampaignIds([$targetId]);
                break;
            case StatsType::ADGROUP:
                $selector->setAdGroupIds([$targetId]);
                break;
            case StatsType::TARGET:
                $selector->setStatsPeriod(StatsPeriod::CUSTOM_DATE);
                $statsPeriodCustomDate = new StatsPeriodCustomDate('20190101','20301231');
                $selector->setStatsPeriodCustomDate($statsPeriodCustomDate);
                $selector->setTargetTypes([TargetType::AD_SCHEDULE_TARGET]);
                break;
            case StatsType::VIDEO:
                $selector->setStatsPeriod(StatsPeriod::CUSTOM_DATE);
                $statsPeriodCustomDate = new StatsPeriodCustomDate('20190101','20301231');
                $selector->setStatsPeriodCustomDate($statsPeriodCustomDate);
                break;
        }

        $paging = new Paging(1, 20);
        $selector->setPaging($paging);

        return new get($selector);
    }

    /**
     * example StatsService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        // =================================================================
        // Setting
        // =================================================================
        $accountId = SoapUtils::getAccountId();
        $campaignId = null;
        $adGroupId = null;

        try {
            // =================================================================
            // StatsService GET (Video)
            // =================================================================
            // create request.
            $getRequestTarget = self::buildExampleGetRequest($accountId, StatsType::VIDEO, null);

            // run
            self::get($getRequestTarget);

            // =================================================================
            // StatsService GET (Target)
            // =================================================================
            // create request.
            $getRequestTarget = self::buildExampleGetRequest($accountId, StatsType::TARGET, null);

            // run
            self::get($getRequestTarget);

            // =================================================================
            // StatsService GET (Campaign)
            // =================================================================
            // create request.
            $getRequestCampaign = self::buildExampleGetRequest($accountId, StatsType::CAMPAIGN, $campaignId);

            // run
            self::get($getRequestCampaign);

            // =================================================================
            // StatsService GET (AdGroup)
            // =================================================================
            // create request.
            $getRequestAdGroup = self::buildExampleGetRequest($accountId, StatsType::ADGROUP, $adGroupId);

            // run
            self::get($getRequestAdGroup);

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    StatsServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
