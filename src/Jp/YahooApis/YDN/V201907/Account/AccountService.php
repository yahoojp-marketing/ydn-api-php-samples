<?php

namespace Jp\YahooApis\YDN\V201907\Account;

class AccountService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'AccountSelector' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\AccountSelector',
      'AccountPage' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\AccountPage',
      'AccountOperation' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\AccountOperation',
      'AccountReturnValue' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\AccountReturnValue',
      'Account' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\Account',
      'AccountValues' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\AccountValues',
      'AccountBudget' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\AccountBudget',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\Operation',
      'get' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201907\\Account\\mutateResponse',
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
        $wsdl = 'https://location.im.yahooapis.jp/services/V201907/AccountService?wsdl';
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
