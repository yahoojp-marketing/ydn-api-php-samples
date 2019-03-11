<?php


 function autoload_152e87f601c3c02474434282ea9bce55($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\Report\ReportService' => __DIR__ .'/ReportService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportSelector' => __DIR__ .'/ReportSelector.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportClosedDateSelector' => __DIR__ .'/ReportClosedDateSelector.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportJobStatus' => __DIR__ .'/ReportJobStatus.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportRecord' => __DIR__ .'/ReportRecord.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportDateRangeType' => __DIR__ .'/ReportDateRangeType.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportDateRange' => __DIR__ .'/ReportDateRange.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportPage' => __DIR__ .'/ReportPage.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportValues' => __DIR__ .'/ReportValues.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportClosedDateValue' => __DIR__ .'/ReportClosedDateValue.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportClosedDateRecord' => __DIR__ .'/ReportClosedDateRecord.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportJobOperation' => __DIR__ .'/ReportJobOperation.php',
        'Jp\YahooApis\YDN\V201903\Report\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\Report\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\Report\ReportReturnValue' => __DIR__ .'/ReportReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Report\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\Report\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\Report\getClosedDate' => __DIR__ .'/getClosedDate.php',
        'Jp\YahooApis\YDN\V201903\Report\getClosedDateResponse' => __DIR__ .'/getClosedDateResponse.php',
        'Jp\YahooApis\YDN\V201903\Report\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\Report\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_152e87f601c3c02474434282ea9bce55');

// Do nothing. The rest is just leftovers from the code generation.
{
}
