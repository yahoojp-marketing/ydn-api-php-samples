<?php

namespace Jp\YahooApis\YDN\V201907\AccountAdProduct;

class AccountAdProductService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'AccountAdProductSelector' => 'Jp\\YahooApis\\YDN\\V201907\\AccountAdProduct\\AccountAdProductSelector',
      'AccountAdProductPage' => 'Jp\\YahooApis\\YDN\\V201907\\AccountAdProduct\\AccountAdProductPage',
      'AccountAdProductValues' => 'Jp\\YahooApis\\YDN\\V201907\\AccountAdProduct\\AccountAdProductValues',
      'AccountAdProduct' => 'Jp\\YahooApis\\YDN\\V201907\\AccountAdProduct\\AccountAdProduct',
      'AdProduct' => 'Jp\\YahooApis\\YDN\\V201907\\AccountAdProduct\\AdProduct',
      'get' => 'Jp\\YahooApis\\YDN\\V201907\\AccountAdProduct\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201907\\AccountAdProduct\\getResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201907/AccountAdProductService?wsdl';
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

}
