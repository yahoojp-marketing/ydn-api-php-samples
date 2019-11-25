<?php


 function autoload_560674011b046321185fd6fdb2c0bd31($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\AdGroupLabel\AdGroupLabelService' => __DIR__ .'/AdGroupLabelService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\AdGroupLabel\AdGroupLabel' => __DIR__ .'/AdGroupLabel.php',
        'Jp\YahooApis\YDN\V201911\AdGroupLabel\AdGroupLabelValues' => __DIR__ .'/AdGroupLabelValues.php',
        'Jp\YahooApis\YDN\V201911\AdGroupLabel\AdGroupLabelOperation' => __DIR__ .'/AdGroupLabelOperation.php',
        'Jp\YahooApis\YDN\V201911\AdGroupLabel\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\AdGroupLabel\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\AdGroupLabel\AdGroupLabelReturnValue' => __DIR__ .'/AdGroupLabelReturnValue.php',
        'Jp\YahooApis\YDN\V201911\AdGroupLabel\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\AdGroupLabel\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_560674011b046321185fd6fdb2c0bd31');

// Do nothing. The rest is just leftovers from the code generation.
{
}
