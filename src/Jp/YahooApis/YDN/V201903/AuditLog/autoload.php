<?php


 function autoload_bde53ad35eb3c358e348edcdb674eb2c($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\AuditLog\AuditLogService' => __DIR__ .'/AuditLogService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\getDownload' => __DIR__ .'/getDownload.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\AuditLogDownloadSelector' => __DIR__ .'/AuditLogDownloadSelector.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\AuditLogDateRange' => __DIR__ .'/AuditLogDateRange.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\AuditLogUpdateSource' => __DIR__ .'/AuditLogUpdateSource.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\AuditLogLang' => __DIR__ .'/AuditLogLang.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\getDownloadResponse' => __DIR__ .'/getDownloadResponse.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\AuditLogDownloadReturnValue' => __DIR__ .'/AuditLogDownloadReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\AuditLogDownloadValues' => __DIR__ .'/AuditLogDownloadValues.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\getDownloadStatus' => __DIR__ .'/getDownloadStatus.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\AuditLogDownloadStatusSelector' => __DIR__ .'/AuditLogDownloadStatusSelector.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\getDownloadStatusResponse' => __DIR__ .'/getDownloadStatusResponse.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\AuditLogDownloadStatusPage' => __DIR__ .'/AuditLogDownloadStatusPage.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\AuditLogDownloadJobStatus' => __DIR__ .'/AuditLogDownloadJobStatus.php',
        'Jp\YahooApis\YDN\V201903\AuditLog\AuditLogJob' => __DIR__ .'/AuditLogJob.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_bde53ad35eb3c358e348edcdb674eb2c');

// Do nothing. The rest is just leftovers from the code generation.
{
}
