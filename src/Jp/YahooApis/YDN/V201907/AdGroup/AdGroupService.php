<?php

namespace Jp\YahooApis\YDN\V201907\AdGroup;

class AdGroupService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'AdGroupSelector' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\AdGroupSelector',
      'AdGroupPage' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\AdGroupPage',
      'AdGroupValues' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\AdGroupValues',
      'AdGroup' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\AdGroup',
      'AdGroupBid' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\AdGroupBid',
      'ManualCPCAdGroupBid' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\ManualCPCAdGroupBid',
      'ManualCPVAdGroupBid' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\ManualCPVAdGroupBid',
      'AdGroupConversionOptimizer' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\AdGroupConversionOptimizer',
      'AutoAdGroupConversionOptimizer' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\AutoAdGroupConversionOptimizer',
      'ManualAdGroupConversionOptimizer' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\ManualAdGroupConversionOptimizer',
      'NoneAdGroupConversionOptimizer' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\NoneAdGroupConversionOptimizer',
      'AdGroupOperation' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\AdGroupOperation',
      'AdGroupReturnValue' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\AdGroupReturnValue',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\Operation',
      'get' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\mutateResponse',
      'Label' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroup\\Label',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201907/AdGroupService?wsdl';
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

}
