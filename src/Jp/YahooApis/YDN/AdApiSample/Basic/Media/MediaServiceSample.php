<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\Media;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Repository\ValuesRepositoryFacade;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\AdApiSample\Util\ValuesHolder;
use Jp\YahooApis\YDN\V201903\Media\{ImageMedia, LogoFlg, Media, MediaOperation, MediaRecord, MediaSelector, MediaService, get, getResponse, mutate, mutateResponse, Operator, UserStatus};
use Jp\YahooApis\YDN\V201903\Paging;

/**
 * example MediaService operation and Utility method collection.
 */
class MediaServiceSample
{

    const SERVICE_NAME = 'MediaService';

    /**
     * @var MediaService
     */
    private static $service = null;

    /**
     * MediaServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(MediaService::class);
    }

    /**
     * example get media.
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
     * example mutate media.
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
     * create basic Media.
     *
     * @return ValuesHolder
     * @throws Exception
     */
    public static function create(): ValuesHolder
    {
        $request = self::buildExampleMutateRequest(Operator::ADD, SoapUtils::getAccountId(), [
            self::createExampleMedia('SampleMedia.jpg', false),
        ]);
        $response = self::mutate($request);

        $selfValuesHolder = new ValuesHolder();
        $selfValuesHolder->setMediaValuesList($response->getRval()->getValues());
        return $selfValuesHolder;
    }

    /**
     * cleanup service object.
     *
     * @param ValuesHolder $valuesHolder
     * @throws Exception
     */
    public static function cleanup(ValuesHolder $valuesHolder): void
    {

        if (count($valuesHolder->getMediaValuesList()) > 0) {
            $mediaRecord = [];
            foreach ($valuesHolder->getMediaValuesList() as $list) {
                $mediaRecord[] = $list->getMediaRecord();
            }
            self::mutate(
                self::buildExampleMutateRequest(Operator::REMOVE, SoapUtils::getAccountId(),
                    $mediaRecord
                )
            );
        }
    }

    /**
     * example MediaService operation.
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
            // MediaService ADD
            // =================================================================
            // create request.
            $addRequest = self::buildExampleMutateRequest(Operator::ADD, $accountId, [
                self::createExampleMedia('SampleMedia.jpg', false),
            ]);

            // run
            $addResponse = self::mutate($addRequest);
            $valuesHolder->setMediaValuesList($addResponse->getRval()->getValues());

            // =================================================================
            // MediaService GET
            // =================================================================
            // create request.
            $getRequest = self::buildExampleGetRequest($accountId, $valuesRepositoryFacade->getMediaValuesRepository()->getMediaIds());

            // run
            self::get($getRequest);

            // =================================================================
            // MediaService SET
            // =================================================================
            // create request.
            $setRequest = self::buildExampleMutateRequest(Operator::SET, $accountId,
                self::createExampleSetRequest($valuesRepositoryFacade->getMediaValuesRepository()->getMediaRecord())
            );

            // run
            self::mutate($setRequest);

            // =================================================================
            // MediaService REMOVE
            // =================================================================
            // create request.
            $removeRequest = self::buildExampleMutateRequest(Operator::REMOVE, $accountId,
                $valuesRepositoryFacade->getMediaValuesRepository()->getMediaRecord()
            );

            // run
            self::mutate($removeRequest);
            $valuesHolder->setMediaValuesList([]);

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;

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
     * @param array $mediaIds
     * @return get
     */
    public static function buildExampleGetRequest(int $accountId, array $mediaIds): get
    {
        $selector = new MediaSelector($accountId);
        $selector->setUserStatuses([
            UserStatus::ACTIVE,
            UserStatus::PAUSED,
        ]);

        if (!is_null($mediaIds)) {
            $selector->setMediaIds($mediaIds);
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
     * @param Media[] $operand
     * @return mutate
     */
    public static function buildExampleMutateRequest(string $operator, int $accountId, array $operand): mutate
    {
        return new mutate(
            new MediaOperation($operator, $accountId, $operand)
        );
    }

    /**
     * example Media add request.
     *
     * @param string $fileName
     * @param bool $logoFlag
     * @return MediaRecord
     * @throws Exception
     */
    public static function createExampleMedia(string $fileName, bool $logoFlag): MediaRecord
    {
        // imageMedia
        $filePath = dirname(__FILE__) . '/../../../../../../../upload/' . $fileName ;
        if (!$file = file_get_contents($filePath)) {
            throw new Exception('Fail to add Media. file = ' . $filePath);
        }
        $imageMedia = new ImageMedia();
        $imageMedia->setData($file);

        // media
        $media = new MediaRecord(SoapUtils::getAccountId());
        $media->setMediaName('SampleMedia_CreateOn_' . SoapUtils::getCurrentTimestamp() . '.jpg');
        $media->setMediaTitle('SampleMedia_CreateOn_' . SoapUtils::getCurrentTimestamp());
        $media->setUserStatus(UserStatus::ACTIVE);
        $media->setMedia($imageMedia);
        if ($logoFlag) {
            $media->setLogoFlg(LogoFlg::TRUE);
        }

        return $media;
    }

    /**
     * example media set request.
     *
     * @param array $mediaRecord
     * @return array
     */
    public static function createExampleSetRequest(array $mediaRecord): array
    {
        // create operands
        $operands = [];

        foreach ($mediaRecord as $media) {
            $operand = new MediaRecord(SoapUtils::getAccountId());
            $operand->setMediaId($media->getMediaId());
            $operand->setMediaTitle('SampleMedia_UpdatedOn_' . SoapUtils::getCurrentTimestamp());
            $operand->setUserStatus(UserStatus::PAUSED);
            $operands[] = $operand;
        }

        return $operands;
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    MediaServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
