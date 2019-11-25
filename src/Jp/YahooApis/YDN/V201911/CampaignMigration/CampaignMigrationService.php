<?php

namespace Jp\YahooApis\YDN\V201911\CampaignMigration;

class CampaignMigrationService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'CampaignDownloadSelector' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\CampaignDownloadSelector',
      'CampaignDownloadUrlValue' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\CampaignDownloadUrlValue',
      'MigrationStatusSelector' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\MigrationStatusSelector',
      'MigrationJob' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\MigrationJob',
      'MigrationJobValues' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\MigrationJobValues',
      'MigrationStatusPage' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\MigrationStatusPage',
      'CampaignUploadSelector' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\CampaignUploadSelector',
      'UploadUrlValue' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\UploadUrlValue',
      'getCampaignDownloadUrl' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\getCampaignDownloadUrl',
      'getCampaignDownloadUrlResponse' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\getCampaignDownloadUrlResponse',
      'getMigrationStatus' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\getMigrationStatus',
      'getMigrationStatusResponse' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\getMigrationStatusResponse',
      'getUploadUrl' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\getUploadUrl',
      'getUploadUrlResponse' => 'Jp\\YahooApis\\YDN\\V201911\\CampaignMigration\\getUploadUrlResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/CampaignMigrationService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param getCampaignDownloadUrl $parameters
     * @return getCampaignDownloadUrlResponse
     */
    public function getCampaignDownloadUrl(getCampaignDownloadUrl $parameters)
    {
      return $this->__soapCall('getCampaignDownloadUrl', array($parameters));
    }

    /**
     * @param getMigrationStatus $parameters
     * @return getMigrationStatusResponse
     */
    public function getMigrationStatus(getMigrationStatus $parameters)
    {
      return $this->__soapCall('getMigrationStatus', array($parameters));
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
