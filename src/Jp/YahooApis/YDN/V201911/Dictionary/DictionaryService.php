<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class DictionaryService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SoapHeader' => 'Jp\\YahooApis\\YDN\\V201911\\SoapHeader',
      'SoapResponseHeader' => 'Jp\\YahooApis\\YDN\\V201911\\SoapResponseHeader',
      'Paging' => 'Jp\\YahooApis\\YDN\\V201911\\Paging',
      'Error' => 'Jp\\YahooApis\\YDN\\V201911\\Error',
      'ErrorDetail' => 'Jp\\YahooApis\\YDN\\V201911\\ErrorDetail',
      'Page' => 'Jp\\YahooApis\\YDN\\V201911\\Page',
      'ReturnValue' => 'Jp\\YahooApis\\YDN\\V201911\\ReturnValue',
      'ListReturnValue' => 'Jp\\YahooApis\\YDN\\V201911\\ListReturnValue',
      'DisapprovalReasonSelector' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\DisapprovalReasonSelector',
      'DisapprovalReasonPage' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\DisapprovalReasonPage',
      'DisapprovalReasonValues' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\DisapprovalReasonValues',
      'DisapprovalReason' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\DisapprovalReason',
      'GeographicLocationSelector' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\GeographicLocationSelector',
      'GeographicLocationPage' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\GeographicLocationPage',
      'GeographicLocationValues' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\GeographicLocationValues',
      'GeographicLocation' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\GeographicLocation',
      'CategorySelector' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\CategorySelector',
      'CategoryPage' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\CategoryPage',
      'CategoryValues' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\CategoryValues',
      'Category' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\Category',
      'CategoryChildValues' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\CategoryChildValues',
      'AudienceCategoryPage' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\AudienceCategoryPage',
      'AudienceCategoryValues' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\AudienceCategoryValues',
      'AudienceCategory' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\AudienceCategory',
      'getDisapprovalReason' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getDisapprovalReason',
      'getDisapprovalReasonResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getDisapprovalReasonResponse',
      'getGeographicLocation' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getGeographicLocation',
      'getGeographicLocationResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getGeographicLocationResponse',
      'getInterestCategory' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getInterestCategory',
      'getInterestCategoryResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getInterestCategoryResponse',
      'getSiteCategory' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getSiteCategory',
      'getSiteCategoryResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getSiteCategoryResponse',
      'getAudienceCategory' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getAudienceCategory',
      'getAudienceCategoryResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getAudienceCategoryResponse',
      'getOsVersion' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getOsVersion',
      'getOsVersionResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getOsVersionResponse',
      'OsVersionSelector' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\OsVersionSelector',
      'OsVersionPage' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\OsVersionPage',
      'OsVersionValues' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\OsVersionValues',
      'OsVersion' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\OsVersion',
      'getMediaAdFormat' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getMediaAdFormat',
      'getMediaAdFormatResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getMediaAdFormatResponse',
      'MediaAdFormatPage' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\MediaAdFormatPage',
      'MediaAdFormatValues' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\MediaAdFormatValues',
      'MediaAdFormat' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\MediaAdFormat',
      'getThirdPartyTrackingDomain' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getThirdPartyTrackingDomain',
      'getThirdPartyTrackingDomainResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getThirdPartyTrackingDomainResponse',
      'ThirdPartyTrackingDomainPage' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\ThirdPartyTrackingDomainPage',
      'ThirdPartyTrackingDomainValues' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\ThirdPartyTrackingDomainValues',
      'ThirdPartyTrackingDomain' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\ThirdPartyTrackingDomain',
      'getFeedItemGoogleProductCategory' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getFeedItemGoogleProductCategory',
      'getFeedItemGoogleProductCategoryResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\getFeedItemGoogleProductCategoryResponse',
      'FeedItemGoogleProductCategorySelector' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\FeedItemGoogleProductCategorySelector',
      'FeedItemGoogleProductCategoryPage' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\FeedItemGoogleProductCategoryPage',
      'FeedItemGoogleProductCategoryValues' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\FeedItemGoogleProductCategoryValues',
      'FeedItemGoogleProductCategory' => 'Jp\\YahooApis\\YDN\\V201911\\Dictionary\\FeedItemGoogleProductCategory',
    );

    /**
     * @param array $options A array of config values
     * @param string $endpoint Service Endpont URL
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($wsdl = null, $endpoint = null, array $options = array())
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/DictionaryService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param getDisapprovalReason $parameters
     * @return getDisapprovalReasonResponse
     */
    public function getDisapprovalReason(getDisapprovalReason $parameters)
    {
      return parent::invoke('getDisapprovalReason', $parameters);
    }

    /**
     * @param getGeographicLocation $parameters
     * @return getGeographicLocationResponse
     */
    public function getGeographicLocation(getGeographicLocation $parameters)
    {
      return parent::invoke('getGeographicLocation', $parameters);
    }

    /**
     * @param getInterestCategory $parameters
     * @return getInterestCategoryResponse
     */
    public function getInterestCategory(getInterestCategory $parameters)
    {
      return parent::invoke('getInterestCategory', $parameters);
    }

    /**
     * @param getSiteCategory $parameters
     * @return getSiteCategoryResponse
     */
    public function getSiteCategory(getSiteCategory $parameters)
    {
      return parent::invoke('getSiteCategory', $parameters);
    }

    /**
     * @param getOsVersion $parameters
     * @return getOsVersionResponse
     */
    public function getOsVersion(getOsVersion $parameters)
    {
      return parent::invoke('getOsVersion', $parameters);
    }

    /**
     * @param getMediaAdFormat $parameters
     * @return getMediaAdFormatResponse
     */
    public function getMediaAdFormat(getMediaAdFormat $parameters)
    {
      return parent::invoke('getMediaAdFormat', $parameters);
    }

    /**
     * @param getAudienceCategory $parameters
     * @return getAudienceCategoryResponse
     */
    public function getAudienceCategory(getAudienceCategory $parameters)
    {
      return $this->__soapCall('getAudienceCategory', array($parameters));
    }

    /**
     * @param getThirdPartyTrackingDomain $parameters
     * @return getThirdPartyTrackingDomainResponse
     */
    public function getThirdPartyTrackingDomain(getThirdPartyTrackingDomain $parameters)
    {
      return $this->__soapCall('getThirdPartyTrackingDomain', array($parameters));
    }

    /**
     * @param getFeedItemGoogleProductCategory $parameters
     * @return getFeedItemGoogleProductCategoryResponse
     */
    public function getFeedItemGoogleProductCategory(getFeedItemGoogleProductCategory $parameters)
    {
      return $this->__soapCall('getFeedItemGoogleProductCategory', array($parameters));
    }

}
