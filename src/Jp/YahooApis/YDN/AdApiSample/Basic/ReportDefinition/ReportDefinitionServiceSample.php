<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\ReportDefinition;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201903\Paging;
use Jp\YahooApis\YDN\V201903\ReportDefinition\{get,
    getReportFields,
    getReportFieldsResponse,
    getResponse,
    mutate,
    mutateResponse,
    Operator,
    ReportAddTemplate,
    ReportCategory,
    ReportDateRangeType,
    ReportDefinition,
    ReportDefinitionOperation,
    ReportDefinitionSelector,
    ReportDefinitionService,
    ReportDownloadEncode,
    ReportDownloadFormat,
    ReportFrequencyRange,
    ReportLang};

/**
 * example ReportDefinitionService operation and Utility method collection.
 */
class ReportDefinitionServiceSample
{

    const SERVICE_NAME = 'ReportDefinitionService';

    /**
     * example report fields.
     */
    const FREQUENCY_REPORT_FIELDS = [
        'ACCOUNT_ID',
        'ACCOUNT_NAME',
        'CAMPAIGN_NAME',
        'DAY',
        'FREQUENCY',
        'IMPS',
        'CLICK',
        'UNIQUE_USERS'
    ];

    /**
     * @var ReportDefinitionService
     */
    private static $service = null;

    /**
     * ReportDefinitionServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(ReportDefinitionService::class);
    }

    /**
     * example get ReportDefinitions.
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
     * example getReportFields ReportDefinitions.
     *
     * @param getReportFields $request
     * @return getReportFieldsResponse
     * @throws Exception
     */
    public static function getReportFields(getReportFields $request): getReportFieldsResponse
    {
        self::init();

        // Call API
        $response = self::$service->getReportFields($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/get.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getFields())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/get.' . PHP_EOL);
        }

        return $response;
    }

    /**
     * example mutate ReportDefinitions.
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
     * create basic ReportDefinition.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    public static function create(): ValuesHolder
    {
        $valuesHolder = new ValuesHolder();
        $accountId = SoapUtils::getAccountId();
        $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [self::createExampleReportDefinition()]);
        $addResponse = self::mutate($addRequest);
        $valuesHolder->setReportDefinitionValuesList($addResponse->getRval()->getValues());
        return $valuesHolder;
    }

    /**
     * cleanup service object.
     *
     * @param ValuesHolder $valuesHolder
     * @throws Exception
     */
    public static function cleanup(ValuesHolder $valuesHolder): void
    {
        if (count($valuesHolder->getReportDefinitionValuesList()) === 0) {
            return;
        }
        $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);
        self::mutate(
            self::buildExampleMutateRequest(Operator::REMOVE, SoapUtils::getAccountId(),
                $valuesRepositoryFacade->getReportDefinitionValuesRepository()->getReportDefinitions()
            )
        );
    }

    /**
     * example ReportDefinitionService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        // =================================================================
        // Setup
        // =================================================================
        $valuesHolder = new ValuesHolder();
        $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);
        $accountId = SoapUtils::getAccountId();

        try {

            // =================================================================
            // ReportDefinitionService getReportFields
            // =================================================================
            // create request.
            $getReportFieldsRequest = self::buildGetReportFieldsRequest(ReportCategory::AD);

            // run
            self::getReportFields($getReportFieldsRequest);

            // =================================================================
            // ReportDefinitionService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [self::createExampleReportDefinition()]);

            // run
            $addResponse = self::mutate($addRequest);
            $valuesHolder->setReportDefinitionValuesList($addResponse->getRval()->getValues());

            // =================================================================
            // ReportDefinitionService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getReportDefinitionValuesRepository()->getReportIds());

            // run
            self::get($getRequest);

            // =================================================================
            // ReportDefinitionService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId,
                $valuesRepositoryFacade->getReportDefinitionValuesRepository()->getReportDefinitions()
            );

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
     * @param int[] $reportIds
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, array $reportIds): get
    {
        $selector = new ReportDefinitionSelector($accountId);

        if (!is_null($reportIds)) {
            $selector->setReportIds($reportIds);
        }

        $paging = new Paging(1, 20);
        $selector->setPaging($paging);
        return new get($selector);
    }

    /**
     * example getReportFields request.
     *
     * @param ReportCategory $reportCategory
     * @return getReportFields
     */
    public static function buildGetReportFieldsRequest(string $reportCategory): getReportFields
    {
        return new getReportFields($reportCategory);
    }

    /**
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @param ReportDefinition[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new ReportDefinitionOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example ReportDefinition request.
     *
     * @return ReportDefinition
     */
    public static function createExampleReportDefinition(): ReportDefinition
    {
        $operand = new ReportDefinition();
        $operand->setReportName('REACH-FREQUENCY-REPORT');
        $operand->setDateRangeType(ReportDateRangeType::YESTERDAY);
        $operand->setSortFields(['+FREQUENCY']);
        $operand->setFields(self::FREQUENCY_REPORT_FIELDS);
        $operand->setFrequencyRange(ReportFrequencyRange::DAILY);
        $operand->setFormat(ReportDownloadFormat::CSV);
        $operand->setEncode(ReportDownloadEncode::UTF8);
        $operand->setLang(ReportLang::EN);
        $operand->setAddTemplate(ReportAddTemplate::YES);
        return $operand;
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    ReportDefinitionServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage();
}
