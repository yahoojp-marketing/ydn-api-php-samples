<?php

namespace Jp\YahooApis\YDN\V201903\Account;

class AccountService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'AccountSelector' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\AccountSelector',
      'AccountPage' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\AccountPage',
      'AccountOperation' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\AccountOperation',
      'AccountReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\AccountReturnValue',
      'Account' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\Account',
      'AccountValues' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\AccountValues',
      'AccountBudget' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\AccountBudget',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\Operation',
      'get' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201903\\Account\\mutateResponse',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/AccountService?wsdl';
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
