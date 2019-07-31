<?php


 function autoload_a868fed0f122509fc201b1cf8f37e506($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\AuditLog\AuditLogService' => __DIR__ .'/AuditLogService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\getDownload' => __DIR__ .'/getDownload.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDownloadSelector' => __DIR__ .'/AuditLogDownloadSelector.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDateRange' => __DIR__ .'/AuditLogDateRange.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\AuditLogUpdateSource' => __DIR__ .'/AuditLogUpdateSource.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\AuditLogLang' => __DIR__ .'/AuditLogLang.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\getDownloadResponse' => __DIR__ .'/getDownloadResponse.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDownloadReturnValue' => __DIR__ .'/AuditLogDownloadReturnValue.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDownloadValues' => __DIR__ .'/AuditLogDownloadValues.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\getDownloadStatus' => __DIR__ .'/getDownloadStatus.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDownloadStatusSelector' => __DIR__ .'/AuditLogDownloadStatusSelector.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\getDownloadStatusResponse' => __DIR__ .'/getDownloadStatusResponse.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDownloadStatusPage' => __DIR__ .'/AuditLogDownloadStatusPage.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\AuditLogDownloadJobStatus' => __DIR__ .'/AuditLogDownloadJobStatus.php',
        'Jp\YahooApis\YDN\V201907\AuditLog\AuditLogJob' => __DIR__ .'/AuditLogJob.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a868fed0f122509fc201b1cf8f37e506');

// Do nothing. The rest is just leftovers from the code generation.
{
}
