<?php


 function autoload_ba211194b8afb86eff84e4560217644d($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\AdGroupTargetService' => __DIR__ .'/AdGroupTargetService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\AdGroupTargetSelector' => __DIR__ .'/AdGroupTargetSelector.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\AdGroupTargetPage' => __DIR__ .'/AdGroupTargetPage.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\AdGroupTarget' => __DIR__ .'/AdGroupTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\Target' => __DIR__ .'/Target.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\TargetType' => __DIR__ .'/TargetType.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\TargetListDeliverType' => __DIR__ .'/TargetListDeliverType.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\Age' => __DIR__ .'/Age.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\EstimateFlg' => __DIR__ .'/EstimateFlg.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\DayOfWeek' => __DIR__ .'/DayOfWeek.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\Gender' => __DIR__ .'/Gender.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\PlacementUrlListType' => __DIR__ .'/PlacementUrlListType.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\DeviceType' => __DIR__ .'/DeviceType.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\DeviceAppType' => __DIR__ .'/DeviceAppType.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\DeviceOsType' => __DIR__ .'/DeviceOsType.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\CarrierType' => __DIR__ .'/CarrierType.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\AdScheduleTarget' => __DIR__ .'/AdScheduleTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\GeoTarget' => __DIR__ .'/GeoTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\AgeTarget' => __DIR__ .'/AgeTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\GenderTarget' => __DIR__ .'/GenderTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\InterestCategoryTarget' => __DIR__ .'/InterestCategoryTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\SearchTarget' => __DIR__ .'/SearchTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\SiteCategoryTarget' => __DIR__ .'/SiteCategoryTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\SiteRetargetingTarget' => __DIR__ .'/SiteRetargetingTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\PlacementTarget' => __DIR__ .'/PlacementTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\DeviceTarget' => __DIR__ .'/DeviceTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\CarrierTarget' => __DIR__ .'/CarrierTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\AppTarget' => __DIR__ .'/AppTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\OsTarget' => __DIR__ .'/OsTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\OsVersionTarget' => __DIR__ .'/OsVersionTarget.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\AdGroupTargetOperation' => __DIR__ .'/AdGroupTargetOperation.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\AdGroupTargetMutateOperation' => __DIR__ .'/AdGroupTargetMutateOperation.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\AdGroupTargetReturnValue' => __DIR__ .'/AdGroupTargetReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\AdGroupTargetValue' => __DIR__ .'/AdGroupTargetValue.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\mutateResponse' => __DIR__ .'/mutateResponse.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\replace' => __DIR__ .'/replace.php',
        'Jp\YahooApis\YDN\V201903\AdGroupTarget\replaceResponse' => __DIR__ .'/replaceResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ba211194b8afb86eff84e4560217644d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
