<?php


 function autoload_256b5189fc617f90abc92e8ef225dddb($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\Bulk\BulkService' => __DIR__ .'/BulkService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkDownloadSelector' => __DIR__ .'/BulkDownloadSelector.php',
        'Jp\YahooApis\YDN\V201903\Bulk\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201903\Bulk\ApprovalStatus' => __DIR__ .'/ApprovalStatus.php',
        'Jp\YahooApis\YDN\V201903\Bulk\MediaApprovalStatus' => __DIR__ .'/MediaApprovalStatus.php',
        'Jp\YahooApis\YDN\V201903\Bulk\EntityType' => __DIR__ .'/EntityType.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkDownloadType' => __DIR__ .'/BulkDownloadType.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkLang' => __DIR__ .'/BulkLang.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkOutput' => __DIR__ .'/BulkOutput.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkEncoding' => __DIR__ .'/BulkEncoding.php',
        'Jp\YahooApis\YDN\V201903\Bulk\DownloadBulkJob' => __DIR__ .'/DownloadBulkJob.php',
        'Jp\YahooApis\YDN\V201903\Bulk\DownloadBulkJobStatus' => __DIR__ .'/DownloadBulkJobStatus.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkDownloadReturnValue' => __DIR__ .'/BulkDownloadReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkDownloadValues' => __DIR__ .'/BulkDownloadValues.php',
        'Jp\YahooApis\YDN\V201903\Bulk\getBulkDownloadStatus' => __DIR__ .'/getBulkDownloadStatus.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkDownloadStatusSelector' => __DIR__ .'/BulkDownloadStatusSelector.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkDownloadStatusPage' => __DIR__ .'/BulkDownloadStatusPage.php',
        'Jp\YahooApis\YDN\V201903\Bulk\UploadUrlValue' => __DIR__ .'/UploadUrlValue.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkUploadStatusSelector' => __DIR__ .'/BulkUploadStatusSelector.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkUploadStatusPage' => __DIR__ .'/BulkUploadStatusPage.php',
        'Jp\YahooApis\YDN\V201903\Bulk\BulkUploadValues' => __DIR__ .'/BulkUploadValues.php',
        'Jp\YahooApis\YDN\V201903\Bulk\UploadBulkJob' => __DIR__ .'/UploadBulkJob.php',
        'Jp\YahooApis\YDN\V201903\Bulk\ProcessingItemsCount' => __DIR__ .'/ProcessingItemsCount.php',
        'Jp\YahooApis\YDN\V201903\Bulk\UploadBulkJobStatus' => __DIR__ .'/UploadBulkJobStatus.php',
        'Jp\YahooApis\YDN\V201903\Bulk\getBulkDownload' => __DIR__ .'/getBulkDownload.php',
        'Jp\YahooApis\YDN\V201903\Bulk\getBulkDownloadResponse' => __DIR__ .'/getBulkDownloadResponse.php',
        'Jp\YahooApis\YDN\V201903\Bulk\getBulkDownloadStatusResponse' => __DIR__ .'/getBulkDownloadStatusResponse.php',
        'Jp\YahooApis\YDN\V201903\Bulk\getUploadUrl' => __DIR__ .'/getUploadUrl.php',
        'Jp\YahooApis\YDN\V201903\Bulk\getUploadUrlResponse' => __DIR__ .'/getUploadUrlResponse.php',
        'Jp\YahooApis\YDN\V201903\Bulk\getBulkUploadStatus' => __DIR__ .'/getBulkUploadStatus.php',
        'Jp\YahooApis\YDN\V201903\Bulk\getBulkUploadStatusResponse' => __DIR__ .'/getBulkUploadStatusResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_256b5189fc617f90abc92e8ef225dddb');

// Do nothing. The rest is just leftovers from the code generation.
{
}
