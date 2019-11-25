<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\AuditLog;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\V201911\AuditLog\{
    AuditLogDateRange,
    AuditLogDownloadJobStatus,
    AuditLogDownloadSelector,
    AuditLogDownloadStatusSelector,
    AuditLogJob,
    AuditLogLang,
    AuditLogService,
    getDownload,
    getDownloadResponse,
    getDownloadStatus,
    getDownloadStatusResponse};

/**
 * example AuditLogService operation and Utility method collection.
 */
class AuditLogServiceSample
{

    const SERVICE_NAME = 'AuditLogService';

    /**
     * @var AuditLogService
     */
    private static $service = null;

    /**
     * AuditLogServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(AuditLogService::class);
    }

    /**
     * example getDownload AuditLog.
     *
     * @param getDownload $request
     * @return getDownloadResponse
     * @throws Exception
     */
    public static function getDownload(getDownload $request): getDownloadResponse
    {
        self::init();

        // Call API
        $response = self::$service->getDownload($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getDownload.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getDownload.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getDownload.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example getDownloadStatus AuditLog.
     *
     * @param getDownloadStatus $request
     * @return getDownloadStatusResponse
     * @throws Exception
     */
    public static function getDownloadStatus(getDownloadStatus $request): getDownloadStatusResponse
    {
        self::init();

        // Call API
        $response = self::$service->getDownloadStatus($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getDownloadStatus.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getDownloadStatus.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getDownloadStatus.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example check AuditLog job status.
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
            print PHP_EOL . "***** sleep 30 seconds for AuditLog Job Status Check *****" . PHP_EOL;
            sleep(30);

            // get
            $getDownloadStatusRequest = self::buildExampleGetDownloadStatusRequest(SoapUtils::getAccountId(), $jobIds);
            $getDownloadStatusResponse = self::getDownloadStatus($getDownloadStatusRequest);

            $completedCount = 0;

            // check status
            foreach ($getDownloadStatusResponse->getRval()->getValues() as $auditLogDownloadValues) {
                if (!is_null($auditLogDownloadValues->getAuditLogJob()->getAuditLogJobStatus())) {
                    switch ($auditLogDownloadValues->getAuditLogJob()->getAuditLogJobStatus()) {
                        default:
                        case AuditLogDownloadJobStatus::IN_PROGRESS:
                            continue 1;
                        case AuditLogDownloadJobStatus::SYSTEM_ERROR:
                            throw new Exception('AuditLog Job Status failed.');
                        case AuditLogDownloadJobStatus::COMPLETED:
                            $completedCount++;
                            continue 1;
                    }
                } else {
                    throw new Exception('Fail to get AuditLog.');
                }
            }

            if (count($getDownloadStatusResponse->getRval()->getValues()) === $completedCount) {
                return;
            }
        }

        throw new Exception('Fail to get AuditLog.');
    }

    /**
     * example AuditLogService operation.
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
            // AuditLogService getDownload
            // =================================================================
            // create request.
            $getDownloadRequest = self::buildExampleGetDownloadRequest($accountId);

            // run
            $getDownloadResponse = self::getDownload($getDownloadRequest);

            $jobId = null;
            foreach ($getDownloadResponse->getRval()->getValues() as $auditLogDownloadValues) {
                $jobId = $auditLogDownloadValues->getAuditLogJob()->getAuditLogJobId();
            }

            // =================================================================
            // AuditLogService getDownloadStatus
            // =================================================================
            // check job status
            self::checkStatus([$jobId]);

            // create request.
            $getDownloadStatusRequest = self::buildExampleGetDownloadStatusRequest($accountId, [$jobId]);

            // run
            $getDownloadStatusResponse = self::getDownloadStatus($getDownloadStatusRequest);

            $downloadUrl = null;
            foreach ($getDownloadStatusResponse->getRval()->getValues() as $auditLogDownloadValues) {
                $downloadUrl = $auditLogDownloadValues->getAuditLogJob()->getDownloadAuditLogDownloadUrl();
            }

            // =================================================================
            // AuditLogService download (http request)
            // =================================================================
            SoapUtils::download($downloadUrl, 'auditLogDownloadSample.csv');

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }

    /**
     * example getDownload request.
     *
     * @param int $accountId
     * @return getDownload
     */
    public static function buildExampleGetDownloadRequest(int $accountId): getDownload
    {
        $selector = new AuditLogDownloadSelector($accountId);
        $selector->setLang(AuditLogLang::EN);

        $auditLogDateRange = new AuditLogDateRange();
        $auditLogDateRange->setStartDate(date("Ymd"));
        $auditLogDateRange->setEndDate(date("Ymd"));
        $selector->setDateRange($auditLogDateRange);

        $auditLogJob = new AuditLogJob();
        $auditLogJob->setAuditLogJobName('sample_job_name');
        $selector->setAuditLogJob($auditLogJob);

        return new getDownload($selector);
    }

    /**
     * example getDownloadStatus request.
     *
     * @param int $accountId
     * @param int[] $auditLogJobIds
     * @return getDownloadStatus
     */
    public static function buildExampleGetDownloadStatusRequest(int $accountId, array $auditLogJobIds): getDownloadStatus
    {
        $selector = new AuditLogDownloadStatusSelector($accountId);
        $selector->setAuditLogJobIds($auditLogJobIds);
        return new getDownloadStatus($selector);
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    AuditLogServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage();
}
