<?php


 function autoload_320a096598b91fbade39160a55a4a8f8($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\FeedData\FeedDataService' => __DIR__ .'/FeedDataService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\FeedData\UploadUrlValue' => __DIR__ .'/UploadUrlValue.php',
        'Jp\YahooApis\YDN\V201907\FeedData\FeedDataSelector' => __DIR__ .'/FeedDataSelector.php',
        'Jp\YahooApis\YDN\V201907\FeedData\FeedDataPage' => __DIR__ .'/FeedDataPage.php',
        'Jp\YahooApis\YDN\V201907\FeedData\FileUploadDateRange' => __DIR__ .'/FileUploadDateRange.php',
        'Jp\YahooApis\YDN\V201907\FeedData\FeedDataRecord' => __DIR__ .'/FeedDataRecord.php',
        'Jp\YahooApis\YDN\V201907\FeedData\FeedDataValues' => __DIR__ .'/FeedDataValues.php',
        'Jp\YahooApis\YDN\V201907\FeedData\FileUploadStatus' => __DIR__ .'/FileUploadStatus.php',
        'Jp\YahooApis\YDN\V201907\FeedData\ItemListUploadType' => __DIR__ .'/ItemListUploadType.php',
        'Jp\YahooApis\YDN\V201907\FeedData\FileUploadSrc' => __DIR__ .'/FileUploadSrc.php',
        'Jp\YahooApis\YDN\V201907\FeedData\getUploadUrl' => __DIR__ .'/getUploadUrl.php',
        'Jp\YahooApis\YDN\V201907\FeedData\getUploadUrlResponse' => __DIR__ .'/getUploadUrlResponse.php',
        'Jp\YahooApis\YDN\V201907\FeedData\getUploadStatus' => __DIR__ .'/getUploadStatus.php',
        'Jp\YahooApis\YDN\V201907\FeedData\getUploadStatusResponse' => __DIR__ .'/getUploadStatusResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_320a096598b91fbade39160a55a4a8f8');

// Do nothing. The rest is just leftovers from the code generation.
{
}
