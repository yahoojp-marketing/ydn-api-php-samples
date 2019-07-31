<?php


 function autoload_9b3db44f40836b18581e1e51b7fca1b4($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\Campaign\CampaignService' => __DIR__ .'/CampaignService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\Campaign\CampaignSelector' => __DIR__ .'/CampaignSelector.php',
        'Jp\YahooApis\YDN\V201907\Campaign\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201907\Campaign\Campaign' => __DIR__ .'/Campaign.php',
        'Jp\YahooApis\YDN\V201907\Campaign\CampaignServingStatus' => __DIR__ .'/CampaignServingStatus.php',
        'Jp\YahooApis\YDN\V201907\Campaign\Budget' => __DIR__ .'/Budget.php',
        'Jp\YahooApis\YDN\V201907\Campaign\BudgetDeliveryMethod' => __DIR__ .'/BudgetDeliveryMethod.php',
        'Jp\YahooApis\YDN\V201907\Campaign\BiddingStrategy' => __DIR__ .'/BiddingStrategy.php',
        'Jp\YahooApis\YDN\V201907\Campaign\BiddingStrategyType' => __DIR__ .'/BiddingStrategyType.php',
        'Jp\YahooApis\YDN\V201907\Campaign\ManualCPC' => __DIR__ .'/ManualCPC.php',
        'Jp\YahooApis\YDN\V201907\Campaign\ManualCPV' => __DIR__ .'/ManualCPV.php',
        'Jp\YahooApis\YDN\V201907\Campaign\FrequencyCap' => __DIR__ .'/FrequencyCap.php',
        'Jp\YahooApis\YDN\V201907\Campaign\FrequencyLevel' => __DIR__ .'/FrequencyLevel.php',
        'Jp\YahooApis\YDN\V201907\Campaign\FrequencyTimeUnit' => __DIR__ .'/FrequencyTimeUnit.php',
        'Jp\YahooApis\YDN\V201907\Campaign\CampaignConversionOptimizer' => __DIR__ .'/CampaignConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201907\Campaign\AutoCampaignConversionOptimizer' => __DIR__ .'/AutoCampaignConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201907\Campaign\ManualCampaignConversionOptimizer' => __DIR__ .'/ManualCampaignConversionOptimizer.php',
        'Jp\YahooApis\YDN\V201907\Campaign\CampaignConversionOptimizerType' => __DIR__ .'/CampaignConversionOptimizerType.php',
        'Jp\YahooApis\YDN\V201907\Campaign\ConversionOptimizerEligibilityFlg' => __DIR__ .'/ConversionOptimizerEligibilityFlg.php',
        'Jp\YahooApis\YDN\V201907\Campaign\Label' => __DIR__ .'/Label.php',
        'Jp\YahooApis\YDN\V201907\Campaign\CampaignType' => __DIR__ .'/CampaignType.php',
        'Jp\YahooApis\YDN\V201907\Campaign\DeviceOsType' => __DIR__ .'/DeviceOsType.php',
        'Jp\YahooApis\YDN\V201907\Campaign\CampaignPage' => __DIR__ .'/CampaignPage.php',
        'Jp\YahooApis\YDN\V201907\Campaign\CampaignValues' => __DIR__ .'/CampaignValues.php',
        'Jp\YahooApis\YDN\V201907\Campaign\CampaignOperation' => __DIR__ .'/CampaignOperation.php',
        'Jp\YahooApis\YDN\V201907\Campaign\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\Campaign\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\Campaign\CampaignReturnValue' => __DIR__ .'/CampaignReturnValue.php',
        'Jp\YahooApis\YDN\V201907\Campaign\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\Campaign\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201907\Campaign\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\Campaign\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_9b3db44f40836b18581e1e51b7fca1b4');

// Do nothing. The rest is just leftovers from the code generation.
{
}
