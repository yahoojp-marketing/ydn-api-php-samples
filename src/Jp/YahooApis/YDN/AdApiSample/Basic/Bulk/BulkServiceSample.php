<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\Bulk;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use DOMDocument;
use Exception;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\V201903\Bulk\{ApprovalStatus,
    BulkDownloadSelector,
    BulkDownloadStatusSelector,
    BulkDownloadType,
    BulkEncoding,
    BulkLang,
    BulkOutput,
    BulkService,
    BulkUploadStatusSelector,
    DownloadBulkJobStatus,
    EntityType,
    getBulkDownload,
    getBulkDownloadResponse,
    getBulkDownloadStatus,
    getBulkDownloadStatusResponse,
    getBulkUploadStatus,
    getBulkUploadStatusResponse,
    getUploadUrl,
    getUploadUrlResponse,
    MediaApprovalStatus,
    UploadBulkJobStatus,
    UserStatus};
use Jp\YahooApis\YDN\V201903\Paging;

/**
 * example BulkService operation and Utility method collection.
 */
class BulkServiceSample
{

    const SERVICE_NAME = 'BulkService';

    /**
     * @var BulkService
     */
    private static $service = null;

    /**
     * BulkServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(BulkService::class);
    }

    /**
     * example getUploadUrl Bulk.
     *
     * @param getUploadUrl $request
     * @return getUploadUrlResponse
     * @throws Exception
     */
    public static function getUploadUrl(getUploadUrl $request):getUploadUrlResponse
    {
        self::init();

        // Call API
        $response = self::$service->getUploadUrl($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getUploadUrl.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getUploadUrl.' . PHP_EOL);
        } else {

            // Error
            if(!$response->getRval()->getAcceptableUploadStatus()){
                throw new Exception('Bulk Upload is unacceptable now.' . PHP_EOL);
            }
        }

        return $response;
    }

    /**
     * example getBulkUploadStatus Bulk.
     *
     * @param getBulkUploadStatus $request
     * @return getBulkUploadStatusResponse
     * @throws Exception
     */
    public static function getBulkUploadStatus(getBulkUploadStatus $request):getBulkUploadStatusResponse
    {
        self::init();

        // Call API
        $response = self::$service->getBulkUploadStatus($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getBulkUploadStatus.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getBulkUploadStatus.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getBulkUploadStatus.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example getBulkDownload Bulk.
     *
     * @param getBulkDownload $request
     * @return getBulkDownloadResponse
     * @throws Exception
     */
    public static function getBulkDownload(getBulkDownload $request):getBulkDownloadResponse
    {
        self::init();

        // Call API
        $response = self::$service->getBulkDownload($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getBulkDownload.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getBulkDownload.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getBulkDownload.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example getBulkDownloadStatus Bulk.
     *
     * @param getBulkDownloadStatus $request
     * @return getBulkDownloadStatusResponse
     * @throws Exception
     */
    public static function getBulkDownloadStatus(getBulkDownloadStatus $request):getBulkDownloadStatusResponse
    {
        self::init();

        // Call API
        $response = self::$service->getBulkDownloadStatus($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getBulkDownloadStatus.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getBulkDownloadStatus.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getBulkDownloadStatus.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example check Bulk Upload job status.
     *
     * @param int[] $jobIds
     * @return void
     * @throws Exception
     */
    public static function checkBulkUploadStatus(array $jobIds): void
    {

        // call 30sec sleep * 30 = 15minute
        for ($i = 0; $i < 30; $i++) {

            // sleep 30 second.
            print PHP_EOL . '***** sleep 30 seconds for Bulk Upload Job *****' . PHP_EOL;
            sleep(30);

            // get
            $getRequest = self::buildExampleGetBulkUploadStatusRequest(SoapUtils::getAccountId(), $jobIds);
            $getResponse = self::getBulkUploadStatus($getRequest);

            $completedCount = 0;

            // upload job check.
            foreach ($getResponse->getRval()->getValues() as $bulkUploadValues) {

                if (!is_null($bulkUploadValues->getUploadBulkJob()->getUploadBulkJobStatus())) {
                    switch ($bulkUploadValues->getUploadBulkJob()->getUploadBulkJobStatus()) {
                        default:
                        case UploadBulkJobStatus::FILE_FORMAT_ERROR:
                        case UploadBulkJobStatus::TIMEOUT:
                        case UploadBulkJobStatus::SYSTEM_ERROR:
                            throw new Exception('check upload Status failed.');
                        case UploadBulkJobStatus::IN_PROGRESS:
                            continue 1;
                        case UploadBulkJobStatus::COMPLETED:
                            $completedCount++;
                            continue 1;
                    }
                } else {
                    throw new Exception('Fail to getBulkUploadStatus BulkService.');
                }
            }

            if (count($getResponse->getRval()->getValues()) === $completedCount) {
                return;
            }
        }

        throw new Exception('Fail to getBulkUploadStatus BulkService.');
    }

    /**
     * example check Bulk Download job status.
     *
     * @param int[] $jobIds
     * @return void
     * @throws Exception
     */
    public static function checkBulkDownloadStatus(array $jobIds): void
    {

        // call 30sec sleep * 30 = 15minute
        for ($i = 0; $i < 30; $i++) {

            // sleep 30 second.
            print PHP_EOL . '***** sleep 30 seconds for Bulk Download Job *****' . PHP_EOL;
            sleep(30);

            // get
            $getRequest = self::buildExampleGetBulkDownloadStatusRequest(SoapUtils::getAccountId(), $jobIds);
            $getResponse = self::getBulkDownloadStatus($getRequest);

            $completedCount = 0;

            // upload job check.
            foreach ($getResponse->getRval()->getValues() as $bulkUploadValues) {

                if (!is_null($bulkUploadValues->getDownloadBulkJob()->getDownloadJobStatus())) {
                    switch ($bulkUploadValues->getDownloadBulkJob()->getDownloadJobStatus()) {
                        default:
                        case DownloadBulkJobStatus::TIMEOUT:
                        case DownloadBulkJobStatus::SYSTEM_ERROR:
                            throw new Exception('check download Status failed.');
                        case DownloadBulkJobStatus::IN_PROGRESS:
                            continue 1;
                        case DownloadBulkJobStatus::COMPLETED:
                            $completedCount++;
                            continue 1;
                    }
                } else {
                    throw new Exception('Fail to getBulkDownloadStatus BulkService.');
                }
            }

            if (count($getResponse->getRval()->getValues()) === $completedCount) {
                return;
            }
        }

        throw new Exception('Fail to getBulkDownloadStatus BulkService.');
    }

    /**
     * example BulkService operation.
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
            // BulkService getUploadUrl
            // =================================================================
            // create request.
            $getUploadUrlRequest = self::buildExampleGetUploadUrlRequest($accountId);

            // run
            $getUploadUrlResponse = self::getUploadUrl($getUploadUrlRequest);
            $uploadUrl = $getUploadUrlResponse->getRval()->getUploadUrl();

            // =================================================================
            // BulkService upload (http request)
            // =================================================================
            // run
            $uploadResponse = SoapUtils::upload($uploadUrl, 'bulkUploadSample.csv');
            if ($uploadResponse === false) {
                exit();
            }
            $doc = new DOMDocument();
            $doc->loadXML($uploadResponse);
            $nodeList = $doc->getElementsByTagName('uploadBulkJobId');
            $uploadBulkJobId = $nodeList->item(0)->nodeValue;

            // =================================================================
            // BulkService getBulkUploadStatus
            // =================================================================
            // check job status
            self::checkBulkUploadStatus([$uploadBulkJobId]);

            // create request.
            $getBulkUploadStatusRequest = self::buildExampleGetBulkUploadStatusRequest($accountId, [$uploadBulkJobId]);

            // run
            $getBulkUploadStatusResponse = self::getBulkUploadStatus($getBulkUploadStatusRequest);
            $downloadUrl = null;
            foreach ($getBulkUploadStatusResponse->getRval()->getValues() as $bulkDownloadValues) {
                $downloadUrl = $bulkDownloadValues->getUploadBulkJob()->getDownloadBulkUploadFileUrl();
            }

            // =================================================================
            // BulkService download for upload result (http request)
            // =================================================================
            SoapUtils::download($downloadUrl, 'bulkUploadFileDownloadSample.csv');

            // =================================================================
            // BulkService getBulkDownload
            // =================================================================
            // create request.
            $getBulkDownloadRequest = self::buildExampleGetBulkDownloadRequest($accountId);

            // run
            $getBulkDownloadResponse = self::getBulkDownload($getBulkDownloadRequest);
            $downloadBulkJobId = null;
            foreach ($getBulkDownloadResponse->getRval()->getValues() as $bulkDownloadValues) {
                $downloadBulkJobId = $bulkDownloadValues->getDownloadBulkJob()->getDownloadBulkJobId();
            }

            // =================================================================
            // BulkService getBulkDownloadStatus
            // =================================================================
            // check job status
            self::checkBulkDownloadStatus([$downloadBulkJobId]);

            // create request.
            $getDownloadStatusRequest = self::buildExampleGetBulkDownloadStatusRequest($accountId, [$downloadBulkJobId]);

            // run
            $getBulkDownloadStatusResponse = self::getBulkDownloadStatus($getDownloadStatusRequest);
            $downloadUrl = null;
            foreach ($getBulkDownloadStatusResponse->getRval()->getValues() as $bulkDownloadValues) {
                $downloadUrl = $bulkDownloadValues->getDownloadBulkJob()->getDownloadBulkDownloadUrl();
            }

            // =================================================================
            // BulkService download (http request)
            // =================================================================
            SoapUtils::download($downloadUrl, 'bulkDownloadSample.csv');

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }

    /**
     * example getUploadUrl request.
     *
     * @param int $accountId
     * @return getUploadUrl
     */
    public static function buildExampleGetUploadUrlRequest(int $accountId): getUploadUrl
    {
        return new getUploadUrl($accountId, 'sample-job-name');
    }

    /**
     * example getBulkUploadStatus request.
     *
     * @param int $accountId
     * @param int[] $uploadBulkJobIds
     * @return getBulkUploadStatus
     */
    public static function buildExampleGetBulkUploadStatusRequest(int $accountId, array $uploadBulkJobIds): getBulkUploadStatus
    {
        $selector = new BulkUploadStatusSelector($accountId, $uploadBulkJobIds);
        $paging = new Paging(1, 20);
        $selector->setPaging($paging);
        return new getBulkUploadStatus($selector);
    }

    /**
     * example getBulkDownload request.
     *
     * @param int $accountId
     * @return getBulkDownload
     */
    public static function buildExampleGetBulkDownloadRequest(int $accountId): getBulkDownload
    {
        $selector = new BulkDownloadSelector($accountId, BulkOutput::CSV, BulkEncoding::UTF8);
        $selector->setCampaignUserStatuses([UserStatus::ACTIVE]);
        $selector->setAdGroupUserStatuses([UserStatus::ACTIVE]);
        $selector->setAdGroupAdUserStatuses([UserStatus::ACTIVE]);
        $selector->setMediaUserStatuses([UserStatus::ACTIVE]);
        $selector->setAdGroupAdApprovalStatuses([ApprovalStatus::APPROVED]);
        $selector->setMediaApprovalStatuses([MediaApprovalStatus::APPROVED]);
        $selector->setLang(BulkLang::EN);
        $selector->setEntityTypes(EntityType::ALL);
        $selector->setDownloadType(BulkDownloadType::CAMPAIGN);
        return new getBulkDownload($selector);
    }

    /**
     * example getBulkUploadStatus request.
     *
     * @param int $accountId
     * @param int[] $downloadBulkJobIds
     * @return getBulkDownloadStatus
     */
    public static function buildExampleGetBulkDownloadStatusRequest(int $accountId, array $downloadBulkJobIds): getBulkDownloadStatus
    {
        $selector = new BulkDownloadStatusSelector($accountId, $downloadBulkJobIds);
        $paging = new Paging(1, 20);
        $selector->setPaging($paging);
        return new getBulkDownloadStatus($selector);
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    BulkServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage();
}
