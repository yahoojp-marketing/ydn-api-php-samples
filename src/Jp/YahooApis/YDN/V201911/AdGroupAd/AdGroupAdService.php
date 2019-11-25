<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupAd;

class AdGroupAdService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'AdGroupAdSelector' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\AdGroupAdSelector',
      'AdGroupAdPage' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\AdGroupAdPage',
      'AdGroupAdValues' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\AdGroupAdValues',
      'AdGroupAd' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\AdGroupAd',
      'AdGroupAdBid' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\AdGroupAdBid',
      'ManualCPCAdGroupAdBid' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\ManualCPCAdGroupAdBid',
      'ManualCPVAdGroupAdBid' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\ManualCPVAdGroupAdBid',
      'Ad' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\Ad',
      'TextAd' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\TextAd',
      'MobileAd' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\MobileAd',
      'PosAd' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\PosAd',
      'ResponsiveImageAd' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\ResponsiveImageAd',
      'StaticFrameAd' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\StaticFrameAd',
      'ResponsiveVideoAd' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\ResponsiveVideoAd',
      'DynamicAd' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\DynamicAd',
      'BannerVideoAd' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\BannerVideoAd',
      'BannerImageAd' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\BannerImageAd',
      'AdGroupAdOperation' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\AdGroupAdOperation',
      'AdGroupAdReturnValue' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\AdGroupAdReturnValue',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\Operation',
      'Label' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\Label',
      'get' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAd\\mutateResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/AdGroupAdService?wsdl';
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
