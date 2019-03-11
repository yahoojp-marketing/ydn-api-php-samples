<?php


 function autoload_a43c37a252115e3dc1f9d6ee32017510($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\Stats\StatsService' => __DIR__ .'/StatsService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Stats\StatsSelector' => __DIR__ .'/StatsSelector.php',
        'Jp\YahooApis\YDN\V201903\Stats\StatsPage' => __DIR__ .'/StatsPage.php',
        'Jp\YahooApis\YDN\V201903\Stats\Period' => __DIR__ .'/Period.php',
        'Jp\YahooApis\YDN\V201903\Stats\PeriodDatetime' => __DIR__ .'/PeriodDatetime.php',
        'Jp\YahooApis\YDN\V201903\Stats\StatsValues' => __DIR__ .'/StatsValues.php',
        'Jp\YahooApis\YDN\V201903\Stats\CampaignStatsValues' => __DIR__ .'/CampaignStatsValues.php',
        'Jp\YahooApis\YDN\V201903\Stats\AdGroupStatsValues' => __DIR__ .'/AdGroupStatsValues.php',
        'Jp\YahooApis\YDN\V201903\Stats\AdStatsValues' => __DIR__ .'/AdStatsValues.php',
        'Jp\YahooApis\YDN\V201903\Stats\ImageStatsValues' => __DIR__ .'/ImageStatsValues.php',
        'Jp\YahooApis\YDN\V201903\Stats\VideoStatsValues' => __DIR__ .'/VideoStatsValues.php',
        'Jp\YahooApis\YDN\V201903\Stats\TargetStatsValues' => __DIR__ .'/TargetStatsValues.php',
        'Jp\YahooApis\YDN\V201903\Stats\Stats' => __DIR__ .'/Stats.php',
        'Jp\YahooApis\YDN\V201903\Stats\StatsType' => __DIR__ .'/StatsType.php',
        'Jp\YahooApis\YDN\V201903\Stats\StatsPeriod' => __DIR__ .'/StatsPeriod.php',
        'Jp\YahooApis\YDN\V201903\Stats\StatsPeriodCustomDate' => __DIR__ .'/StatsPeriodCustomDate.php',
        'Jp\YahooApis\YDN\V201903\Stats\Target' => __DIR__ .'/Target.php',
        'Jp\YahooApis\YDN\V201903\Stats\TargetSetting' => __DIR__ .'/TargetSetting.php',
        'Jp\YahooApis\YDN\V201903\Stats\TargetType' => __DIR__ .'/TargetType.php',
        'Jp\YahooApis\YDN\V201903\Stats\TargetListDeliverType' => __DIR__ .'/TargetListDeliverType.php',
        'Jp\YahooApis\YDN\V201903\Stats\Age' => __DIR__ .'/Age.php',
        'Jp\YahooApis\YDN\V201903\Stats\EstimateFlg' => __DIR__ .'/EstimateFlg.php',
        'Jp\YahooApis\YDN\V201903\Stats\DayOfWeek' => __DIR__ .'/DayOfWeek.php',
        'Jp\YahooApis\YDN\V201903\Stats\Gender' => __DIR__ .'/Gender.php',
        'Jp\YahooApis\YDN\V201903\Stats\PlacementUrlListType' => __DIR__ .'/PlacementUrlListType.php',
        'Jp\YahooApis\YDN\V201903\Stats\DeviceType' => __DIR__ .'/DeviceType.php',
        'Jp\YahooApis\YDN\V201903\Stats\DeviceAppType' => __DIR__ .'/DeviceAppType.php',
        'Jp\YahooApis\YDN\V201903\Stats\DeviceOsType' => __DIR__ .'/DeviceOsType.php',
        'Jp\YahooApis\YDN\V201903\Stats\CarrierType' => __DIR__ .'/CarrierType.php',
        'Jp\YahooApis\YDN\V201903\Stats\AdScheduleTarget' => __DIR__ .'/AdScheduleTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\GeoTarget' => __DIR__ .'/GeoTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\AgeTarget' => __DIR__ .'/AgeTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\GenderTarget' => __DIR__ .'/GenderTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\InterestCategoryTarget' => __DIR__ .'/InterestCategoryTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\SearchTarget' => __DIR__ .'/SearchTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\SiteCategoryTarget' => __DIR__ .'/SiteCategoryTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\SiteRetargetingTarget' => __DIR__ .'/SiteRetargetingTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\PlacementTarget' => __DIR__ .'/PlacementTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\DeviceTarget' => __DIR__ .'/DeviceTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\CarrierTarget' => __DIR__ .'/CarrierTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\AppTarget' => __DIR__ .'/AppTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\OsTarget' => __DIR__ .'/OsTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\OsVersionTarget' => __DIR__ .'/OsVersionTarget.php',
        'Jp\YahooApis\YDN\V201903\Stats\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\Stats\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a43c37a252115e3dc1f9d6ee32017510');

// Do nothing. The rest is just leftovers from the code generation.
{
}
