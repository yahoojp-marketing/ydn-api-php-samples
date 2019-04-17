<?php

namespace Jp\YahooApis\YDN\V201903\AuditLog;

class AuditLogService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'getDownload' => 'Jp\\YahooApis\\YDN\\V201903\\AuditLog\\getDownload',
      'AuditLogDownloadSelector' => 'Jp\\YahooApis\\YDN\\V201903\\AuditLog\\AuditLogDownloadSelector',
      'AuditLogDateRange' => 'Jp\\YahooApis\\YDN\\V201903\\AuditLog\\AuditLogDateRange',
      'getDownloadResponse' => 'Jp\\YahooApis\\YDN\\V201903\\AuditLog\\getDownloadResponse',
      'AuditLogDownloadReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\AuditLog\\AuditLogDownloadReturnValue',
      'AuditLogDownloadValues' => 'Jp\\YahooApis\\YDN\\V201903\\AuditLog\\AuditLogDownloadValues',
      'getDownloadStatus' => 'Jp\\YahooApis\\YDN\\V201903\\AuditLog\\getDownloadStatus',
      'AuditLogDownloadStatusSelector' => 'Jp\\YahooApis\\YDN\\V201903\\AuditLog\\AuditLogDownloadStatusSelector',
      'getDownloadStatusResponse' => 'Jp\\YahooApis\\YDN\\V201903\\AuditLog\\getDownloadStatusResponse',
      'AuditLogDownloadStatusPage' => 'Jp\\YahooApis\\YDN\\V201903\\AuditLog\\AuditLogDownloadStatusPage',
      'AuditLogJob' => 'Jp\\YahooApis\\YDN\\V201903\\AuditLog\\AuditLogJob',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/AuditLogService?wsdl';
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
