<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupTarget;

class AdGroupTargetService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'AdGroupTargetSelector' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\AdGroupTargetSelector',
      'AdGroupTargetPage' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\AdGroupTargetPage',
      'AdGroupTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\AdGroupTarget',
      'Target' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\Target',
      'AdScheduleTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\AdScheduleTarget',
      'GeoTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\GeoTarget',
      'AgeTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\AgeTarget',
      'GenderTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\GenderTarget',
      'InterestCategoryTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\InterestCategoryTarget',
      'SearchTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\SearchTarget',
      'SiteCategoryTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\SiteCategoryTarget',
      'SiteRetargetingTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\SiteRetargetingTarget',
      'PlacementTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\PlacementTarget',
      'DeviceTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\DeviceTarget',
      'CarrierTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\CarrierTarget',
      'AppTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\AppTarget',
      'OsTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\OsTarget',
      'OsVersionTarget' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\OsVersionTarget',
      'AdGroupTargetOperation' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\AdGroupTargetOperation',
      'AdGroupTargetMutateOperation' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\AdGroupTargetMutateOperation',
      'AdGroupTargetReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\AdGroupTargetReturnValue',
      'AdGroupTargetValue' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\AdGroupTargetValue',
      'get' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\mutateResponse',
      'replace' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\replace',
      'replaceResponse' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupTarget\\replaceResponse',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/AdGroupTargetService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param get $parameters
     * @return getResponse
     */
    public function get(get $parameters)
    {
      return parent::invoke('get', $parameters);
    }

    /**
     * @param mutate $parameters
     * @return mutateResponse
     */
    public function mutate(mutate $parameters)
    {
      return parent::invoke('mutate', $parameters);
    }

    /**
     * @param replace $parameters
     * @return replaceResponse
     */
    public function replace(replace $parameters)
    {
      return parent::invoke('replace', $parameters);
    }

}
