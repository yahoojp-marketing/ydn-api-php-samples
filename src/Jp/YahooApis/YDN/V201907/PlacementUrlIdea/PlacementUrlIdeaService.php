<?php

namespace Jp\YahooApis\YDN\V201907\PlacementUrlIdea;

class PlacementUrlIdeaService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'PlacementUrlIdeaSelector' => 'Jp\\YahooApis\\YDN\\V201907\\PlacementUrlIdea\\PlacementUrlIdeaSelector',
      'AdFormatConditions' => 'Jp\\YahooApis\\YDN\\V201907\\PlacementUrlIdea\\AdFormatConditions',
      'PlacementUrlIdeaPage' => 'Jp\\YahooApis\\YDN\\V201907\\PlacementUrlIdea\\PlacementUrlIdeaPage',
      'PlacementUrlIdeaValues' => 'Jp\\YahooApis\\YDN\\V201907\\PlacementUrlIdea\\PlacementUrlIdeaValues',
      'PlacementUrlIdea' => 'Jp\\YahooApis\\YDN\\V201907\\PlacementUrlIdea\\PlacementUrlIdea',
      'AdFormat' => 'Jp\\YahooApis\\YDN\\V201907\\PlacementUrlIdea\\AdFormat',
      'get' => 'Jp\\YahooApis\\YDN\\V201907\\PlacementUrlIdea\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201907\\PlacementUrlIdea\\getResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201907/PlacementUrlIdeaService?wsdl';
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
