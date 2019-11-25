<?php

namespace Jp\YahooApis\YDN\V201911\AdGroupAdLabel;

class AdGroupAdLabelService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'AdGroupAdLabel' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAdLabel\\AdGroupAdLabel',
      'AdGroupAdLabelValues' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAdLabel\\AdGroupAdLabelValues',
      'AdGroupAdLabelOperation' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAdLabel\\AdGroupAdLabelOperation',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAdLabel\\Operation',
      'AdGroupAdLabelReturnValue' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAdLabel\\AdGroupAdLabelReturnValue',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAdLabel\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201911\\AdGroupAdLabel\\mutateResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/AdGroupAdLabelService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
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
