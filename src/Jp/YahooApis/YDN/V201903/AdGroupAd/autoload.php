<?php


 function autoload_9f3a11f7fa37843ae6504332baee6ce1($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\AdGroupAd\AdGroupAdService' => __DIR__ .'/AdGroupAdService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\AdGroupAdSelector' => __DIR__ .'/AdGroupAdSelector.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\AdGroupAdPage' => __DIR__ .'/AdGroupAdPage.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\AdGroupAdValues' => __DIR__ .'/AdGroupAdValues.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\AdGroupAd' => __DIR__ .'/AdGroupAd.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\AdGroupAdBid' => __DIR__ .'/AdGroupAdBid.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\ManualCPCAdGroupAdBid' => __DIR__ .'/ManualCPCAdGroupAdBid.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\ManualCPVAdGroupAdBid' => __DIR__ .'/ManualCPVAdGroupAdBid.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\Ad' => __DIR__ .'/Ad.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\AdType' => __DIR__ .'/AdType.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\TextAd' => __DIR__ .'/TextAd.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\MobileAd' => __DIR__ .'/MobileAd.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\PosAd' => __DIR__ .'/PosAd.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\ResponsiveAd' => __DIR__ .'/ResponsiveAd.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\StaticFrameAd' => __DIR__ .'/StaticFrameAd.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\VideoAd' => __DIR__ .'/VideoAd.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\DynamicAd' => __DIR__ .'/DynamicAd.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\None' => __DIR__ .'/None.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\AdLayout' => __DIR__ .'/AdLayout.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\AdStyle' => __DIR__ .'/AdStyle.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\ButtonText' => __DIR__ .'/ButtonText.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\BiddingStrategyType' => __DIR__ .'/BiddingStrategyType.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\ApprovalStatus' => __DIR__ .'/ApprovalStatus.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\CarrierName' => __DIR__ .'/CarrierName.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\AdGroupAdOperation' => __DIR__ .'/AdGroupAdOperation.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\AdGroupAdReturnValue' => __DIR__ .'/AdGroupAdReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\isRemoveFlg' => __DIR__ .'/isRemoveFlg.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\Label' => __DIR__ .'/Label.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAd\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_9f3a11f7fa37843ae6504332baee6ce1');

// Do nothing. The rest is just leftovers from the code generation.
{
}
