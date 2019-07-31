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
use Jp\YahooApis\YDN\V201907\Paging;
use Jp\YahooApis\YDN\V201907\ReportDefinition\{get,
    getReportFields,
    getReportFieldsResponse,
    getResponse,
    mutate,
    mutateResponse,
    Operator,
    ReportDateRangeType,
    ReportDefinition,
    ReportDefinitionOperation,
    ReportDefinitionSelector,
    ReportDefinitionService,
    ReportDownloadEncode,
    ReportDownloadFormat,
    ReportFrequencyRange,
    ReportLang,
    ReportType,
    getClosedDate,
    ReportClosedDateSelector,
    getClosedDateResponse,
    ReportJobStatus
};

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
     * example getClosedDate Reports.
     *
     * @param getClosedDate $request
     * @return getClosedDateResponse
     * @throws Exception
     */
    public static function getClosedDate(getClosedDate $request): getClosedDateResponse
    {
        self::init();

        // Call API
        $response = self::$service->getClosedDate($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getClosedDate.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getClosedDate.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getClosedDate.' . PHP_EOL);
                }
            }
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
            $getReportFieldsRequest = self::buildGetReportFieldsRequest(ReportType::AD);

            // run
            self::getReportFields($getReportFieldsRequest);

            // =================================================================
            // ReportService getClosedDate
            // =================================================================
            // create request.
            $getClosedDateRequest = self::buildExampleGetClosedDateRequest($accountId);

            // run
            self::getClosedDate($getClosedDateRequest);

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
            // check job status
            self::checkStatus($valuesRepositoryFacade->getReportDefinitionValuesRepository()->getReportJobIds());

            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getReportDefinitionValuesRepository()->getReportJobIds());

            // run
            $getResponse = self::get($getRequest);

            $downloadUrl = null;
            foreach ($getResponse->getRval()->getValues() as $reportValues) {
                $downloadUrl = $reportValues->getReportDefinition()->getReportDownloadURL();
            }

            // =================================================================
            // ReportDefinitionService download (http request)
            // =================================================================
            SoapUtils::download($downloadUrl, 'reportDownloadSample.csv');

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
            $selector->setReportJobIds($reportIds);
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
     * example getClosedDate request.
     *
     * @param int $accountId
     * @return getClosedDate
     */
    public static function buildExampleGetClosedDateRequest(int $accountId): getClosedDate
    {
        return new getClosedDate(
            new ReportClosedDateSelector($accountId)
        );
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
        $operand->setLanguage(ReportLang::EN);
        return $operand;
    }

    /**
     * example check Report job status.
     *
     * @param int[] $jobIds
     * @return void
     * @throws Exception
     */
    public static function checkStatus(array $jobIds): void
    {

        // call 30sec sleep * 30 = 15minute
        for ($i = 0; $i < 30; $i++) {

            // sleep 30 second.
            print PHP_EOL . "***** sleep 30 seconds for Report Job Status Check *****" . PHP_EOL;
            sleep(30);

            // get
            $getRequest = self::buildExampleGetRequest(SoapUtils::getAccountId(), $jobIds);
            $getResponse = self::get($getRequest);

            $completedCount = 0;

            // check status
            foreach ($getResponse->getRval()->getValues() as $reportValues) {
                if (!is_null($reportValues->getReportDefinition()->getReportJobStatus())) {
                    switch ($reportValues->getReportDefinition()->getReportJobStatus()) {
                        default:
                        case ReportJobStatus::ACCEPTED:
                        case ReportJobStatus::IN_PROGRESS:
                            continue 1;
                        case ReportJobStatus::CANCELED:
                        case ReportJobStatus::FAILED:
                            throw new Exception('Report Job Status failed.');
                        case ReportJobStatus::COMPLETED:
                            $completedCount++;
                            continue 1;
                    }
                } else {
                    throw new Exception('Fail to get Report.');
                }
            }

            if (count($getResponse->getRval()->getValues()) === $completedCount) {
                return;
            }
        }

        throw new Exception('Fail to get Report.');
    }

    /**
     * download data from url.
     *
     * @param string $download_url
     * @param string $file_name
     * @return void
     */
    public static function download(string $download_url, string $file_name): void
    {
        $file_path = __DIR__ . '/../../../../../../download/' . $file_name;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $download_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        echo "------------------------------------\n";
        echo "Start download. \n";
        echo "DOWNLOAD_URL  = $download_url \n";
        echo "DOWNLOAD_FILE = $file_path \n";
        echo "------------------------------------\n";

        $data = curl_exec($ch);

        file_put_contents($file_path, $data);
        curl_close($ch);
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
