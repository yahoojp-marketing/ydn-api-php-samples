<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\RetargetingList;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Basic\RetargetingTag\RetargetingTagServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201903\Paging;
use Jp\YahooApis\YDN\V201903\RetargetingList\{Combination,
    CombinationTargetList,
    CompareOperator,
    CustomAudienceTargetList,
    get,
    getResponse,
    IsOpen,
    IsPreset,
    LogicalOperator,
    mutate,
    mutateResponse,
    Operator,
    RetargetingList,
    RetargetingListOperation,
    RetargetingListSelector,
    RetargetingListService,
    Rule,
    RuleCondition,
    RuleTargetList,
    RuleType,
    SimilarityTargetList,
    TargetListData,
    TargetListSize,
    TargetListType};

/**
 * example RetargetingListService operation and Utility method collection.
 */
class RetargetingListServiceSample
{

    const SERVICE_NAME = 'RetargetingListService';

    /**
     * @var RetargetingListService
     */
    private static $service = null;

    /**
     * RetargetingListServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(RetargetingListService::class);
    }

    /**
     * example get Retargeting Lists.
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
     * example mutate Retargeting Lists.
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
     * check & create upper service object.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    private static function setup(): ValuesHolder
    {
        return RetargetingTagServiceSample::create();
    }

    /**
     * example RetargetingListService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        // =================================================================
        // Setup
        // =================================================================
        $accountId = SoapUtils::getAccountId();

        try {
            // =================================================================
            // check & create upper service object.
            // =================================================================
            $valuesHolder = self::setup();
            $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);
            $retargetingTagId = $valuesRepositoryFacade->getRetargetingTagValuesRepository()->getRetargetingTagIds()[0];

            // get DefaultTargetList.
            $getRequestDefaultTargetList = self::buildExampleGetRequest($accountId, []);
            $getRequestDefaultTargetList->getSelector()->setTargetListTypes([TargetListType::DEFAULT_LIST]);
            $getResponseDefaultTargetList = self::get($getRequestDefaultTargetList);
            $defaultTargetListId = $getResponseDefaultTargetList->getRval()->getValues()[0]->getRetargetingList()->getTargetListId();

            // =================================================================
            // RetargetingListService ADD
            // =================================================================
            // create request.
            $addRequestRuleTargetList = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleRuleTargetList($accountId, $retargetingTagId),
                self::createExampleSimilarityTargetList($accountId, $defaultTargetListId),
                self::createExampleCustomAudienceTargetList($accountId),
            ]);

            // run
            $addResponseTargetList = self::mutate($addRequestRuleTargetList);
            $retargetingList = [];
            $targetListIds = [];
            foreach ($addResponseTargetList->getRval()->getValues() as $retargetingListValues) {
                $retargetingList[] = $retargetingListValues->getRetargetingList();
                $targetListIds[] = $retargetingListValues->getRetargetingList()->getTargetListId();
            }

            // =================================================================
            // RetargetingListService ADD(CombinationTargetList)
            // =================================================================
            // create request.
            $addRequestCombinationTargetList = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleCombinationTargetList($accountId, $targetListIds),
            ]);

            // run
            $addResponseCombinationTargetList = self::mutate($addRequestCombinationTargetList);
            $combinationTargetList = [];
            foreach ($addResponseCombinationTargetList->getRval()->getValues() as $retargetingListValues) {
                $combinationTargetList[] = $retargetingListValues->getRetargetingList();
                $targetListIds[] = $retargetingListValues->getRetargetingList()->getTargetListId();
            }

            // =================================================================
            // RetargetingTagService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $targetListIds);

            // run
            self::get($getRequest);

            // =================================================================
            // RetargetingListService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId,
                self::createExampleSetRequest($retargetingList)
            );

            // run
            self::mutate($setRequest);

            // =================================================================
            // RetargetingListService REMOVE(CombinationTargetList)
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId, $combinationTargetList);

            // run
            self::mutate($removeRequest);

            // =================================================================
            // RetargetingListService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId, $retargetingList);

            // run
            self::mutate($removeRequest);

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }

    /**
     * example get request.
     *
     * @param int $accountId
     * @param int[] $targetListIds
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, array $targetListIds): get
    {
        $selector = new RetargetingListSelector($accountId);

        if (!is_null($targetListIds)) {
            $selector->setTargetListIds($targetListIds);
        }

        $selector->setTargetListTypes([
            TargetListType::COMBINATION,
            TargetListType::RULE,
            TargetListType::DEFAULT_LIST,
            TargetListType::SIMILARITY,
            TargetListType::CUSTOM_AUDIENCE,
        ]);

        $paging = new Paging(1, 20);
        $selector->setPaging($paging);
        return new get($selector);
    }

    /**
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @param RetargetingList[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new RetargetingListOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example Rule TargetList request.
     *
     * @param int $accountId
     * @param string $retargetingTagId
     * @return RetargetingList
     */
    public static function createExampleRuleTargetList(int $accountId, string $retargetingTagId): RetargetingList
    {
        $operand = new RetargetingList();
        $operand->setAccountId($accountId);
        $operand->setTargetListName('SampleRule_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $operand->setDescription('SampleRule_CreateOn_' . SoapUtils::getCurrentTimestamp());

        $urlRuleCondition = new RuleCondition();
        $urlRuleCondition->setType(RuleType::URL);
        $urlRuleCondition->setCompareOperator(CompareOperator::EQUAL);
        $urlRuleCondition->setValue("sampleurl.aaa");

        $labelRuleCondition = new RuleCondition();
        $labelRuleCondition->setType(RuleType::LABEL);
        $labelRuleCondition->setCompareOperator(CompareOperator::END_WITH);
        $labelRuleCondition->setValue("samplelabel");

        $refererUrlRuleCondition = new RuleCondition();
        $refererUrlRuleCondition->setType(RuleType::REFERER_URL);
        $refererUrlRuleCondition->setCompareOperator(CompareOperator::INCLUDED);
        $refererUrlRuleCondition->setValue("samplerefererurl.aaa");

        $pageTypeRuleCondition = new RuleCondition();
        $pageTypeRuleCondition->setType(RuleType::PAGE_TYPE);
        $pageTypeRuleCondition->setCompareOperator(CompareOperator::EQUAL);
        $pageTypeRuleCondition->setValue("search");

        $itemIdRuleCondition = new RuleCondition();
        $itemIdRuleCondition->setType(RuleType::ITEM_ID);
        $itemIdRuleCondition->setCompareOperator(CompareOperator::EQUAL);
        $itemIdRuleCondition->setValue("product001");

        $itemCategoryIdRuleCondition = new RuleCondition();
        $itemCategoryIdRuleCondition->setType(RuleType::ITEM_CATEGORY_ID);
        $itemCategoryIdRuleCondition->setCompareOperator(CompareOperator::EQUAL);
        $itemCategoryIdRuleCondition->setValue("category001");

        $eventTypeRuleCondition = new RuleCondition();
        $eventTypeRuleCondition->setType(RuleType::EVENT_TYPE);
        $eventTypeRuleCondition->setCompareOperator(CompareOperator::EQUAL);
        $eventTypeRuleCondition->setValue("app_install");

        $rule = new Rule();
        $rule->setRuleConditions([
            $urlRuleCondition,
            $labelRuleCondition,
            $refererUrlRuleCondition,
            $pageTypeRuleCondition,
            $itemIdRuleCondition,
            $itemCategoryIdRuleCondition,
            $eventTypeRuleCondition,
        ]);

        $ruleTargetList = new RuleTargetList(TargetListType::RULE);
        $ruleTargetList->setRetargetingTagId($retargetingTagId);
        $ruleTargetList->setIsPreset(IsPreset::TRUE);
        $ruleTargetList->setIsOpen(IsOpen::TRUE);
        $ruleTargetList->setReachPeriod(7);
        $ruleTargetList->setRules([$rule]);

        $operand->setTargetList($ruleTargetList);

        return $operand;
    }

    /**
     * example Combination TargetList request.
     *
     * @param int $accountId
     * @param int[] $targetListIds
     * @return RetargetingList
     */
    public static function createExampleCombinationTargetList(int $accountId, array $targetListIds): RetargetingList
    {
        $operand = new RetargetingList();
        $operand->setAccountId($accountId);
        $operand->setTargetListName('SampleCombination_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $operand->setDescription('SampleCombination_CreateOn_' . SoapUtils::getCurrentTimestamp());

        $combination = new Combination();
        $combination->setLogicalOperator(LogicalOperator::aAND);

        $targetListDatas = [];
        foreach ($targetListIds as $targetListId) {
            $targetListData = new TargetListData();
            $targetListData->setTargetListId($targetListId);
            $targetListDatas[] = $targetListData;
        }

        $combination->setTargetLists($targetListDatas);

        $combinationTargetList = new CombinationTargetList(TargetListType::COMBINATION);
        $combinationTargetList->setCombinations([$combination]);

        $operand->setTargetList($combinationTargetList);

        return $operand;
    }

    /**
     * example Similarity TargetList request.
     *
     * @param int $accountId
     * @param int $defaultTargetListId
     * @return RetargetingList
     */
    public static function createExampleSimilarityTargetList(int $accountId, int $defaultTargetListId): RetargetingList
    {
        $operand = new RetargetingList();
        $operand->setAccountId($accountId);
        $operand->setTargetListName('SampleSimilarity_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $operand->setDescription('SampleSimilarity_CreateOn_' . SoapUtils::getCurrentTimestamp());

        $similarityTargetList = new SimilarityTargetList(TargetListType::SIMILARITY);
        $similarityTargetList->setTargetListId($defaultTargetListId);
        $similarityTargetList->setTargetListSize(TargetListSize::RATE_6);

        $operand->setTargetList($similarityTargetList);

        return $operand;
    }

    /**
     * example CustomAudience TargetList request.
     *
     * @param int $accountId
     * @return RetargetingList
     */
    public static function createExampleCustomAudienceTargetList(int $accountId): RetargetingList
    {
        $operand = new RetargetingList();
        $operand->setAccountId($accountId);
        $operand->setTargetListName('SampleCustomAudience_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $operand->setDescription('SampleCustomAudience_CreateOn_' . SoapUtils::getCurrentTimestamp());

        $customAudienceTargetList = new CustomAudienceTargetList(TargetListType::CUSTOM_AUDIENCE);
        $customAudienceTargetList->setReachPeriod(60);

        $operand->setTargetList($customAudienceTargetList);

        return $operand;
    }

    /**
     * example targetLists set request.
     *
     * @param RetargetingList[] $retargetingLists
     * @return RetargetingList[]
     */
    public static function createExampleSetRequest(array $retargetingLists): array
    {
        // create operands
        $operands = [];

        foreach ($retargetingLists as $retargetingList) {
            $operand = new RetargetingList();
            $operand->setAccountId($retargetingList->getAccountId());
            $operand->setTargetListId($retargetingList->getTargetListId());
            $operand->setTargetListName('Sample_UpdateOn_' . $retargetingList->getTargetListId() . '_' . SoapUtils::getCurrentTimestamp());
            $operand->setDescription('Sample_UpdateOn_' . $retargetingList->getTargetListId() . '_' . SoapUtils::getCurrentTimestamp());
            $operand->setTargetList($retargetingList->getTargetList());
            $operands[] = $operand;
        }

        return $operands;
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    RetargetingListServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
