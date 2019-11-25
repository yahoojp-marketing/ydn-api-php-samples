<?php

namespace Jp\YahooApis\YDN\V201911\Video;

class VideoService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'VideoSelector' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\VideoSelector',
      'VideoPage' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\VideoPage',
      'VideoValues' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\VideoValues',
      'Video' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\Video',
      'VideoSetting' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\VideoSetting',
      'UploadVideo' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\UploadVideo',
      'UploadUrlPage' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\UploadUrlPage',
      'UploadUrlValues' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\UploadUrlValues',
      'UploadUrlValue' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\UploadUrlValue',
      'VideoOperation' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\VideoOperation',
      'VideoReturnValue' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\VideoReturnValue',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\Operation',
      'get' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\mutateResponse',
      'getUploadUrl' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\getUploadUrl',
      'getUploadUrlResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Video\\getUploadUrlResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/VideoService?wsdl';
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

    /**
     * @param getUploadUrl $parameters
     * @return getUploadUrlResponse
     */
    public function getUploadUrl(getUploadUrl $parameters)
    {
      return parent::invoke('getUploadUrl', $parameters);
    }

}
