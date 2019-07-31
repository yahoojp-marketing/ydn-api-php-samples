<?php


 function autoload_79ecc9d9ee2d03708fbba6bdce10babc($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\AdGroupAd\AdGroupAdService' => __DIR__ .'/AdGroupAdService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\AdGroupAdSelector' => __DIR__ .'/AdGroupAdSelector.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\AdGroupAdPage' => __DIR__ .'/AdGroupAdPage.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\AdGroupAdValues' => __DIR__ .'/AdGroupAdValues.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\AdGroupAd' => __DIR__ .'/AdGroupAd.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\AdGroupAdBid' => __DIR__ .'/AdGroupAdBid.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\ManualCPCAdGroupAdBid' => __DIR__ .'/ManualCPCAdGroupAdBid.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\ManualCPVAdGroupAdBid' => __DIR__ .'/ManualCPVAdGroupAdBid.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\Ad' => __DIR__ .'/Ad.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\AdType' => __DIR__ .'/AdType.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\TextAd' => __DIR__ .'/TextAd.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\MobileAd' => __DIR__ .'/MobileAd.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\PosAd' => __DIR__ .'/PosAd.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\ResponsiveImageAd' => __DIR__ .'/ResponsiveImageAd.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\StaticFrameAd' => __DIR__ .'/StaticFrameAd.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\ResponsiveVideoAd' => __DIR__ .'/ResponsiveVideoAd.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\DynamicAd' => __DIR__ .'/DynamicAd.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\BannerVideoAd' => __DIR__ .'/BannerVideoAd.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\BannerImageAd' => __DIR__ .'/BannerImageAd.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\AdLayout' => __DIR__ .'/AdLayout.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\AdStyle' => __DIR__ .'/AdStyle.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\ButtonText' => __DIR__ .'/ButtonText.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\BiddingStrategyType' => __DIR__ .'/BiddingStrategyType.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\ApprovalStatus' => __DIR__ .'/ApprovalStatus.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\CarrierName' => __DIR__ .'/CarrierName.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\AdGroupAdOperation' => __DIR__ .'/AdGroupAdOperation.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\AdGroupAdReturnValue' => __DIR__ .'/AdGroupAdReturnValue.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\isRemoveFlg' => __DIR__ .'/isRemoveFlg.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\Label' => __DIR__ .'/Label.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAd\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_79ecc9d9ee2d03708fbba6bdce10babc');

// Do nothing. The rest is just leftovers from the code generation.
{
}
