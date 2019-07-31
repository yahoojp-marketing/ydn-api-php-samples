<?php

namespace Jp\YahooApis\YDN\V201907\ReportDefinition;

class ReportDefinitionService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'ReportClosedDateSelector' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportClosedDateSelector',
      'ReportClosedDateValue' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportClosedDateValue',
      'ReportClosedDateRecord' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportClosedDateRecord',
      'ReportDefinitionFieldValue' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportDefinitionFieldValue',
      'ReportFieldAttribute' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportFieldAttribute',
      'ReportDefinitionSelector' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportDefinitionSelector',
      'ReportDefinitionPage' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportDefinitionPage',
      'ReportDefinitionValues' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportDefinitionValues',
      'ReportDefinition' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportDefinition',
      'ReportDateRange' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportDateRange',
      'ReportFilter' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportFilter',
      'ReportDefinitionOperation' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportDefinitionOperation',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\Operation',
      'ReportDefinitionReturnValue' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\ReportDefinitionReturnValue',
      'getClosedDate' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\getClosedDate',
      'getClosedDateResponse' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\getClosedDateResponse',
      'getReportFields' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\getReportFields',
      'getReportFieldsResponse' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\getReportFieldsResponse',
      'get' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201907\\ReportDefinition\\mutateResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201907/ReportDefinitionService?wsdl';
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

    /**
     * @param getClosedDate $parameters
     * @return getClosedDateResponse
     */
    public function getClosedDate(getClosedDate $parameters)
    {
      return parent::invoke('getClosedDate', $parameters);
    }

}
