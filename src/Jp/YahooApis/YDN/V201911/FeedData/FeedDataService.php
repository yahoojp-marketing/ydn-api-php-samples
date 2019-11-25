<?php

namespace Jp\YahooApis\YDN\V201911\FeedData;

class FeedDataService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'UploadUrlValue' => 'Jp\\YahooApis\\YDN\\V201911\\FeedData\\UploadUrlValue',
      'FeedDataSelector' => 'Jp\\YahooApis\\YDN\\V201911\\FeedData\\FeedDataSelector',
      'FeedDataPage' => 'Jp\\YahooApis\\YDN\\V201911\\FeedData\\FeedDataPage',
      'FileUploadDateRange' => 'Jp\\YahooApis\\YDN\\V201911\\FeedData\\FileUploadDateRange',
      'FeedDataRecord' => 'Jp\\YahooApis\\YDN\\V201911\\FeedData\\FeedDataRecord',
      'FeedDataValues' => 'Jp\\YahooApis\\YDN\\V201911\\FeedData\\FeedDataValues',
      'getUploadUrl' => 'Jp\\YahooApis\\YDN\\V201911\\FeedData\\getUploadUrl',
      'getUploadUrlResponse' => 'Jp\\YahooApis\\YDN\\V201911\\FeedData\\getUploadUrlResponse',
      'getUploadStatus' => 'Jp\\YahooApis\\YDN\\V201911\\FeedData\\getUploadStatus',
      'getUploadStatusResponse' => 'Jp\\YahooApis\\YDN\\V201911\\FeedData\\getUploadStatusResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/FeedDataService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param getUploadUrl $parameters
     * @return getUploadUrlResponse
     */
    public function getUploadUrl(getUploadUrl $parameters)
    {
      return parent::invoke('getUploadUrl', $parameters);
    }

    /**
     * @param getUploadStatus $parameters
     * @return getUploadStatusResponse
     */
    public function getUploadStatus(getUploadStatus $parameters)
    {
      return parent::invoke('getUploadStatus', $parameters);
    }

}
