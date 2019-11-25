<?php
/**
 * Copyright (C) 2019 Yahoo Japan Corporation. All Rights Reserved.
 */

namespace Jp\YahooApis\YDN\AdApiSample\Basic\Dictionary;

require_once __DIR__ . '/../../../../../../../vendor/autoload.php';

use Exception;
use Jp\YahooApis\YDN\AdApiSample\Util\SoapUtils;
use Jp\YahooApis\YDN\V201911\Dictionary\{CategorySelector,
    DeviceOsType,
    DictionaryLang,
    DictionaryService,
    DisapprovalReasonSelector,
    FeedItemGoogleProductCategorySelector,
    GeographicLocationSelector,
    getAudienceCategory,
    getAudienceCategoryResponse,
    getDisapprovalReason,
    getDisapprovalReasonResponse,
    getFeedItemGoogleProductCategory,
    getFeedItemGoogleProductCategoryResponse,
    getGeographicLocation,
    getGeographicLocationResponse,
    getInterestCategory,
    getInterestCategoryResponse,
    getMediaAdFormat,
    getMediaAdFormatResponse,
    getOsVersion,
    getOsVersionResponse,
    getSiteCategory,
    getSiteCategoryResponse,
    getThirdPartyTrackingDomain,
    getThirdPartyTrackingDomainResponse,
    OsVersionSelector};

/**
 * example DictionaryService operation and Utility method collection.
 */
class DictionaryServiceSample
{

    const SERVICE_NAME = 'DictionaryService';

    /**
     * @var DictionaryService
     */
    private static $service = null;

    /**
     * DictionaryServiceSample constructor.
     */
    public static function init()
    {
        // get ServiceInterface
        self::$service = self::$service ?? SoapUtils::getService(DictionaryService::class);
    }

    /**
     * example get DisapprovalReason.
     *
     * @param getDisapprovalReason $request
     * @return getDisapprovalReasonResponse
     * @throws Exception
     */
    public static function getDisapprovalReason(getDisapprovalReason $request): getDisapprovalReasonResponse
    {
        self::init();

        // Call API
        $response = self::$service->getDisapprovalReason($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getDisapprovalReason.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getDisapprovalReason.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getDisapprovalReason.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example get GeographicLocation.
     *
     * @param getGeographicLocation $request
     * @return getGeographicLocationResponse
     * @throws Exception
     */
    public static function getGeographicLocation(getGeographicLocation $request): getGeographicLocationResponse
    {
        self::init();

        // Call API
        $response = self::$service->getGeographicLocation($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getGeographicLocation.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getGeographicLocation.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getGeographicLocation.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example get InterestCategory.
     *
     * @param getInterestCategory $request
     * @return getInterestCategoryResponse
     * @throws Exception
     */
    public static function getInterestCategory(getInterestCategory $request): getInterestCategoryResponse
    {
        self::init();

        // Call API
        $response = self::$service->getInterestCategory($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getInterestCategory.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getInterestCategory.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getInterestCategory.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example get SiteCategory.
     *
     * @param getSiteCategory $request
     * @return getSiteCategoryResponse
     * @throws Exception
     */
    public static function getSiteCategory(getSiteCategory $request): getSiteCategoryResponse
    {
        self::init();

        // Call API
        $response = self::$service->getSiteCategory($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getSiteCategory.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getSiteCategory.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getSiteCategory.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example get OsVersion.
     *
     * @param getOsVersion $request
     * @return getOsVersionResponse
     * @throws Exception
     */
    public static function getOsVersion(getOsVersion $request): getOsVersionResponse
    {
        self::init();

        // Call API
        $response = self::$service->getOsVersion($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getOsVersion.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getOsVersion.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getOsVersion.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example get MediaAdFormat.
     *
     * @param getMediaAdFormat $request
     * @return getMediaAdFormatResponse
     * @throws Exception
     */
    public static function getMediaAdFormat(getMediaAdFormat $request): getMediaAdFormatResponse
    {
        self::init();

        // Call API
        $response = self::$service->getMediaAdFormat($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getMediaAdFormat.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getMediaAdFormat.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getMediaAdFormat.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example get AudienceCategory.
     *
     * @param getAudienceCategory $request
     * @return getAudienceCategoryResponse
     * @throws Exception
     */
    public static function getAudienceCategory(getAudienceCategory $request): getAudienceCategoryResponse
    {
        self::init();

        // Call API
        $response = self::$service->getAudienceCategory($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getAudienceCategory.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getAudienceCategory.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getAudienceCategory.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example get ThirdPartyTrackingDomain.
     *
     * @param getThirdPartyTrackingDomain $request
     * @return getThirdPartyTrackingDomainResponse
     * @throws Exception
     */
    public static function getThirdPartyTrackingDomain(getThirdPartyTrackingDomain $request): getThirdPartyTrackingDomainResponse
    {
        self::init();

        // Call API
        $response = self::$service->getThirdPartyTrackingDomain($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getThirdPartyTrackingDomain.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getThirdPartyTrackingDomain.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getThirdPartyTrackingDomain.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example get FeedItemGoogleProductCategory.
     *
     * @param getFeedItemGoogleProductCategory $request
     * @return getFeedItemGoogleProductCategoryResponse
     * @throws Exception
     */
    public static function getFeedItemGoogleProductCategory(getFeedItemGoogleProductCategory $request): getFeedItemGoogleProductCategoryResponse
    {
        self::init();

        // Call API
        $response = self::$service->getFeedItemGoogleProductCategory($request);

        // Error
        if (!is_null($response->getError())) {
            throw new Exception('Fail to ' . self::SERVICE_NAME . '/getFeedItemGoogleProductCategory.' . PHP_EOL);
        }

        // Response
        if (is_null($response->getRval()->getValues())) {
            throw new Exception('No response of ' . self::SERVICE_NAME . '/getFeedItemGoogleProductCategory.' . PHP_EOL);
        } else {

            // Error
            foreach ($response->getRval()->getValues() as $values) {
                if (!is_null($values->getError())) {
                    throw new Exception('Fail to ' . self::SERVICE_NAME . '/getFeedItemGoogleProductCategory.' . PHP_EOL);
                }
            }
        }

        return $response;
    }

    /**
     * example DictionaryService operation.
     * @throws Exception
     */
    public static function runExample(): void
    {
        try {
            // =================================================================
            // DictionaryService getDisapprovalReason
            // =================================================================
            // create request.
            $getDisapprovalReasonRequest = self::buildExampleGetDisapprovalReasonRequest();

            // run
            self::getDisapprovalReason($getDisapprovalReasonRequest);

            // =================================================================
            // DictionaryService getGeographicLocation
            // =================================================================
            // create request.
            $getGeographicLocationRequest = self::buildExampleGetGeographicLocationRequest();

            // run
            self::getGeographicLocation($getGeographicLocationRequest);

            // =================================================================
            // DictionaryService getInterestCategory
            // =================================================================
            // create request.
            $getInterestCategoryRequest = self::buildExampleGetInterestCategoryRequest();

            // run
            self::getInterestCategory($getInterestCategoryRequest);

            // =================================================================
            // DictionaryService getSiteCategory
            // =================================================================
            // create request.
            $getSiteCategoryRequest = self::buildExampleGetSiteCategoryRequest();

            // run
            self::getSiteCategory($getSiteCategoryRequest);

            // =================================================================
            // DictionaryService getOsVersion
            // =================================================================
            // create request.
            $getOsVersionRequest = self::buildExampleGetOsVersionRequest();

            // run
            self::getOsVersion($getOsVersionRequest);

            // =================================================================
            // DictionaryService getMediaAdFormat
            // =================================================================
            // create request.
            $getMediaAdFormatRequest = self::buildExampleGetMediaAdFormatRequest();

            // run
            self::getMediaAdFormat($getMediaAdFormatRequest);

            // =================================================================
            // DictionaryService getAudienceCategory
            // =================================================================
            // create request.
            $getAudienceCategoryRequest = self::buildExampleGetAudienceCategoryRequest();

            // run
            self::getAudienceCategory($getAudienceCategoryRequest);

            // =================================================================
            // DictionaryService getThirdPartyTrackingDomain
            // =================================================================
            // create request.
            $getThirdPartyTrackingDomainRequest = self::buildExampleGetThirdPartyTrackingDomainRequest();

            // run
            self::getThirdPartyTrackingDomain($getThirdPartyTrackingDomainRequest);

            // =================================================================
            // DictionaryService getFeedItemGoogleProductCategory
            // =================================================================
            // create request.
            $getFeedItemGoogleProductCategoryRequest = self::buildExampleGetFeedItemGoogleProductCategoryRequest();

            // run
            self::getFeedItemGoogleProductCategory($getFeedItemGoogleProductCategoryRequest);

        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }

    /**
     * example getDisapprovalReason request.
     *
     * @return getDisapprovalReason
     */
    public static function buildExampleGetDisapprovalReasonRequest(): getDisapprovalReason
    {
        return new getDisapprovalReason(
            new DisapprovalReasonSelector(DictionaryLang::EN)
        );
    }

    /**
     * example getGeographicLocation request.
     *
     * @return getGeographicLocation
     */
    public static function buildExampleGetGeographicLocationRequest(): getGeographicLocation
    {
        return new getGeographicLocation(
            new GeographicLocationSelector(DictionaryLang::EN)
        );
    }

    /**
     * example getInterestCategory request.
     *
     * @return getInterestCategory
     */
    public static function buildExampleGetInterestCategoryRequest(): getInterestCategory
    {
        return new getInterestCategory(
            new CategorySelector(DictionaryLang::EN)
        );
    }

    /**
     * example getSiteCategory request.
     *
     * @return getSiteCategory
     */
    public static function buildExampleGetSiteCategoryRequest(): getSiteCategory
    {
        return new getSiteCategory(
            new CategorySelector(DictionaryLang::EN)
        );
    }

    /**
     * example getOsVersion request.
     *
     * @return getOsVersion
     */
    public static function buildExampleGetOsVersionRequest(): getOsVersion
    {
        $selector=new OsVersionSelector();
        $selector->setOsType(DeviceOsType::ANDROID);
        return new getOsVersion($selector);
    }

    /**
     * example getMediaAdFormat request.
     *
     * @return getMediaAdFormat
     */
    public static function buildExampleGetMediaAdFormatRequest(): getMediaAdFormat
    {
        return new getMediaAdFormat();
    }

    /**
     * example getAudienceCategory request.
     *
     * @return getAudienceCategory
     */
    public static function buildExampleGetAudienceCategoryRequest(): getAudienceCategory
    {
        return new getAudienceCategory(
            new CategorySelector(DictionaryLang::EN)
        );
    }

    /**
     * example getThirdPartyTrackingDomain request.
     *
     * @return getThirdPartyTrackingDomain
     */
    public static function buildExampleGetThirdPartyTrackingDomainRequest(): getThirdPartyTrackingDomain
    {
        return new getThirdPartyTrackingDomain();
    }

    /**
     * example getFeedItemGoogleProductCategory request.
     *
     * @return getFeedItemGoogleProductCategory
     */
    public static function buildExampleGetFeedItemGoogleProductCategoryRequest(): getFeedItemGoogleProductCategory
    {
        return new getFeedItemGoogleProductCategory(
            new FeedItemGoogleProductCategorySelector(DictionaryLang::EN)
        );
    }
}

if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    DictionaryServiceSample::runExample();
} catch (Exception $e) {
    print $e->getMessage();
}
