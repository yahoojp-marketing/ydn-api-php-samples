<?php

namespace Jp\YahooApis\YDN\V201903\Report;

class ReportService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'ReportSelector' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\ReportSelector',
      'ReportClosedDateSelector' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\ReportClosedDateSelector',
      'ReportRecord' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\ReportRecord',
      'ReportDateRange' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\ReportDateRange',
      'ReportPage' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\ReportPage',
      'ReportValues' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\ReportValues',
      'ReportClosedDateValue' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\ReportClosedDateValue',
      'ReportClosedDateRecord' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\ReportClosedDateRecord',
      'ReportJobOperation' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\ReportJobOperation',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\Operation',
      'ReportReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\ReportReturnValue',
      'get' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\getResponse',
      'getClosedDate' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\getClosedDate',
      'getClosedDateResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\getClosedDateResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Report\\mutateResponse',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/ReportService?wsdl';
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
     * @param getClosedDate $parameters
     * @return getClosedDateResponse
     */
    public function getClosedDate(getClosedDate $parameters)
    {
      return $this->__soapCall('getClosedDate', array($parameters));
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
