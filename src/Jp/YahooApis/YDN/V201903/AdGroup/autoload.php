<?php


 function autoload_f6127746dd40863cc1aac123d281cf65($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\AdGroup\AdGroupService' => __DIR__ .'/AdGroupService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\AdGroupSelector' => __DIR__ .'/AdGroupSelector.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\AdGroupPage' => __DIR__ .'/AdGroupPage.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\AdGroupValues' => __DIR__ .'/AdGroupValues.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\AdGroup' => __DIR__ .'/AdGroup.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\AdGroupBid' => __DIR__ .'/AdGroupBid.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\ManualCPCAdGroupBid' => __DIR__ .'/ManualCPCAdGroupBid.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\ManualCPVAdGroupBid' => __DIR__ .'/ManualCPVAdGroupBid.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\AdGroupConversionOptimizer' => __DIR__ .'/AdGroupConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\AutoAdGroupConversionOptimizer' => __DIR__ .'/AutoAdGroupConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\ManualAdGroupConversionOptimizer' => __DIR__ .'/ManualAdGroupConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\NoneAdGroupConversionOptimizer' => __DIR__ .'/NoneAdGroupConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\AdGroupConversionOptimizerType' => __DIR__ .'/AdGroupConversionOptimizerType.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\ConversionOptimizerEligibilityFlg' => __DIR__ .'/ConversionOptimizerEligibilityFlg.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\AdGroupOperation' => __DIR__ .'/AdGroupOperation.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\AdGroupReturnValue' => __DIR__ .'/AdGroupReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\mutateResponse' => __DIR__ .'/mutateResponse.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\BiddingStrategyType' => __DIR__ .'/BiddingStrategyType.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\DeviceType' => __DIR__ .'/DeviceType.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\DeviceAppType' => __DIR__ .'/DeviceAppType.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\DeviceOsType' => __DIR__ .'/DeviceOsType.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\SmartDeviceCarrier' => __DIR__ .'/SmartDeviceCarrier.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\DynamicImageExtensions' => __DIR__ .'/DynamicImageExtensions.php',
        'Jp\YahooApis\YDN\V201903\AdGroup\Label' => __DIR__ .'/Label.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f6127746dd40863cc1aac123d281cf65');

// Do nothing. The rest is just leftovers from the code generation.
{
}
