<?php

namespace Jp\YahooApis\YDN\V201903\Stats;

class StatsService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'StatsSelector' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\StatsSelector',
      'StatsPage' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\StatsPage',
      'Period' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\Period',
      'PeriodDatetime' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\PeriodDatetime',
      'StatsValues' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\StatsValues',
      'CampaignStatsValues' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\CampaignStatsValues',
      'AdGroupStatsValues' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\AdGroupStatsValues',
      'AdStatsValues' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\AdStatsValues',
      'ImageStatsValues' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\ImageStatsValues',
      'VideoStatsValues' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\VideoStatsValues',
      'TargetStatsValues' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\TargetStatsValues',
      'Stats' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\Stats',
      'StatsPeriodCustomDate' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\StatsPeriodCustomDate',
      'Target' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\Target',
      'AdScheduleTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\AdScheduleTarget',
      'GeoTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\GeoTarget',
      'AgeTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\AgeTarget',
      'GenderTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\GenderTarget',
      'InterestCategoryTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\InterestCategoryTarget',
      'SearchTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\SearchTarget',
      'SiteCategoryTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\SiteCategoryTarget',
      'SiteRetargetingTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\SiteRetargetingTarget',
      'PlacementTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\PlacementTarget',
      'DeviceTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\DeviceTarget',
      'CarrierTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\CarrierTarget',
      'AppTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\AppTarget',
      'OsTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\OsTarget',
      'OsVersionTarget' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\OsVersionTarget',
      'get' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Stats\\getResponse',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/StatsService?wsdl';
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

}
