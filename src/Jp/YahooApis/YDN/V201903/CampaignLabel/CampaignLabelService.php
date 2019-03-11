<?php

namespace Jp\YahooApis\YDN\V201903\CampaignLabel;

class CampaignLabelService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'CampaignLabel' => 'Jp\\YahooApis\\YDN\\V201903\\CampaignLabel\\CampaignLabel',
      'CampaignLabelValues' => 'Jp\\YahooApis\\YDN\\V201903\\CampaignLabel\\CampaignLabelValues',
      'CampaignLabelOperation' => 'Jp\\YahooApis\\YDN\\V201903\\CampaignLabel\\CampaignLabelOperation',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201903\\CampaignLabel\\Operation',
      'CampaignLabelReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\CampaignLabel\\CampaignLabelReturnValue',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201903\\CampaignLabel\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201903\\CampaignLabel\\mutateResponse',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/CampaignLabelService?wsdl';
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
