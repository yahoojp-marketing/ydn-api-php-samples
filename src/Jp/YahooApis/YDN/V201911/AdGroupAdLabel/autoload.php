<?php


 function autoload_556b7e1e3fd4d32a8969bd4187c17be4($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\AdGroupAdLabel\AdGroupAdLabelService' => __DIR__ .'/AdGroupAdLabelService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAdLabel\AdGroupAdLabel' => __DIR__ .'/AdGroupAdLabel.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAdLabel\AdGroupAdLabelValues' => __DIR__ .'/AdGroupAdLabelValues.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAdLabel\AdGroupAdLabelOperation' => __DIR__ .'/AdGroupAdLabelOperation.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAdLabel\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAdLabel\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAdLabel\AdGroupAdLabelReturnValue' => __DIR__ .'/AdGroupAdLabelReturnValue.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAdLabel\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\AdGroupAdLabel\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_556b7e1e3fd4d32a8969bd4187c17be4');

// Do nothing. The rest is just leftovers from the code generation.
{
}
