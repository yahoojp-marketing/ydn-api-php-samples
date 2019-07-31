<?php


 function autoload_1c7fb994fffc5f92923829669b8b965c($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetService' => __DIR__ .'/AdGroupTargetService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetSelector' => __DIR__ .'/AdGroupTargetSelector.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetPage' => __DIR__ .'/AdGroupTargetPage.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTarget' => __DIR__ .'/AdGroupTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\Target' => __DIR__ .'/Target.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\TargetType' => __DIR__ .'/TargetType.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\TargetListDeliverType' => __DIR__ .'/TargetListDeliverType.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\Age' => __DIR__ .'/Age.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\EstimateFlg' => __DIR__ .'/EstimateFlg.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\DayOfWeek' => __DIR__ .'/DayOfWeek.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\Gender' => __DIR__ .'/Gender.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\PlacementUrlListType' => __DIR__ .'/PlacementUrlListType.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\DeviceType' => __DIR__ .'/DeviceType.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\DeviceAppType' => __DIR__ .'/DeviceAppType.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\DeviceOsType' => __DIR__ .'/DeviceOsType.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\CarrierType' => __DIR__ .'/CarrierType.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\AdScheduleTarget' => __DIR__ .'/AdScheduleTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\GeoTarget' => __DIR__ .'/GeoTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\AgeTarget' => __DIR__ .'/AgeTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\GenderTarget' => __DIR__ .'/GenderTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\InterestCategoryTarget' => __DIR__ .'/InterestCategoryTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\SearchTarget' => __DIR__ .'/SearchTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\SiteCategoryTarget' => __DIR__ .'/SiteCategoryTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\SiteRetargetingTarget' => __DIR__ .'/SiteRetargetingTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\PlacementTarget' => __DIR__ .'/PlacementTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\DeviceTarget' => __DIR__ .'/DeviceTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\CarrierTarget' => __DIR__ .'/CarrierTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\AppTarget' => __DIR__ .'/AppTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\OsTarget' => __DIR__ .'/OsTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\OsVersionTarget' => __DIR__ .'/OsVersionTarget.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetOperation' => __DIR__ .'/AdGroupTargetOperation.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetMutateOperation' => __DIR__ .'/AdGroupTargetMutateOperation.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetReturnValue' => __DIR__ .'/AdGroupTargetReturnValue.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\AdGroupTargetValue' => __DIR__ .'/AdGroupTargetValue.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\mutateResponse' => __DIR__ .'/mutateResponse.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\replace' => __DIR__ .'/replace.php',
        'Jp\YahooApis\YDN\V201907\AdGroupTarget\replaceResponse' => __DIR__ .'/replaceResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_1c7fb994fffc5f92923829669b8b965c');

// Do nothing. The rest is just leftovers from the code generation.
{
}
