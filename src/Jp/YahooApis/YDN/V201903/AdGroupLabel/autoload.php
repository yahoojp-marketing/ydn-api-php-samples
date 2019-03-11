<?php


 function autoload_7300f495710e95772b0f29ad0bf5eed1($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\AdGroupLabel\AdGroupLabelService' => __DIR__ .'/AdGroupLabelService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AdGroupLabel\AdGroupLabel' => __DIR__ .'/AdGroupLabel.php',
        'Jp\YahooApis\YDN\V201903\AdGroupLabel\AdGroupLabelValues' => __DIR__ .'/AdGroupLabelValues.php',
        'Jp\YahooApis\YDN\V201903\AdGroupLabel\AdGroupLabelOperation' => __DIR__ .'/AdGroupLabelOperation.php',
        'Jp\YahooApis\YDN\V201903\AdGroupLabel\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\AdGroupLabel\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\AdGroupLabel\AdGroupLabelReturnValue' => __DIR__ .'/AdGroupLabelReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AdGroupLabel\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\AdGroupLabel\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_7300f495710e95772b0f29ad0bf5eed1');

// Do nothing. The rest is just leftovers from the code generation.
{
}
