<?php

namespace Jp\YahooApis\YDN\V201911\AuditLog;

class AuditLogService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'getDownload' => 'Jp\\YahooApis\\YDN\\V201911\\AuditLog\\getDownload',
      'AuditLogDownloadSelector' => 'Jp\\YahooApis\\YDN\\V201911\\AuditLog\\AuditLogDownloadSelector',
      'AuditLogDateRange' => 'Jp\\YahooApis\\YDN\\V201911\\AuditLog\\AuditLogDateRange',
      'getDownloadResponse' => 'Jp\\YahooApis\\YDN\\V201911\\AuditLog\\getDownloadResponse',
      'AuditLogDownloadReturnValue' => 'Jp\\YahooApis\\YDN\\V201911\\AuditLog\\AuditLogDownloadReturnValue',
      'AuditLogDownloadValues' => 'Jp\\YahooApis\\YDN\\V201911\\AuditLog\\AuditLogDownloadValues',
      'getDownloadStatus' => 'Jp\\YahooApis\\YDN\\V201911\\AuditLog\\getDownloadStatus',
      'AuditLogDownloadStatusSelector' => 'Jp\\YahooApis\\YDN\\V201911\\AuditLog\\AuditLogDownloadStatusSelector',
      'getDownloadStatusResponse' => 'Jp\\YahooApis\\YDN\\V201911\\AuditLog\\getDownloadStatusResponse',
      'AuditLogDownloadStatusPage' => 'Jp\\YahooApis\\YDN\\V201911\\AuditLog\\AuditLogDownloadStatusPage',
      'AuditLogJob' => 'Jp\\YahooApis\\YDN\\V201911\\AuditLog\\AuditLogJob',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/AuditLogService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param getDownload $parameters
     * @return getDownloadResponse
     */
    public function getDownload(getDownload $parameters)
    {
      return parent::invoke('getDownload', $parameters);
    }

    /**
     * @param getDownloadStatus $parameters
     * @return getDownloadStatusResponse
     */
    public function getDownloadStatus(getDownloadStatus $parameters)
    {
      return parent::invoke('getDownloadStatus', $parameters);
    }

}
