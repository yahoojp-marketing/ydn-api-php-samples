<?php

namespace Jp\YahooApis\YDN\V201903\PlacementUrlIdea;

class PlacementUrlIdeaService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'PlacementUrlIdeaSelector' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlIdea\\PlacementUrlIdeaSelector',
      'AdFormatConditions' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlIdea\\AdFormatConditions',
      'PlacementUrlIdeaPage' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlIdea\\PlacementUrlIdeaPage',
      'PlacementUrlIdeaValues' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlIdea\\PlacementUrlIdeaValues',
      'PlacementUrlIdea' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlIdea\\PlacementUrlIdea',
      'AdFormat' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlIdea\\AdFormat',
      'get' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlIdea\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201903\\PlacementUrlIdea\\getResponse',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/PlacementUrlIdeaService?wsdl';
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
