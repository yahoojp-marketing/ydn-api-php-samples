<?php

namespace Jp\YahooApis\YDN\V201911\Stats;

class StatsService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'StatsSelector' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\StatsSelector',
      'StatsPage' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\StatsPage',
      'Period' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\Period',
      'PeriodDatetime' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\PeriodDatetime',
      'StatsValues' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\StatsValues',
      'CampaignStatsValues' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\CampaignStatsValues',
      'AdGroupStatsValues' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\AdGroupStatsValues',
      'AdStatsValues' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\AdStatsValues',
      'ImageStatsValues' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\ImageStatsValues',
      'VideoStatsValues' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\VideoStatsValues',
      'TargetStatsValues' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\TargetStatsValues',
      'Stats' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\Stats',
      'StatsPeriodCustomDate' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\StatsPeriodCustomDate',
      'Target' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\Target',
      'AdScheduleTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\AdScheduleTarget',
      'GeoTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\GeoTarget',
      'AgeTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\AgeTarget',
      'GenderTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\GenderTarget',
      'InterestCategoryTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\InterestCategoryTarget',
      'SearchTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\SearchTarget',
      'SiteCategoryTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\SiteCategoryTarget',
      'SiteRetargetingTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\SiteRetargetingTarget',
      'PlacementTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\PlacementTarget',
      'DeviceTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\DeviceTarget',
      'CarrierTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\CarrierTarget',
      'AppTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\AppTarget',
      'OsTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\OsTarget',
      'OsVersionTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\OsVersionTarget',
      'AudienceCategoryTarget' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\AudienceCategoryTarget',
      'get' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Stats\\getResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/StatsService?wsdl';
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
