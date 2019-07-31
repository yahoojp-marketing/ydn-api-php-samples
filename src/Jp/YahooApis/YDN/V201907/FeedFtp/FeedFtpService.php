<?php

namespace Jp\YahooApis\YDN\V201907\FeedFtp;

class FeedFtpService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'FeedFtpSelector' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\FeedFtpSelector',
      'FeedFtp' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\FeedFtp',
      'FeedFtpPage' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\FeedFtpPage',
      'FeedFtpValues' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\FeedFtpValues',
      'FeedFtpOperation' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\FeedFtpOperation',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\Operation',
      'FeedFtpReturnValue' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\FeedFtpReturnValue',
      'Schedule' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\Schedule',
      'ScheduleHourly' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\ScheduleHourly',
      'ScheduleDaily' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\ScheduleDaily',
      'ScheduleWeekly' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\ScheduleWeekly',
      'get' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201907\\FeedFtp\\mutateResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201907/FeedFtpService?wsdl';
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
