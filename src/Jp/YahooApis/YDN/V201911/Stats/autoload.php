<?php


 function autoload_bfa249c3cd8c1d3edc3cfca4409f44d4($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\Stats\StatsService' => __DIR__ .'/StatsService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\Stats\StatsSelector' => __DIR__ .'/StatsSelector.php',
        'Jp\YahooApis\YDN\V201911\Stats\StatsPage' => __DIR__ .'/StatsPage.php',
        'Jp\YahooApis\YDN\V201911\Stats\Period' => __DIR__ .'/Period.php',
        'Jp\YahooApis\YDN\V201911\Stats\PeriodDatetime' => __DIR__ .'/PeriodDatetime.php',
        'Jp\YahooApis\YDN\V201911\Stats\StatsValues' => __DIR__ .'/StatsValues.php',
        'Jp\YahooApis\YDN\V201911\Stats\CampaignStatsValues' => __DIR__ .'/CampaignStatsValues.php',
        'Jp\YahooApis\YDN\V201911\Stats\AdGroupStatsValues' => __DIR__ .'/AdGroupStatsValues.php',
        'Jp\YahooApis\YDN\V201911\Stats\AdStatsValues' => __DIR__ .'/AdStatsValues.php',
        'Jp\YahooApis\YDN\V201911\Stats\ImageStatsValues' => __DIR__ .'/ImageStatsValues.php',
        'Jp\YahooApis\YDN\V201911\Stats\VideoStatsValues' => __DIR__ .'/VideoStatsValues.php',
        'Jp\YahooApis\YDN\V201911\Stats\TargetStatsValues' => __DIR__ .'/TargetStatsValues.php',
        'Jp\YahooApis\YDN\V201911\Stats\Stats' => __DIR__ .'/Stats.php',
        'Jp\YahooApis\YDN\V201911\Stats\StatsType' => __DIR__ .'/StatsType.php',
        'Jp\YahooApis\YDN\V201911\Stats\StatsPeriod' => __DIR__ .'/StatsPeriod.php',
        'Jp\YahooApis\YDN\V201911\Stats\StatsPeriodCustomDate' => __DIR__ .'/StatsPeriodCustomDate.php',
        'Jp\YahooApis\YDN\V201911\Stats\Target' => __DIR__ .'/Target.php',
        'Jp\YahooApis\YDN\V201911\Stats\TargetSetting' => __DIR__ .'/TargetSetting.php',
        'Jp\YahooApis\YDN\V201911\Stats\TargetType' => __DIR__ .'/TargetType.php',
        'Jp\YahooApis\YDN\V201911\Stats\TargetListDeliverType' => __DIR__ .'/TargetListDeliverType.php',
        'Jp\YahooApis\YDN\V201911\Stats\Age' => __DIR__ .'/Age.php',
        'Jp\YahooApis\YDN\V201911\Stats\EstimateFlg' => __DIR__ .'/EstimateFlg.php',
        'Jp\YahooApis\YDN\V201911\Stats\DayOfWeek' => __DIR__ .'/DayOfWeek.php',
        'Jp\YahooApis\YDN\V201911\Stats\Gender' => __DIR__ .'/Gender.php',
        'Jp\YahooApis\YDN\V201911\Stats\PlacementUrlListType' => __DIR__ .'/PlacementUrlListType.php',
        'Jp\YahooApis\YDN\V201911\Stats\DeviceType' => __DIR__ .'/DeviceType.php',
        'Jp\YahooApis\YDN\V201911\Stats\DeviceAppType' => __DIR__ .'/DeviceAppType.php',
        'Jp\YahooApis\YDN\V201911\Stats\DeviceOsType' => __DIR__ .'/DeviceOsType.php',
        'Jp\YahooApis\YDN\V201911\Stats\CarrierType' => __DIR__ .'/CarrierType.php',
        'Jp\YahooApis\YDN\V201911\Stats\AudienceCategoryType' => __DIR__ .'/AudienceCategoryType.php',
        'Jp\YahooApis\YDN\V201911\Stats\AdScheduleTarget' => __DIR__ .'/AdScheduleTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\GeoTarget' => __DIR__ .'/GeoTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\AgeTarget' => __DIR__ .'/AgeTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\GenderTarget' => __DIR__ .'/GenderTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\InterestCategoryTarget' => __DIR__ .'/InterestCategoryTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\SearchTarget' => __DIR__ .'/SearchTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\SiteCategoryTarget' => __DIR__ .'/SiteCategoryTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\SiteRetargetingTarget' => __DIR__ .'/SiteRetargetingTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\PlacementTarget' => __DIR__ .'/PlacementTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\DeviceTarget' => __DIR__ .'/DeviceTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\CarrierTarget' => __DIR__ .'/CarrierTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\AppTarget' => __DIR__ .'/AppTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\OsTarget' => __DIR__ .'/OsTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\OsVersionTarget' => __DIR__ .'/OsVersionTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\AudienceCategoryTarget' => __DIR__ .'/AudienceCategoryTarget.php',
        'Jp\YahooApis\YDN\V201911\Stats\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\Stats\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_bfa249c3cd8c1d3edc3cfca4409f44d4');

// Do nothing. The rest is just leftovers from the code generation.
{
}
