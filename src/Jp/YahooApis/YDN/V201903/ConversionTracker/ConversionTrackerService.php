<?php

namespace Jp\YahooApis\YDN\V201903\ConversionTracker;

class ConversionTrackerService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'ConversionTrackerSelector' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\ConversionTrackerSelector',
      'ConversionTracker' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\ConversionTracker',
      'WebConversion' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\WebConversion',
      'WebConversionSnippet' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\WebConversionSnippet',
      'AppConversion' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\AppConversion',
      'ConversionTrackerPage' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\ConversionTrackerPage',
      'Period' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\Period',
      'PeriodDatetime' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\PeriodDatetime',
      'ConversionTrackerValues' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\ConversionTrackerValues',
      'ConversionTrackerOperation' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\ConversionTrackerOperation',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\Operation',
      'ConversionTrackerReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\ConversionTrackerReturnValue',
      'StatsPeriodCustomDate' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\StatsPeriodCustomDate',
      'get' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201903\\ConversionTracker\\mutateResponse',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/ConversionTrackerService?wsdl';
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
