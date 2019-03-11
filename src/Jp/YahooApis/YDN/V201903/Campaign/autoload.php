<?php


 function autoload_e235a5f5365376d1d8dd9f0c897a76a8($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\Campaign\CampaignService' => __DIR__ .'/CampaignService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Campaign\CampaignSelector' => __DIR__ .'/CampaignSelector.php',
        'Jp\YahooApis\YDN\V201903\Campaign\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201903\Campaign\Campaign' => __DIR__ .'/Campaign.php',
        'Jp\YahooApis\YDN\V201903\Campaign\CampaignServingStatus' => __DIR__ .'/CampaignServingStatus.php',
        'Jp\YahooApis\YDN\V201903\Campaign\Budget' => __DIR__ .'/Budget.php',
        'Jp\YahooApis\YDN\V201903\Campaign\BudgetDeliveryMethod' => __DIR__ .'/BudgetDeliveryMethod.php',
        'Jp\YahooApis\YDN\V201903\Campaign\BiddingStrategy' => __DIR__ .'/BiddingStrategy.php',
        'Jp\YahooApis\YDN\V201903\Campaign\BiddingStrategyType' => __DIR__ .'/BiddingStrategyType.php',
        'Jp\YahooApis\YDN\V201903\Campaign\ManualCPC' => __DIR__ .'/ManualCPC.php',
        'Jp\YahooApis\YDN\V201903\Campaign\ManualCPV' => __DIR__ .'/ManualCPV.php',
        'Jp\YahooApis\YDN\V201903\Campaign\FrequencyCap' => __DIR__ .'/FrequencyCap.php',
        'Jp\YahooApis\YDN\V201903\Campaign\FrequencyLevel' => __DIR__ .'/FrequencyLevel.php',
        'Jp\YahooApis\YDN\V201903\Campaign\FrequencyTimeUnit' => __DIR__ .'/FrequencyTimeUnit.php',
        'Jp\YahooApis\YDN\V201903\Campaign\CampaignConversionOptimizer' => __DIR__ .'/CampaignConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201903\Campaign\AutoCampaignConversionOptimizer' => __DIR__ .'/AutoCampaignConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201903\Campaign\ManualCampaignConversionOptimizer' => __DIR__ .'/ManualCampaignConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201903\Campaign\CampaignConversionOptimizerType' => __DIR__ .'/CampaignConversionOptimizerType.php',
        'Jp\YahooApis\YDN\V201903\Campaign\ConversionOptimizerEligibilityFlg' => __DIR__ .'/ConversionOptimizerEligibilityFlg.php',
        'Jp\YahooApis\YDN\V201903\Campaign\Label' => __DIR__ .'/Label.php',
        'Jp\YahooApis\YDN\V201903\Campaign\CampaignType' => __DIR__ .'/CampaignType.php',
        'Jp\YahooApis\YDN\V201903\Campaign\DeviceOsType' => __DIR__ .'/DeviceOsType.php',
        'Jp\YahooApis\YDN\V201903\Campaign\CampaignPage' => __DIR__ .'/CampaignPage.php',
        'Jp\YahooApis\YDN\V201903\Campaign\CampaignValues' => __DIR__ .'/CampaignValues.php',
        'Jp\YahooApis\YDN\V201903\Campaign\CampaignOperation' => __DIR__ .'/CampaignOperation.php',
        'Jp\YahooApis\YDN\V201903\Campaign\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\Campaign\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\Campaign\CampaignReturnValue' => __DIR__ .'/CampaignReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Campaign\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\Campaign\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\Campaign\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\Campaign\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e235a5f5365376d1d8dd9f0c897a76a8');

// Do nothing. The rest is just leftovers from the code generation.
{
}
