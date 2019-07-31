<?php

namespace Jp\YahooApis\YDN\V201907\AdGroupAd;

class AdGroupAdService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'AdGroupAdSelector' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\AdGroupAdSelector',
      'AdGroupAdPage' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\AdGroupAdPage',
      'AdGroupAdValues' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\AdGroupAdValues',
      'AdGroupAd' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\AdGroupAd',
      'AdGroupAdBid' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\AdGroupAdBid',
      'ManualCPCAdGroupAdBid' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\ManualCPCAdGroupAdBid',
      'ManualCPVAdGroupAdBid' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\ManualCPVAdGroupAdBid',
      'Ad' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\Ad',
      'TextAd' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\TextAd',
      'MobileAd' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\MobileAd',
      'PosAd' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\PosAd',
      'ResponsiveImageAd' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\ResponsiveImageAd',
      'StaticFrameAd' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\StaticFrameAd',
      'ResponsiveVideoAd' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\ResponsiveVideoAd',
      'DynamicAd' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\DynamicAd',
      'BannerVideoAd' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\BannerVideoAd',
      'BannerImageAd' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\BannerImageAd',
      'AdGroupAdOperation' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\AdGroupAdOperation',
      'AdGroupAdReturnValue' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\AdGroupAdReturnValue',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\Operation',
      'Label' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\Label',
      'get' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201907\\AdGroupAd\\mutateResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201907/AdGroupAdService?wsdl';
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
