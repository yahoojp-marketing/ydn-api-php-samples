<?php


 function autoload_f4210775fb7a5ba24a21e9e83ddc735b($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\FeedData\FeedDataService' => __DIR__ .'/FeedDataService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\FeedData\UploadUrlValue' => __DIR__ .'/UploadUrlValue.php',
        'Jp\YahooApis\YDN\V201911\FeedData\FeedDataSelector' => __DIR__ .'/FeedDataSelector.php',
        'Jp\YahooApis\YDN\V201911\FeedData\FeedDataPage' => __DIR__ .'/FeedDataPage.php',
        'Jp\YahooApis\YDN\V201911\FeedData\FileUploadDateRange' => __DIR__ .'/FileUploadDateRange.php',
        'Jp\YahooApis\YDN\V201911\FeedData\FeedDataRecord' => __DIR__ .'/FeedDataRecord.php',
        'Jp\YahooApis\YDN\V201911\FeedData\FeedDataValues' => __DIR__ .'/FeedDataValues.php',
        'Jp\YahooApis\YDN\V201911\FeedData\FileUploadStatus' => __DIR__ .'/FileUploadStatus.php',
        'Jp\YahooApis\YDN\V201911\FeedData\ItemListUploadType' => __DIR__ .'/ItemListUploadType.php',
        'Jp\YahooApis\YDN\V201911\FeedData\FileUploadSrc' => __DIR__ .'/FileUploadSrc.php',
        'Jp\YahooApis\YDN\V201911\FeedData\getUploadUrl' => __DIR__ .'/getUploadUrl.php',
        'Jp\YahooApis\YDN\V201911\FeedData\getUploadUrlResponse' => __DIR__ .'/getUploadUrlResponse.php',
        'Jp\YahooApis\YDN\V201911\FeedData\getUploadStatus' => __DIR__ .'/getUploadStatus.php',
        'Jp\YahooApis\YDN\V201911\FeedData\getUploadStatusResponse' => __DIR__ .'/getUploadStatusResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f4210775fb7a5ba24a21e9e83ddc735b');

// Do nothing. The rest is just leftovers from the code generation.
{
}
