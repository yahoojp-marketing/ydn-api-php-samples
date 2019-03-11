<?php


 function autoload_a9fbbbacc52be722279a23f0ed16876f($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\FeedData\FeedDataService' => __DIR__ .'/FeedDataService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\FeedData\UploadUrlValue' => __DIR__ .'/UploadUrlValue.php',
        'Jp\YahooApis\YDN\V201903\FeedData\FeedDataSelector' => __DIR__ .'/FeedDataSelector.php',
        'Jp\YahooApis\YDN\V201903\FeedData\FeedDataPage' => __DIR__ .'/FeedDataPage.php',
        'Jp\YahooApis\YDN\V201903\FeedData\FileUploadDateRange' => __DIR__ .'/FileUploadDateRange.php',
        'Jp\YahooApis\YDN\V201903\FeedData\FeedDataRecord' => __DIR__ .'/FeedDataRecord.php',
        'Jp\YahooApis\YDN\V201903\FeedData\FeedDataValues' => __DIR__ .'/FeedDataValues.php',
        'Jp\YahooApis\YDN\V201903\FeedData\FileUploadStatus' => __DIR__ .'/FileUploadStatus.php',
        'Jp\YahooApis\YDN\V201903\FeedData\ItemListUploadType' => __DIR__ .'/ItemListUploadType.php',
        'Jp\YahooApis\YDN\V201903\FeedData\getUploadUrl' => __DIR__ .'/getUploadUrl.php',
        'Jp\YahooApis\YDN\V201903\FeedData\getUploadUrlResponse' => __DIR__ .'/getUploadUrlResponse.php',
        'Jp\YahooApis\YDN\V201903\FeedData\getUploadStatus' => __DIR__ .'/getUploadStatus.php',
        'Jp\YahooApis\YDN\V201903\FeedData\getUploadStatusResponse' => __DIR__ .'/getUploadStatusResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a9fbbbacc52be722279a23f0ed16876f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
