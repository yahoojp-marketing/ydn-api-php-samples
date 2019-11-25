<?php


 function autoload_258d3be083ce2c97d19c930af7c86660($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\AuditLog\AuditLogService' => __DIR__ .'/AuditLogService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\getDownload' => __DIR__ .'/getDownload.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadSelector' => __DIR__ .'/AuditLogDownloadSelector.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDateRange' => __DIR__ .'/AuditLogDateRange.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\AuditLogUpdateSource' => __DIR__ .'/AuditLogUpdateSource.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\AuditLogLang' => __DIR__ .'/AuditLogLang.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\getDownloadResponse' => __DIR__ .'/getDownloadResponse.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadReturnValue' => __DIR__ .'/AuditLogDownloadReturnValue.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadValues' => __DIR__ .'/AuditLogDownloadValues.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\getDownloadStatus' => __DIR__ .'/getDownloadStatus.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadStatusSelector' => __DIR__ .'/AuditLogDownloadStatusSelector.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\getDownloadStatusResponse' => __DIR__ .'/getDownloadStatusResponse.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadStatusPage' => __DIR__ .'/AuditLogDownloadStatusPage.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\AuditLogDownloadJobStatus' => __DIR__ .'/AuditLogDownloadJobStatus.php',
        'Jp\YahooApis\YDN\V201911\AuditLog\AuditLogJob' => __DIR__ .'/AuditLogJob.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_258d3be083ce2c97d19c930af7c86660');

// Do nothing. The rest is just leftovers from the code generation.
{
}
