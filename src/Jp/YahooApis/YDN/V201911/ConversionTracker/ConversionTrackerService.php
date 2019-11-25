<?php

namespace Jp\YahooApis\YDN\V201911\ConversionTracker;

class ConversionTrackerService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'ConversionTrackerSelector' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\ConversionTrackerSelector',
      'ConversionTracker' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\ConversionTracker',
      'WebConversion' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\WebConversion',
      'WebConversionSnippet' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\WebConversionSnippet',
      'AppConversion' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\AppConversion',
      'ConversionTrackerPage' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\ConversionTrackerPage',
      'Period' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\Period',
      'PeriodDatetime' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\PeriodDatetime',
      'ConversionTrackerValues' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\ConversionTrackerValues',
      'ConversionTrackerOperation' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\ConversionTrackerOperation',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\Operation',
      'ConversionTrackerReturnValue' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\ConversionTrackerReturnValue',
      'StatsPeriodCustomDate' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\StatsPeriodCustomDate',
      'get' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201911\\ConversionTracker\\mutateResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/ConversionTrackerService?wsdl';
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
