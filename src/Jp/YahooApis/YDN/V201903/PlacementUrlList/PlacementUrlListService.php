<?php

namespace Jp\YahooApis\YDN\V201903\PlacementUrlList;

class PlacementUrlListService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'Operation' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\Operation',
      'PlacementUrlListSelector' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\PlacementUrlListSelector',
      'PlacementUrlListPage' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\PlacementUrlListPage',
      'PlacementUrlListReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\PlacementUrlListReturnValue',
      'PlacementUrlListValues' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\PlacementUrlListValues',
      'PlacementUrlList' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\PlacementUrlList',
      'UrlList' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\UrlList',
      'PlacementUrlListOperation' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\PlacementUrlListOperation',
      'get' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlList\\mutateResponse',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/PlacementUrlListService?wsdl';
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
