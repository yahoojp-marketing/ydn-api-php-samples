<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\Video;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\V201911\Video\{UploadVideo,
    Video,
    ApprovalStatus,
    UserStatus,
    VideoOperation,
    VideoService,
    VideoSelector,
    get,
    getResponse,
    mutate,
    mutateResponse,
    Operator,
    getUploadUrl,
    getUploadUrlResponse};
use Jp\YahooApis\YDN\V201911\Paging;

/**
 * example VideoService operation and Utility method collection.
 */
class VideoServiceSample
{

    const SERVICE_NAME = 'VideoService';

    /**
     * @var VideoService
     */
    private static $service = null;

    /**
     * VideoServiceSample constructor.
     */
    private static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(VideoService::class);
    }

    /**
     * example get videos.
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
     * example mutate videos.
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
     * example getUploadUrl pageFeedItems.
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
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getUploadUrl.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getUploadUrl.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example get request.
     *
     * @param int $accountId, $mediaId
     * @return get
     */
    public static function buildExampleGetRequest($accountId, $mediaId): get
    {
        $selector = new VideoSelector($accountId);
        $selector->setMediaIds([$mediaId]);
        $selector->setApprovalStatuses([ApprovalStatus::REVIEW]);
        $selector->setUserStatuses([UserStatus::ACTIVE]);
        $paging = new Paging(1, 20);
        $selector->setPaging($paging);

        return new get($selector);
    }

    /**
     * example mutate request.
     *
     * @param Operator $operator
     * @param int $accountId
     * @param Video[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new VideoOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example getUploadUrl request.
     *
     * @param int $accountId
     * @return getUploadUrl
     */
    public static function buildExampleGetUploadUrl(int $accountId): getUploadUrl
    {
        $uploadVideo = new UploadVideo('SampleName_CreatedOn_' . SoapUtils::getCurrentTimestamp(),
            'SampleTitle_CreatedOn_' . SoapUtils::getCurrentTimestamp(), UserStatus::ACTIVE);

        return new getUploadUrl($accountId, $uploadVideo);
    }

    /**
     * example Video set request.
     *
     * @param int $accountId, int $mediaId
     * @return Video
     */
    public static function createExampleSetRequest(int $accountId, int $mediaId): Video
    {
        $operand = new Video($accountId);
        $operand->setMediaId($mediaId);
        $operand->setVideoTitle('SampleTitle_UpdatedOn_' . SoapUtils::getCurrentTimestamp());

        return $operand;
    }

    /**
     * example Video set request.
     *
     * @param int $accountId, int $mediaId
     * @return Video
     */
    public static function createExampleRemoveRequest(int $accountId, int $mediaId): Video
    {
        $operand = new Video($accountId);
        $operand->setMediaId($mediaId);

        return $operand;
    }

    public static function upload($url, $data)
    {
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_POST, 1 );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type: video/mp4'));
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );

        $result = curl_exec( $ch );
        $info   = curl_getinfo( $ch );

        print_r($result);

        $body = substr( $result, $info['header_size'] );

        curl_close($ch);

        return $body;
    }

    /**
     * example VideoService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        // =================================================================
        // Setting
        // =================================================================
        $accountId = SoapUtils::getAccountId();

        try {
            // =================================================================
            // VideoService UPLOAD
            // =================================================================
            // getUploadUrl
            $fileName = 'videoUploadSample.mp4';
            $getUploadUrl = self::buildExampleGetUploadUrl($accountId);

            $getUploadUrlResponse = self::getUploadUrl($getUploadUrl);
            foreach ($getUploadUrlResponse->getRval()->getValues() as $videoUploadUrlValues) {
                $uploadUrl = $videoUploadUrlValues->getUploadUrlValue()->getUploadUrl();
            }

            // upload
            $file_path = __DIR__ . '/../../../../../../upload/' . $fileName;
            $uploadResponse = self::upload($uploadUrl, $file_path);
            if ($uploadResponse === false) {
                exit();
            }
            $uploadResponseObj = json_decode($uploadResponse);
            $mediaId = $uploadResponseObj->ResultSet->Result[0]->uploadVideoData->mediaId;

            // =================================================================
            // VideoService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $mediaId);

            // run
            self::get($getRequest);

            // =================================================================
            // VideoService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId, [self::createExampleSetRequest($accountId, $mediaId)]);

            // run
            self::mutate($setRequest);

            // =================================================================
            // VideoService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId, [self::createExampleRemoveRequest($accountId, $mediaId)]);

            // run
            self::mutate($removeRequest);

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
    VideoServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
