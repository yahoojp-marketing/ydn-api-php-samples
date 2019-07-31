<?php

namespace Jp\YahooApis\YDN\V201907\Dictionary;

class DictionaryService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SoapHeader' => 'Jp\\YahooApis\\YDN\\V201907\\SoapHeader',
      'SoapResponseHeader' => 'Jp\\YahooApis\\YDN\\V201907\\SoapResponseHeader',
      'Paging' => 'Jp\\YahooApis\\YDN\\V201907\\Paging',
      'Error' => 'Jp\\YahooApis\\YDN\\V201907\\Error',
      'ErrorDetail' => 'Jp\\YahooApis\\YDN\\V201907\\ErrorDetail',
      'Page' => 'Jp\\YahooApis\\YDN\\V201907\\Page',
      'ReturnValue' => 'Jp\\YahooApis\\YDN\\V201907\\ReturnValue',
      'ListReturnValue' => 'Jp\\YahooApis\\YDN\\V201907\\ListReturnValue',
      'ColorSetSelector' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\ColorSetSelector',
      'ColorSetPage' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\ColorSetPage',
      'ColorSetValues' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\ColorSetValues',
      'ColorSet' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\ColorSet',
      'DisapprovalReasonSelector' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\DisapprovalReasonSelector',
      'DisapprovalReasonPage' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\DisapprovalReasonPage',
      'DisapprovalReasonValues' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\DisapprovalReasonValues',
      'DisapprovalReason' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\DisapprovalReason',
      'GeographicLocationSelector' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\GeographicLocationSelector',
      'GeographicLocationPage' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\GeographicLocationPage',
      'GeographicLocationValues' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\GeographicLocationValues',
      'GeographicLocation' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\GeographicLocation',
      'CategorySelector' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\CategorySelector',
      'CategoryPage' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\CategoryPage',
      'CategoryValues' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\CategoryValues',
      'Category' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\Category',
      'CategoryChildValues' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\CategoryChildValues',
      'getDisapprovalReason' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getDisapprovalReason',
      'getDisapprovalReasonResponse' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getDisapprovalReasonResponse',
      'getGeographicLocation' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getGeographicLocation',
      'getGeographicLocationResponse' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getGeographicLocationResponse',
      'getInterestCategory' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getInterestCategory',
      'getInterestCategoryResponse' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getInterestCategoryResponse',
      'getSiteCategory' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getSiteCategory',
      'getSiteCategoryResponse' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getSiteCategoryResponse',
      'getColorSet' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getColorSet',
      'getColorSetResponse' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getColorSetResponse',
      'getOsVersion' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getOsVersion',
      'getOsVersionResponse' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getOsVersionResponse',
      'OsVersionSelector' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\OsVersionSelector',
      'OsVersionPage' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\OsVersionPage',
      'OsVersionValues' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\OsVersionValues',
      'OsVersion' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\OsVersion',
      'getMediaAdFormat' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getMediaAdFormat',
      'getMediaAdFormatResponse' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\getMediaAdFormatResponse',
      'MediaAdFormatPage' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\MediaAdFormatPage',
      'MediaAdFormatValues' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\MediaAdFormatValues',
      'MediaAdFormat' => 'Jp\\YahooApis\\YDN\\V201907\\Dictionary\\MediaAdFormat',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201907/DictionaryService?wsdl';
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
