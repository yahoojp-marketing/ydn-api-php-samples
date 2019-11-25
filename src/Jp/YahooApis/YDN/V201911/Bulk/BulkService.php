<?php

namespace Jp\YahooApis\YDN\V201911\Bulk;

class BulkService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'BulkDownloadSelector' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\BulkDownloadSelector',
      'DownloadBulkJob' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\DownloadBulkJob',
      'BulkDownloadReturnValue' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\BulkDownloadReturnValue',
      'BulkDownloadValues' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\BulkDownloadValues',
      'getBulkDownloadStatus' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\getBulkDownloadStatus',
      'BulkDownloadStatusSelector' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\BulkDownloadStatusSelector',
      'BulkDownloadStatusPage' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\BulkDownloadStatusPage',
      'UploadUrlValue' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\UploadUrlValue',
      'BulkUploadStatusSelector' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\BulkUploadStatusSelector',
      'BulkUploadStatusPage' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\BulkUploadStatusPage',
      'BulkUploadValues' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\BulkUploadValues',
      'UploadBulkJob' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\UploadBulkJob',
      'ProcessingItemsCount' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\ProcessingItemsCount',
      'getBulkDownload' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\getBulkDownload',
      'getBulkDownloadResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\getBulkDownloadResponse',
      'getBulkDownloadStatusResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\getBulkDownloadStatusResponse',
      'getUploadUrl' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\getUploadUrl',
      'getUploadUrlResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\getUploadUrlResponse',
      'getBulkUploadStatus' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\getBulkUploadStatus',
      'getBulkUploadStatusResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Bulk\\getBulkUploadStatusResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/BulkService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param getBulkDownload $parameters
     * @return getBulkDownloadResponse
     */
    public function getBulkDownload(getBulkDownload $parameters)
    {
      return parent::invoke('getBulkDownload', $parameters);
    }

    /**
     * @param getBulkDownloadStatus $parameters
     * @return getBulkDownloadStatusResponse
     */
    public function getBulkDownloadStatus(getBulkDownloadStatus $parameters)
    {
      return parent::invoke('getBulkDownloadStatus', $parameters);
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
     * @param getBulkUploadStatus $parameters
     * @return getBulkUploadStatusResponse
     */
    public function getBulkUploadStatus(getBulkUploadStatus $parameters)
    {
      return parent::invoke('getBulkUploadStatus', $parameters);
    }

}
