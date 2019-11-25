<?php


 function autoload_ae678d2331cbec8e9c413ea20bd0ba00($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\CampaignMigration\CampaignMigrationService' => __DIR__ .'/CampaignMigrationService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\CampaignDownloadSelector' => __DIR__ .'/CampaignDownloadSelector.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\CampaignDownloadUrlValue' => __DIR__ .'/CampaignDownloadUrlValue.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationStatusSelector' => __DIR__ .'/MigrationStatusSelector.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJob' => __DIR__ .'/MigrationJob.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJobValues' => __DIR__ .'/MigrationJobValues.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationStatusPage' => __DIR__ .'/MigrationStatusPage.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\CampaignUploadSelector' => __DIR__ .'/CampaignUploadSelector.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\UploadUrlValue' => __DIR__ .'/UploadUrlValue.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationJobStatus' => __DIR__ .'/MigrationJobStatus.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationLang' => __DIR__ .'/MigrationLang.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\MigrationScope' => __DIR__ .'/MigrationScope.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\getCampaignDownloadUrl' => __DIR__ .'/getCampaignDownloadUrl.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\getCampaignDownloadUrlResponse' => __DIR__ .'/getCampaignDownloadUrlResponse.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\getMigrationStatus' => __DIR__ .'/getMigrationStatus.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\getMigrationStatusResponse' => __DIR__ .'/getMigrationStatusResponse.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\getUploadUrl' => __DIR__ .'/getUploadUrl.php',
        'Jp\YahooApis\YDN\V201911\CampaignMigration\getUploadUrlResponse' => __DIR__ .'/getUploadUrlResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ae678d2331cbec8e9c413ea20bd0ba00');

// Do nothing. The rest is just leftovers from the code generation.
{
}
