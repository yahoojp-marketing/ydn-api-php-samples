<?php


 function autoload_12ce12e281fab6a8469ac646959d70cb($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdService' => __DIR__ .'/AdGroupAdService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdSelector' => __DIR__ .'/AdGroupAdSelector.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\CampaignGoalFilterType' => __DIR__ .'/CampaignGoalFilterType.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdPage' => __DIR__ .'/AdGroupAdPage.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdValues' => __DIR__ .'/AdGroupAdValues.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAd' => __DIR__ .'/AdGroupAd.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdBid' => __DIR__ .'/AdGroupAdBid.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\ManualCPCAdGroupAdBid' => __DIR__ .'/ManualCPCAdGroupAdBid.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\ManualCPVAdGroupAdBid' => __DIR__ .'/ManualCPVAdGroupAdBid.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\Ad' => __DIR__ .'/Ad.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\AdType' => __DIR__ .'/AdType.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\TextAd' => __DIR__ .'/TextAd.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\MobileAd' => __DIR__ .'/MobileAd.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\PosAd' => __DIR__ .'/PosAd.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\ResponsiveImageAd' => __DIR__ .'/ResponsiveImageAd.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\StaticFrameAd' => __DIR__ .'/StaticFrameAd.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\ResponsiveVideoAd' => __DIR__ .'/ResponsiveVideoAd.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\DynamicAd' => __DIR__ .'/DynamicAd.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\BannerVideoAd' => __DIR__ .'/BannerVideoAd.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\BannerImageAd' => __DIR__ .'/BannerImageAd.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\AdLayout' => __DIR__ .'/AdLayout.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\AdStyle' => __DIR__ .'/AdStyle.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\ButtonText' => __DIR__ .'/ButtonText.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\BiddingStrategyType' => __DIR__ .'/BiddingStrategyType.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\ApprovalStatus' => __DIR__ .'/ApprovalStatus.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\CarrierName' => __DIR__ .'/CarrierName.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdOperation' => __DIR__ .'/AdGroupAdOperation.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\AdGroupAdReturnValue' => __DIR__ .'/AdGroupAdReturnValue.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\isRemoveFlg' => __DIR__ .'/isRemoveFlg.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\Label' => __DIR__ .'/Label.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAd\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_12ce12e281fab6a8469ac646959d70cb');

// Do nothing. The rest is just leftovers from the code generation.
{
}
