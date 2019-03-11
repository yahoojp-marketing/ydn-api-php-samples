<?php

namespace Jp\YahooApis\YDN\V201903\RetargetingList;

class RetargetingListService extends \Jp\YahooApis\YDN\AdApiSample\Util\Service
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
      'RetargetingListSelector' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\RetargetingListSelector',
      'RetargetingList' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\RetargetingList',
      'RetargetingTargetList' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\RetargetingTargetList',
      'RuleTargetList' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\RuleTargetList',
      'Rule' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\Rule',
      'RuleCondition' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\RuleCondition',
      'CombinationTargetList' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\CombinationTargetList',
      'Combination' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\Combination',
      'TargetListData' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\TargetListData',
      'SimilarityTargetList' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\SimilarityTargetList',
      'TargetListSizeReaches' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\TargetListSizeReaches',
      'CustomAudienceTargetList' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\CustomAudienceTargetList',
      'RetargetingListPage' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\RetargetingListPage',
      'RetargetingListValues' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\RetargetingListValues',
      'RetargetingListOperation' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\RetargetingListOperation',
      'Operation' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\Operation',
      'RetargetingListReturnValue' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\RetargetingListReturnValue',
      'get' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\get',
      'getResponse' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\getResponse',
      'mutate' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\YDN\\V201903\\RetargetingList\\mutateResponse',
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
        $wsdl = 'https://ydn.yahooapis.jp/services/V201903/RetargetingListService?wsdl';
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
