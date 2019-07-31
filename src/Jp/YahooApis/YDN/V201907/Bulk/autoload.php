<?php


 function autoload_5418e5e74843863a89ba4c3aa2fe7351($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\Bulk\BulkService' => __DIR__ .'/BulkService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkDownloadSelector' => __DIR__ .'/BulkDownloadSelector.php',
        'Jp\YahooApis\YDN\V201907\Bulk\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201907\Bulk\ApprovalStatus' => __DIR__ .'/ApprovalStatus.php',
        'Jp\YahooApis\YDN\V201907\Bulk\MediaApprovalStatus' => __DIR__ .'/MediaApprovalStatus.php',
        'Jp\YahooApis\YDN\V201907\Bulk\EntityType' => __DIR__ .'/EntityType.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkDownloadType' => __DIR__ .'/BulkDownloadType.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkLang' => __DIR__ .'/BulkLang.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkOutput' => __DIR__ .'/BulkOutput.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkEncoding' => __DIR__ .'/BulkEncoding.php',
        'Jp\YahooApis\YDN\V201907\Bulk\DownloadBulkJob' => __DIR__ .'/DownloadBulkJob.php',
        'Jp\YahooApis\YDN\V201907\Bulk\DownloadBulkJobStatus' => __DIR__ .'/DownloadBulkJobStatus.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkDownloadReturnValue' => __DIR__ .'/BulkDownloadReturnValue.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkDownloadValues' => __DIR__ .'/BulkDownloadValues.php',
        'Jp\YahooApis\YDN\V201907\Bulk\getBulkDownloadStatus' => __DIR__ .'/getBulkDownloadStatus.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkDownloadStatusSelector' => __DIR__ .'/BulkDownloadStatusSelector.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkDownloadStatusPage' => __DIR__ .'/BulkDownloadStatusPage.php',
        'Jp\YahooApis\YDN\V201907\Bulk\UploadUrlValue' => __DIR__ .'/UploadUrlValue.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkUploadStatusSelector' => __DIR__ .'/BulkUploadStatusSelector.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkUploadStatusPage' => __DIR__ .'/BulkUploadStatusPage.php',
        'Jp\YahooApis\YDN\V201907\Bulk\BulkUploadValues' => __DIR__ .'/BulkUploadValues.php',
        'Jp\YahooApis\YDN\V201907\Bulk\UploadBulkJob' => __DIR__ .'/UploadBulkJob.php',
        'Jp\YahooApis\YDN\V201907\Bulk\ProcessingItemsCount' => __DIR__ .'/ProcessingItemsCount.php',
        'Jp\YahooApis\YDN\V201907\Bulk\UploadBulkJobStatus' => __DIR__ .'/UploadBulkJobStatus.php',
        'Jp\YahooApis\YDN\V201907\Bulk\getBulkDownload' => __DIR__ .'/getBulkDownload.php',
        'Jp\YahooApis\YDN\V201907\Bulk\getBulkDownloadResponse' => __DIR__ .'/getBulkDownloadResponse.php',
        'Jp\YahooApis\YDN\V201907\Bulk\getBulkDownloadStatusResponse' => __DIR__ .'/getBulkDownloadStatusResponse.php',
        'Jp\YahooApis\YDN\V201907\Bulk\getUploadUrl' => __DIR__ .'/getUploadUrl.php',
        'Jp\YahooApis\YDN\V201907\Bulk\getUploadUrlResponse' => __DIR__ .'/getUploadUrlResponse.php',
        'Jp\YahooApis\YDN\V201907\Bulk\getBulkUploadStatus' => __DIR__ .'/getBulkUploadStatus.php',
        'Jp\YahooApis\YDN\V201907\Bulk\getBulkUploadStatusResponse' => __DIR__ .'/getBulkUploadStatusResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5418e5e74843863a89ba4c3aa2fe7351');

// Do nothing. The rest is just leftovers from the code generation.
{
}
