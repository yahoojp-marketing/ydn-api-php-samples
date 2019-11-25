<?php


 function autoload_d37e54407b283f070f5e3e6fd0428489($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignService' => __DIR__ .'/CampaignService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignSelector' => __DIR__ .'/CampaignSelector.php',
        'Jp\YahooApis\YDN\V201911\Campaign\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignGoalFilterType' => __DIR__ .'/CampaignGoalFilterType.php',
        'Jp\YahooApis\YDN\V201911\Campaign\Campaign' => __DIR__ .'/Campaign.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignServingStatus' => __DIR__ .'/CampaignServingStatus.php',
        'Jp\YahooApis\YDN\V201911\Campaign\Budget' => __DIR__ .'/Budget.php',
        'Jp\YahooApis\YDN\V201911\Campaign\BudgetDeliveryMethod' => __DIR__ .'/BudgetDeliveryMethod.php',
        'Jp\YahooApis\YDN\V201911\Campaign\BiddingStrategy' => __DIR__ .'/BiddingStrategy.php',
        'Jp\YahooApis\YDN\V201911\Campaign\BiddingStrategyType' => __DIR__ .'/BiddingStrategyType.php',
        'Jp\YahooApis\YDN\V201911\Campaign\ManualCPC' => __DIR__ .'/ManualCPC.php',
        'Jp\YahooApis\YDN\V201911\Campaign\ManualCPV' => __DIR__ .'/ManualCPV.php',
        'Jp\YahooApis\YDN\V201911\Campaign\FrequencyCap' => __DIR__ .'/FrequencyCap.php',
        'Jp\YahooApis\YDN\V201911\Campaign\FrequencyLevel' => __DIR__ .'/FrequencyLevel.php',
        'Jp\YahooApis\YDN\V201911\Campaign\FrequencyTimeUnit' => __DIR__ .'/FrequencyTimeUnit.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignConversionOptimizer' => __DIR__ .'/CampaignConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201911\Campaign\AutoCampaignConversionOptimizer' => __DIR__ .'/AutoCampaignConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201911\Campaign\ManualCampaignConversionOptimizer' => __DIR__ .'/ManualCampaignConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignConversionOptimizerType' => __DIR__ .'/CampaignConversionOptimizerType.php',
        'Jp\YahooApis\YDN\V201911\Campaign\ConversionOptimizerEligibilityFlg' => __DIR__ .'/ConversionOptimizerEligibilityFlg.php',
        'Jp\YahooApis\YDN\V201911\Campaign\Label' => __DIR__ .'/Label.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignBiddingStrategy' => __DIR__ .'/CampaignBiddingStrategy.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignBiddingStrategyType' => __DIR__ .'/CampaignBiddingStrategyType.php',
        'Jp\YahooApis\YDN\V201911\Campaign\ViewableFrequencyCap' => __DIR__ .'/ViewableFrequencyCap.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignType' => __DIR__ .'/CampaignType.php',
        'Jp\YahooApis\YDN\V201911\Campaign\DeviceOsType' => __DIR__ .'/DeviceOsType.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignPage' => __DIR__ .'/CampaignPage.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignValues' => __DIR__ .'/CampaignValues.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignOperation' => __DIR__ .'/CampaignOperation.php',
        'Jp\YahooApis\YDN\V201911\Campaign\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\Campaign\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\Campaign\CampaignReturnValue' => __DIR__ .'/CampaignReturnValue.php',
        'Jp\YahooApis\YDN\V201911\Campaign\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\Campaign\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\Campaign\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\Campaign\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d37e54407b283f070f5e3e6fd0428489');

// Do nothing. The rest is just leftovers from the code generation.
{
}
