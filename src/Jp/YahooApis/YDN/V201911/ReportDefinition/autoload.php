<?php


 function autoload_b2cf156010e7d0bdb121bb501146bf03($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDefinitionService' => __DIR__ .'/ReportDefinitionService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportClosedDateSelector' => __DIR__ .'/ReportClosedDateSelector.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportClosedDateValue' => __DIR__ .'/ReportClosedDateValue.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportClosedDateRecord' => __DIR__ .'/ReportClosedDateRecord.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDefinitionFieldValue' => __DIR__ .'/ReportDefinitionFieldValue.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportFieldAttribute' => __DIR__ .'/ReportFieldAttribute.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDefinitionSelector' => __DIR__ .'/ReportDefinitionSelector.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDefinitionPage' => __DIR__ .'/ReportDefinitionPage.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDefinitionValues' => __DIR__ .'/ReportDefinitionValues.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDefinition' => __DIR__ .'/ReportDefinition.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDateRange' => __DIR__ .'/ReportDateRange.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportFilter' => __DIR__ .'/ReportFilter.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDefinitionOperation' => __DIR__ .'/ReportDefinitionOperation.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDefinitionReturnValue' => __DIR__ .'/ReportDefinitionReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportType' => __DIR__ .'/ReportType.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDateRangeType' => __DIR__ .'/ReportDateRangeType.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportFrequencyRange' => __DIR__ .'/ReportFrequencyRange.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDownloadEncode' => __DIR__ .'/ReportDownloadEncode.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportDownloadFormat' => __DIR__ .'/ReportDownloadFormat.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportZip' => __DIR__ .'/ReportZip.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportLang' => __DIR__ .'/ReportLang.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\FilterOperator' => __DIR__ .'/FilterOperator.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\ReportJobStatus' => __DIR__ .'/ReportJobStatus.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\RunReportJob' => __DIR__ .'/RunReportJob.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\getClosedDate' => __DIR__ .'/getClosedDate.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\getClosedDateResponse' => __DIR__ .'/getClosedDateResponse.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\getReportFields' => __DIR__ .'/getReportFields.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\getReportFieldsResponse' => __DIR__ .'/getReportFieldsResponse.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\ReportDefinition\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_b2cf156010e7d0bdb121bb501146bf03');

// Do nothing. The rest is just leftovers from the code generation.
{
}
