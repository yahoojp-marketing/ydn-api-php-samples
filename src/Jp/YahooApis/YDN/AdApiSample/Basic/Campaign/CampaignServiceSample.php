<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\Campaign;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201907\Campaign\{BiddingStrategyType,
    Budget,
    BudgetDeliveryMethod,
    Campaign,
    CampaignOperation,
    CampaignSelector,
    CampaignService,
    CampaignType,
    DeviceOsType,
    FrequencyCap,
    FrequencyLevel,
    FrequencyTimeUnit,
    get,
    getResponse,
    ManualCPC,
    mutate,
    mutateResponse,
    Operator,
    UserStatus};
use Jp\YahooApis\YDN\V201907\Paging;

/**
 * example CampaignService operation and Utility method collection.
 */
class CampaignServiceSample
{

    const SERVICE_NAME = 'CampaignService';

    /**
     * @var CampaignService
     */
    private static $service = null;

    /**
     * CampaignServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(CampaignService::class);
    }

    /**
     * example get campaigns.
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
     * example mutate campaigns.
     *
     * @param mutate $request
     * @return mutateResponse
     * @throws Exception
     */
    public static function mutate(mutate $request): mutateResponse
    {
        self::init();

        // Call API
        $response = self::$service->mutate($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/' . (string)$request->getOperations()->getOperator() . '.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/' . (string)$request->getOperations()->getOperator() . '.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/' . (string)$request->getOperations()->getOperator() . '.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * cleanup service object.
     *
     * @param ValuesHolder $valuesHolder
     * @throws Exception
     */
    public static function cleanup(ValuesHolder $valuesHolder): void
    {
        if (count($valuesHolder->getCampaignValuesList()) > 0) {
            $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);
            self::mutate(
                self::buildExampleMutateRequest(Operator::REMOVE, SoapUtils::getAccountId(),
                    $valuesRepositoryFacade->getCampaignValuesRepository()->getCampaigns()
                )
            );
        }
    }

    /**
     * example CampaignService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        // =================================================================
        // Setup
        // =================================================================
        $valuesHolder = new ValuesHolder();
        $accountId = SoapUtils::getAccountId();

        try {
            // =================================================================
            // check & create upper service object.
            // =================================================================
            $valuesHolder = new ValuesHolder();
            $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);

            // =================================================================
            // CampaignService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleStandardCampaign(),
                self::createExampleAppCampaignANDROID(),
                self::createExampleAppCampaignIOS(),
            ]);

            // run
            $addResponse = self::mutate($addRequest);
            $valuesHolder->setCampaignValuesList($addResponse->getRval()->getValues());

            // =================================================================
            // CampaignService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getCampaignValuesRepository()->getCampaignIds());

            // run
            self::get($getRequest);

            // =================================================================
            // CampaignService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId,
                self::createExampleSetRequest($accountId, $valuesRepositoryFacade->getCampaignValuesRepository()->getCampaigns())
            );

            // run
            self::mutate($setRequest);

            // =================================================================
            // CampaignService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId,
                $valuesRepositoryFacade->getCampaignValuesRepository()->getCampaigns()
            );

            // run
            self::mutate($removeRequest);
            $valuesHolder->setCampaignValuesList([]);

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;

        } finally {
            // =================================================================
            // Cleanup
            // =================================================================
            self::cleanup($valuesHolder);
        }
    }

    /**
     * example get request.
     *
     * @param int $accountId
     * @param int[] $campaignIds
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, array $campaignIds): get
    {
        $selector = new CampaignSelector($accountId);

        $selector->setUserStatus([
            UserStatus::ACTIVE,
            UserStatus::PAUSED,
        ]);

        if (!is_null($campaignIds)) {
            $selector->setCampaignIds($campaignIds);
        }

        $paging = new Paging(1, 20);
        $selector->setPaging($paging);
        return new get($selector);
    }

    /**
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @param Campaign[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new CampaignOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example Standard Campaign request.
     *
     * @return Campaign
     */
    public static function createExampleStandardCampaign(): Campaign
    {
        // budget
        $budget = new Budget();
        $budget->setAmount(1000);
        $budget->setDeliveryMethod(BudgetDeliveryMethod::STANDARD);

        // manualCPC
        $manualCPC = new ManualCPC();
        $manualCPC->setType(BiddingStrategyType::MANUAL_CPC);

        // frequencyCap
        $frequencyCap = new FrequencyCap();
        $frequencyCap->setLevel(FrequencyLevel::CAMPAIGN);
        $frequencyCap->setTimeUnit(FrequencyTimeUnit::WEEK);
        $frequencyCap->setImpression(10);

        // campaign
        $campaign = new Campaign(SoapUtils::getAccountId());
        $campaign->setCampaignName('SampleStandardCampaign_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $campaign->setUserStatus(UserStatus::ACTIVE);
        $campaign->setStartDate('20300101');
        $campaign->setEndDate('20301231');
        $campaign->setBudget($budget);
        $campaign->setBiddingStrategy($manualCPC);
        $campaign->setAdProductType('TARGET_MATCH');
        $campaign->setFrequencyCap($frequencyCap);
        $campaign->setCampaignType(CampaignType::STANDARD);

        return $campaign;
    }

    /**
     * example App Campaign ANDROID request.
     *
     * @return Campaign
     */
    public static function createExampleAppCampaignANDROID(): Campaign
    {
        // budget
        $budget = new Budget();
        $budget->setAmount(1000);
        $budget->setDeliveryMethod(BudgetDeliveryMethod::STANDARD);

        // manualCPC
        $manualCPC = new ManualCPC();
        $manualCPC->setType(BiddingStrategyType::MANUAL_CPC);

        // frequencyCap
        $frequencyCap = new FrequencyCap();
        $frequencyCap->setLevel(FrequencyLevel::CAMPAIGN);
        $frequencyCap->setTimeUnit(FrequencyTimeUnit::WEEK);
        $frequencyCap->setImpression(10);

        // campaign
        $campaign = new Campaign(SoapUtils::getAccountId());
        $campaign->setCampaignName('SampleAppAndroidCampaign_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $campaign->setUserStatus(UserStatus::ACTIVE);
        $campaign->setStartDate('20300101');
        $campaign->setEndDate('20301231');
        $campaign->setBudget($budget);
        $campaign->setBiddingStrategy($manualCPC);
        $campaign->setAdProductType('TARGET_MATCH');
        $campaign->setFrequencyCap($frequencyCap);
        $campaign->setCampaignType(CampaignType::APP);
        $campaign->setAppOs(DeviceOsType::ANDROID);
        $campaign->setAppId("jp.co.yahoo.sample");
        $campaign->setAppName("Sample Android app");

        return $campaign;
    }

    /**
     * example App Campaign IOS request.
     *
     * @return Campaign
     */
    public static function createExampleAppCampaignIOS(): Campaign
    {
        // budget
        $budget = new Budget();
        $budget->setAmount(1000);
        $budget->setDeliveryMethod(BudgetDeliveryMethod::STANDARD);

        // manualCPC
        $manualCPC = new ManualCPC();
        $manualCPC->setType(BiddingStrategyType::MANUAL_CPC);

        // frequencyCap
        $frequencyCap = new FrequencyCap();
        $frequencyCap->setLevel(FrequencyLevel::CAMPAIGN);
        $frequencyCap->setTimeUnit(FrequencyTimeUnit::WEEK);
        $frequencyCap->setImpression(10);

        // campaign
        $campaign = new Campaign(SoapUtils::getAccountId());
        $campaign->setCampaignName('SampleAppIOSCampaign_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $campaign->setUserStatus(UserStatus::ACTIVE);
        $campaign->setStartDate('20300101');
        $campaign->setEndDate('20301231');
        $campaign->setBudget($budget);
        $campaign->setBiddingStrategy($manualCPC);
        $campaign->setAdProductType('TARGET_MATCH');
        $campaign->setFrequencyCap($frequencyCap);
        $campaign->setCampaignType(CampaignType::APP);
        $campaign->setAppOs(DeviceOsType::IOS);
        $campaign->setAppId("1234567890");
        $campaign->setAppName("Sample IOS app");

        return $campaign;
    }

    /**
     * example Dynamic Ads for Display Campaign request.
     *
     * @param int $feedFolderId
     * @return Campaign
     */
    public static function createExampleDynamicAdsForDisplayCampaign(int $feedFolderId): Campaign
    {
        // budget
        $budget = new Budget();
        $budget->setAmount(1000);
        $budget->setDeliveryMethod(BudgetDeliveryMethod::STANDARD);

        // campaign
        $campaign = new Campaign(SoapUtils::getAccountId());
        $campaign->setCampaignName('SampleDynamicAdsForDisplayCampaign_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $campaign->setUserStatus(UserStatus::ACTIVE);
        $campaign->setStartDate('20300101');
        $campaign->setEndDate('20301231');
        $campaign->setBudget($budget);
        $campaign->setAdProductType('DYNAMIC_ADS');
        $campaign->setCampaignType(CampaignType::STANDARD);
        $campaign->setFeedHolderId($feedFolderId);

        return $campaign;
    }

    /**
     * example campaigns set request.
     *
     * @param int $accountId
     * @param array $campaigns
     * @return array Campaign[]
     */
    public static function createExampleSetRequest(int $accountId, array $campaigns): array
    {
        // create operands
        $operands = [];

        foreach ($campaigns as $campaign) {
            // budget
            $budget = new Budget();
            $budget->setAmount(2000);
            $budget->setDeliveryMethod(BudgetDeliveryMethod::STANDARD);

            // biddingStrategy
            $manualCpc = new ManualCPC();
            $manualCpc->setType(BiddingStrategyType::MANUAL_CPC);

            // frequencyCap
            $frequencyCap = new FrequencyCap();
            $frequencyCap->setLevel(FrequencyLevel::AD_GROUP);
            $frequencyCap->setTimeUnit(FrequencyTimeUnit::DAY);
            $frequencyCap->setImpression(5);

            $operand = new Campaign($accountId);
            $operand->setCampaignId($campaign->getCampaignId());
            $operand->setCampaignName('SampleCampaign_UpdateOn_' . SoapUtils::getCurrentTimestamp() . $campaign->getCampaignId());
            $operand->setUserStatus(UserStatus::PAUSED);
            $operand->setStartDate('20300101');
            $operand->setEndDate('20301231');
            $operand->setBudget($budget);
            $operand->setBiddingStrategy($manualCpc);
            $operand->setFrequencyCap($frequencyCap);

            $operands[] = $operand;
        }

        return $operands;
    }

    /**
     * create basic Campaign.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    public static function create(): ValuesHolder
    {
        $accountId = SoapUtils::getAccountId();

        $request = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
            self::createExampleStandardCampaign(),
            self::createExampleAppCampaignANDROID(),
            self::createExampleAppCampaignIOS(),
        ]);

        $response = self::mutate($request);

        $selfValuesHolder = new ValuesHolder();
        $selfValuesHolder->setCampaignValuesList($response->getRval()->getValues());
        return $selfValuesHolder;
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    CampaignServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}

