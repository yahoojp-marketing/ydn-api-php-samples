<?php

namespace Jp\YahooApis\YDN\V201911\PlacementUrlList;

class PlacementUrlListService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'Operation' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\Operation',
      'PlacementUrlListSelector' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\PlacementUrlListSelector',
      'PlacementUrlListPage' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\PlacementUrlListPage',
      'PlacementUrlListReturnValue' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\PlacementUrlListReturnValue',
      'PlacementUrlListValues' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\PlacementUrlListValues',
      'PlacementUrlList' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\PlacementUrlList',
      'UrlList' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\UrlList',
      'PlacementUrlListOperation' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\PlacementUrlListOperation',
      'get' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201911\\PlacementUrlList\\mutateResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/PlacementUrlListService?wsdl';
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
