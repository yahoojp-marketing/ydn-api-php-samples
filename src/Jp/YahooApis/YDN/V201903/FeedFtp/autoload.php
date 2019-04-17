<?php


 function autoload_eb49558a69845202fb9dfe2bbe022d9e($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\FeedFtp\FeedFtpService' => __DIR__ .'/FeedFtpService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\FeedFtpSelector' => __DIR__ .'/FeedFtpSelector.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\FeedFtp' => __DIR__ .'/FeedFtp.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\FeedFtpPage' => __DIR__ .'/FeedFtpPage.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\FeedFtpValues' => __DIR__ .'/FeedFtpValues.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\FeedFtpOperation' => __DIR__ .'/FeedFtpOperation.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\FeedFtpReturnValue' => __DIR__ .'/FeedFtpReturnValue.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\Schedule' => __DIR__ .'/Schedule.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\ScheduleHourly' => __DIR__ .'/ScheduleHourly.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\ScheduleDaily' => __DIR__ .'/ScheduleDaily.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\ScheduleWeekly' => __DIR__ .'/ScheduleWeekly.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\ItemListUploadType' => __DIR__ .'/ItemListUploadType.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\ActiveStatus' => __DIR__ .'/ActiveStatus.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\ScheduleType' => __DIR__ .'/ScheduleType.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\ScheduleWeek' => __DIR__ .'/ScheduleWeek.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\FeedFtp\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_eb49558a69845202fb9dfe2bbe022d9e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
