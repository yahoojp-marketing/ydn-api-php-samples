<?php

namespace Jp\YahooApis\YDN\V201903\ReportDefinition;

class ReportDefinitionService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'ReportDefinitionSelector' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\ReportDefinitionSelector',
      'ReportDateRange' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\ReportDateRange',
      'ReportFilter' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\ReportFilter',
      'ReportDefinitionPage' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\ReportDefinitionPage',
      'ReportDefinitionValues' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\ReportDefinitionValues',
      'ReportDefinition' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\ReportDefinition',
      'ReportDefinitionOperation' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\ReportDefinitionOperation',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\Operation',
      'ReportDefinitionReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\ReportDefinitionReturnValue',
      'ReportDefinitionFieldValue' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\ReportDefinitionFieldValue',
      'ReportDefinitionField' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\ReportDefinitionField',
      'get' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\mutateResponse',
      'getReportFields' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\getReportFields',
      'getReportFieldsResponse' => 'Jp\\YahooApis\\YDN\\V201903\\ReportDefinition\\getReportFieldsResponse',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/ReportDefinitionService?wsdl';
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
     * @param getReportFields $parameters
     * @return getReportFieldsResponse
     */
    public function getReportFields(getReportFields $parameters)
    {
      return parent::invoke('getReportFields', $parameters);
    }

}
