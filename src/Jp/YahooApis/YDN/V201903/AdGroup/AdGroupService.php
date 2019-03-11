<?php

namespace Jp\YahooApis\YDN\V201903\AdGroup;

class AdGroupService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'AdGroupSelector' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\AdGroupSelector',
      'AdGroupPage' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\AdGroupPage',
      'AdGroupValues' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\AdGroupValues',
      'AdGroup' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\AdGroup',
      'AdGroupBid' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\AdGroupBid',
      'ManualCPCAdGroupBid' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\ManualCPCAdGroupBid',
      'ManualCPVAdGroupBid' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\ManualCPVAdGroupBid',
      'AdGroupConversionOptimizer' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\AdGroupConversionOptimizer',
      'AutoAdGroupConversionOptimizer' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\AutoAdGroupConversionOptimizer',
      'ManualAdGroupConversionOptimizer' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\ManualAdGroupConversionOptimizer',
      'NoneAdGroupConversionOptimizer' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\NoneAdGroupConversionOptimizer',
      'AdGroupOperation' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\AdGroupOperation',
      'AdGroupReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\AdGroupReturnValue',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\Operation',
      'get' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\mutateResponse',
      'Label' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroup\\Label',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/AdGroupService?wsdl';
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
