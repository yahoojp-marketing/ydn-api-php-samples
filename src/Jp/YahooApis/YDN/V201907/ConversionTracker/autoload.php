<?php


 function autoload_3718c048a7ab17768ed7e2e92a82e204($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerService' => __DIR__ .'/ConversionTrackerService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerSelector' => __DIR__ .'/ConversionTrackerSelector.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTracker' => __DIR__ .'/ConversionTracker.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\WebConversion' => __DIR__ .'/WebConversion.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\WebConversionSnippet' => __DIR__ .'/WebConversionSnippet.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\AppConversion' => __DIR__ .'/AppConversion.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerStatus' => __DIR__ .'/ConversionTrackerStatus.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerCategory' => __DIR__ .'/ConversionTrackerCategory.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\StatsPeriod' => __DIR__ .'/StatsPeriod.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerType' => __DIR__ .'/ConversionTrackerType.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\WebConversionSnippetType' => __DIR__ .'/WebConversionSnippetType.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionCountingType' => __DIR__ .'/ConversionCountingType.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ExcludeFromBidding' => __DIR__ .'/ExcludeFromBidding.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\AppConversionPlatform' => __DIR__ .'/AppConversionPlatform.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\AppConversionType' => __DIR__ .'/AppConversionType.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerPage' => __DIR__ .'/ConversionTrackerPage.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\Period' => __DIR__ .'/Period.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\PeriodDatetime' => __DIR__ .'/PeriodDatetime.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerValues' => __DIR__ .'/ConversionTrackerValues.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerOperation' => __DIR__ .'/ConversionTrackerOperation.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\ConversionTrackerReturnValue' => __DIR__ .'/ConversionTrackerReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\StatsPeriodCustomDate' => __DIR__ .'/StatsPeriodCustomDate.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\ConversionTracker\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_3718c048a7ab17768ed7e2e92a82e204');

// Do nothing. The rest is just leftovers from the code generation.
{
}
