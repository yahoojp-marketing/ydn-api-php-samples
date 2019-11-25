<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\FeedData;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use DOMDocument;
use Exception;
use Jp\YahooApis\YDN\AdApiSample\Basic\FeedHolder\FeedHolderServiceSample;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201911\FeedData\{FeedDataSelector,
    FeedDataService,
    FileUploadDateRange,
    FileUploadStatus,
    getUploadStatus,
    getUploadStatusResponse,
    getUploadUrl,
    getUploadUrlResponse,
    ItemListUploadType};
use Jp\YahooApis\YDN\V201911\Paging;

/**
 * example FeedDataService operation and Utility method collection.
 */
class FeedDataServiceSample
{

    const SERVICE_NAME = 'FeedDataService';

    /**
     * @var FeedDataService
     */
    private static $service = null;

    /**
     * FeedDataServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(FeedDataService::class);
    }

    /**
     * example getUploadUrl FeedData.
     *
     * @param getUploadUrl $request
     * @return getUploadUrlResponse
     * @throws Exception
     */
    public static function getUploadUrl(getUploadUrl $request): getUploadUrlResponse
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
        }

        return $response;
    }

    /**
     * example getUploadStatus FeedData.
     *
     * @param getUploadStatus $request
     * @return getUploadStatusResponse
     * @throws Exception
     */
    public static function getUploadStatus(getUploadStatus $request): getUploadStatusResponse
    {
        self::init();

        // Call API
        $response = self::$service->getUploadStatus($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getUploadStatus.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getUploadStatus.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getUploadStatus.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example check FeedData Upload job status.
     *
     * @param int[] $feedHolderIds
     * @param int[] $itemListUploadIds
     * @return void
     * @throws Exception
     */
    public static function checkUploadStatus(array $feedHolderIds, array $itemListUploadIds): void
    {

        // call 30sec sleep * 30 = 15minute
        for ($i = 0; $i < 30; $i++) {

            // sleep 30 second.
            print PHP_EOL . '***** sleep 30 seconds for Upload Status *****' . PHP_EOL;
            sleep(30);

            // get
            $getRequest = self::buildExampleGetUploadStatusRequest(SoapUtils::getAccountId(), $feedHolderIds, $itemListUploadIds);
            $getResponse = self::getUploadStatus($getRequest);

            $completedCount = 0;

            // upload job check.
            foreach ($getResponse->getRval()->getValues() as $feedDataValues) {

                if (!is_null($feedDataValues->getFeedData()->getItemListUploadStatus())) {

                    // error file download.
                    if(!is_null($feedDataValues->getFeedData()->getErrorListDownloadUrl())){
                        SoapUtils::download($feedDataValues->getFeedData()->getErrorListDownloadUrl(), 'SampleFeedDataUploadErrorFile.zip');
                    }

                    switch ($feedDataValues->getFeedData()->getItemListUploadStatus()) {
                        default:
                        case FileUploadStatus::FILE_FORMAT_ERROR:
                        case FileUploadStatus::SYSTEM_ERROR:
                            throw new Exception('check upload Status failed.');
                        case FileUploadStatus::UPLOADED:
                            continue 1;
                        case FileUploadStatus::COMPLETED:
                            $completedCount++;
                            continue 1;
                    }
                } else {
                    throw new Exception('Fail to getUploadStatus FeedDataService.');
                }
            }

            if (count($getResponse->getRval()->getValues()) === $completedCount) {
                return;
            }
        }

        throw new Exception('Fail to getUploadStatus FeedDataService.');
    }

    /**
     * check & create upper service object.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    private static function setup(): ValuesHolder
    {
        return FeedHolderServiceSample::create();
    }

    /**
     * cleanup service object.
     *
     * @param ValuesHolder $valuesHolder
     * @throws Exception
     */
    public static function cleanup(ValuesHolder $valuesHolder): void
    {
        FeedHolderServiceSample::cleanup($valuesHolder);
    }

    /**
     * example FeedDataService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        // =================================================================
        // Setup
        // =================================================================
        $accountId = SoapUtils::getAccountId();
        $valuesHolder = new ValuesHolder();

        try {
            // =================================================================
            // check & create upper service object.
            // =================================================================
            $valuesHolder = self::setup();
            $valuesRepositoryFacade = new ValuesRepositoryFacade($valuesHolder);
            $feedHolderId = $valuesRepositoryFacade->getFeedHolderValuesRepository()->getFeedHolderIds()[0];

            $fileName = 'feedDataUploadSample.zip';

            // =================================================================
            // FeedDataService getUploadUrl
            // =================================================================
            // create request.
            $getUploadUrlRequest = self::buildExampleGetUploadUrlRequest($accountId, $feedHolderId);

            // run
            $getUploadUrlResponse = self::getUploadUrl($getUploadUrlRequest);
            $uploadUrl = $getUploadUrlResponse->getRval()->getUploadUrl();

            //=================================================================
            // FeedDataService upload (http request)
            //=================================================================
            // run
            $uploadResponse = SoapUtils::upload($uploadUrl, $fileName);
            if ($uploadResponse === false) {
                exit();
            }
            $doc = new DOMDocument();
            $doc->loadXML($uploadResponse);
            $nodeList = $doc->getElementsByTagName('itemListUploadId');
            $itemListUploadId = $nodeList->item(0)->nodeValue;

            // =================================================================
            // FeedDataService getUploadStatus
            // =================================================================
            // create request.
            $getUploadStatusRequest = self::buildExampleGetUploadStatusRequest($accountId, [$feedHolderId], [$itemListUploadId]);

            // run
            self::getUploadStatus($getUploadStatusRequest);

            // check job status
            self::checkUploadStatus([$feedHolderId], [$itemListUploadId]);

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
     * example getUploadUrl request.
     *
     * @param int $accountId
     * @param int $feedHolderId
     * @return getUploadUrl
     */
    public static function buildExampleGetUploadUrlRequest(int $accountId, int $feedHolderId): getUploadUrl
    {
        return new getUploadUrl($accountId, ItemListUploadType::UPDATE_ALL, $feedHolderId, false);
    }

    /**
     * example getUploadStatus request.
     *
     * @param int $accountId
     * @param int[] $feedHolderIds
     * @param int[] $itemListUploadIds
     * @return getUploadStatus
     */
    public static function buildExampleGetUploadStatusRequest(int $accountId, array $feedHolderIds, array $itemListUploadIds): getUploadStatus
    {
        $selector = new FeedDataSelector($accountId);
        $selector->setFeedHolderIds($feedHolderIds);
        $selector->setItemListUploadIds($itemListUploadIds);

        $dateRange = new FileUploadDateRange();
        $dateRange->setStartDate(date("Ym01", time()));
        $dateRange->setEndDate( date("Ymd"));
        $selector->setDateRange($dateRange);

        $paging = new Paging(1, 20);
        $selector->setPaging($paging);

        return new getUploadStatus($selector);
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    FeedDataServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
