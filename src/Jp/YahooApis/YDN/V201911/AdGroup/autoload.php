<?php


 function autoload_873d726669da7420c6e4ed7517551f8d($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\AdGroup\AdGroupService' => __DIR__ .'/AdGroupService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\AdGroupSelector' => __DIR__ .'/AdGroupSelector.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\CampaignGoalFilterType' => __DIR__ .'/CampaignGoalFilterType.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\AdGroupPage' => __DIR__ .'/AdGroupPage.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\AdGroupValues' => __DIR__ .'/AdGroupValues.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\AdGroup' => __DIR__ .'/AdGroup.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\AdGroupBiddingStrategy' => __DIR__ .'/AdGroupBiddingStrategy.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\AdGroupBid' => __DIR__ .'/AdGroupBid.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\ManualCPCAdGroupBid' => __DIR__ .'/ManualCPCAdGroupBid.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\ManualCPVAdGroupBid' => __DIR__ .'/ManualCPVAdGroupBid.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\AdGroupConversionOptimizer' => __DIR__ .'/AdGroupConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\AutoAdGroupConversionOptimizer' => __DIR__ .'/AutoAdGroupConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\ManualAdGroupConversionOptimizer' => __DIR__ .'/ManualAdGroupConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\NoneAdGroupConversionOptimizer' => __DIR__ .'/NoneAdGroupConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\AdGroupConversionOptimizerType' => __DIR__ .'/AdGroupConversionOptimizerType.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\ConversionOptimizerEligibilityFlg' => __DIR__ .'/ConversionOptimizerEligibilityFlg.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\AdGroupOperation' => __DIR__ .'/AdGroupOperation.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\AdGroupReturnValue' => __DIR__ .'/AdGroupReturnValue.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\mutateResponse' => __DIR__ .'/mutateResponse.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\BiddingStrategyType' => __DIR__ .'/BiddingStrategyType.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\DeviceType' => __DIR__ .'/DeviceType.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\DeviceAppType' => __DIR__ .'/DeviceAppType.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\DeviceOsType' => __DIR__ .'/DeviceOsType.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\SmartDeviceCarrier' => __DIR__ .'/SmartDeviceCarrier.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\DynamicImageExtensions' => __DIR__ .'/DynamicImageExtensions.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\CampaignBiddingStrategyType' => __DIR__ .'/CampaignBiddingStrategyType.php',
        'Jp\YahooApis\YDN\V201911\AdGroup\Label' => __DIR__ .'/Label.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_873d726669da7420c6e4ed7517551f8d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
