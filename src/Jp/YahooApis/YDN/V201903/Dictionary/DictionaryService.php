<?php

namespace Jp\YahooApis\YDN\V201903\Dictionary;

class DictionaryService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SoapHeader' => 'Jp\\YahooApis\\YDN\\V201903\\SoapHeader',
      'SoapResponseHeader' => 'Jp\\YahooApis\\YDN\\V201903\\SoapResponseHeader',
      'Paging' => 'Jp\\YahooApis\\YDN\\V201903\\Paging',
      'Error' => 'Jp\\YahooApis\\YDN\\V201903\\Error',
      'ErrorDetail' => 'Jp\\YahooApis\\YDN\\V201903\\ErrorDetail',
      'Page' => 'Jp\\YahooApis\\YDN\\V201903\\Page',
      'ReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\ReturnValue',
      'ListReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\ListReturnValue',
      'ColorSetSelector' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\ColorSetSelector',
      'ColorSetPage' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\ColorSetPage',
      'ColorSetValues' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\ColorSetValues',
      'ColorSet' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\ColorSet',
      'DisapprovalReasonSelector' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\DisapprovalReasonSelector',
      'DisapprovalReasonPage' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\DisapprovalReasonPage',
      'DisapprovalReasonValues' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\DisapprovalReasonValues',
      'DisapprovalReason' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\DisapprovalReason',
      'GeographicLocationSelector' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\GeographicLocationSelector',
      'GeographicLocationPage' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\GeographicLocationPage',
      'GeographicLocationValues' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\GeographicLocationValues',
      'GeographicLocation' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\GeographicLocation',
      'CategorySelector' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\CategorySelector',
      'CategoryPage' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\CategoryPage',
      'CategoryValues' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\CategoryValues',
      'Category' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\Category',
      'CategoryChildValues' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\CategoryChildValues',
      'getDisapprovalReason' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getDisapprovalReason',
      'getDisapprovalReasonResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getDisapprovalReasonResponse',
      'getGeographicLocation' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getGeographicLocation',
      'getGeographicLocationResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getGeographicLocationResponse',
      'getInterestCategory' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getInterestCategory',
      'getInterestCategoryResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getInterestCategoryResponse',
      'getSiteCategory' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getSiteCategory',
      'getSiteCategoryResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getSiteCategoryResponse',
      'getColorSet' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getColorSet',
      'getColorSetResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getColorSetResponse',
      'getOsVersion' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getOsVersion',
      'getOsVersionResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getOsVersionResponse',
      'OsVersionSelector' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\OsVersionSelector',
      'OsVersionPage' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\OsVersionPage',
      'OsVersionValues' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\OsVersionValues',
      'OsVersion' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\OsVersion',
      'getMediaAdFormat' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getMediaAdFormat',
      'getMediaAdFormatResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\getMediaAdFormatResponse',
      'MediaAdFormatPage' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\MediaAdFormatPage',
      'MediaAdFormatValues' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\MediaAdFormatValues',
      'MediaAdFormat' => 'Jp\\YahooApis\\YDN\\V201903\\Dictionary\\MediaAdFormat',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/DictionaryService?wsdl';
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
     * @param getColorSet $parameters
     * @return getColorSetResponse
     */
    public function getColorSet(getColorSet $parameters)
    {
      return parent::invoke('getColorSet', $parameters);
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

}
