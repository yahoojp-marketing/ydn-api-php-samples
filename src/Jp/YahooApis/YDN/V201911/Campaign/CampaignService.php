<?php

namespace Jp\YahooApis\YDN\V201911\Campaign;

class CampaignService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'CampaignSelector' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\CampaignSelector',
      'Campaign' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\Campaign',
      'Budget' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\Budget',
      'BiddingStrategy' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\BiddingStrategy',
      'ManualCPC' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\ManualCPC',
      'ManualCPV' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\ManualCPV',
      'FrequencyCap' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\FrequencyCap',
      'CampaignConversionOptimizer' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\CampaignConversionOptimizer',
      'AutoCampaignConversionOptimizer' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\AutoCampaignConversionOptimizer',
      'ManualCampaignConversionOptimizer' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\ManualCampaignConversionOptimizer',
      'Label' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\Label',
      'CampaignBiddingStrategy' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\CampaignBiddingStrategy',
      'ViewableFrequencyCap' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\ViewableFrequencyCap',
      'CampaignPage' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\CampaignPage',
      'CampaignValues' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\CampaignValues',
      'CampaignOperation' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\CampaignOperation',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\Operation',
      'CampaignReturnValue' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\CampaignReturnValue',
      'get' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201911\\Campaign\\mutateResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201911/CampaignService?wsdl';
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

}
