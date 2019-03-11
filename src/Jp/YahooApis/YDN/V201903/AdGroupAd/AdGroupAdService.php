<?php

namespace Jp\YahooApis\YDN\V201903\AdGroupAd;

class AdGroupAdService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'AdGroupAdSelector' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\AdGroupAdSelector',
      'AdGroupAdPage' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\AdGroupAdPage',
      'AdGroupAdValues' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\AdGroupAdValues',
      'AdGroupAd' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\AdGroupAd',
      'AdGroupAdBid' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\AdGroupAdBid',
      'ManualCPCAdGroupAdBid' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\ManualCPCAdGroupAdBid',
      'ManualCPVAdGroupAdBid' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\ManualCPVAdGroupAdBid',
      'Ad' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\Ad',
      'TextAd' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\TextAd',
      'MobileAd' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\MobileAd',
      'PosAd' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\PosAd',
      'ResponsiveAd' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\ResponsiveAd',
      'StaticFrameAd' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\StaticFrameAd',
      'VideoAd' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\VideoAd',
      'DynamicAd' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\DynamicAd',
      'None' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\None',
      'AdGroupAdOperation' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\AdGroupAdOperation',
      'AdGroupAdReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\AdGroupAdReturnValue',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\Operation',
      'Label' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\Label',
      'get' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201903\\AdGroupAd\\mutateResponse',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/AdGroupAdService?wsdl';
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
