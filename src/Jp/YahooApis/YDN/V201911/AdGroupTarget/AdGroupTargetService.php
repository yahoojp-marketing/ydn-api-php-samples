<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupTarget;

class AdGroupTargetService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'AdGroupTargetSelector' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\AdGroupTargetSelector',
      'AdGroupTargetPage' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\AdGroupTargetPage',
      'AdGroupTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\AdGroupTarget',
      'Target' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\Target',
      'AdScheduleTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\AdScheduleTarget',
      'GeoTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\GeoTarget',
      'AgeTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\AgeTarget',
      'GenderTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\GenderTarget',
      'InterestCategoryTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\InterestCategoryTarget',
      'SearchTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\SearchTarget',
      'SiteCategoryTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\SiteCategoryTarget',
      'SiteRetargetingTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\SiteRetargetingTarget',
      'PlacementTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\PlacementTarget',
      'DeviceTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\DeviceTarget',
      'CarrierTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\CarrierTarget',
      'AppTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\AppTarget',
      'OsTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\OsTarget',
      'OsVersionTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\OsVersionTarget',
      'AudienceCategoryTarget' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\AudienceCategoryTarget',
      'AdGroupTargetOperation' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\AdGroupTargetOperation',
      'AdGroupTargetMutateOperation' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\AdGroupTargetMutateOperation',
      'AdGroupTargetReturnValue' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\AdGroupTargetReturnValue',
      'AdGroupTargetValue' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\AdGroupTargetValue',
      'get' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\mutateResponse',
      'replace' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\replace',
      'replaceResponse' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupTarget\\replaceResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/AdGroupTargetService?wsdl';
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
