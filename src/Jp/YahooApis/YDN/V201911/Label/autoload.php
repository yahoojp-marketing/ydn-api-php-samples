<?php


 function autoload_e99a104baf78303b643ffc4961a1f2d5($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\Label\LabelService' => __DIR__ .'/LabelService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\Label\LabelSelector' => __DIR__ .'/LabelSelector.php',
        'Jp\YahooApis\YDN\V201911\Label\Label' => __DIR__ .'/Label.php',
        'Jp\YahooApis\YDN\V201911\Label\LabelPage' => __DIR__ .'/LabelPage.php',
        'Jp\YahooApis\YDN\V201911\Label\LabelValues' => __DIR__ .'/LabelValues.php',
        'Jp\YahooApis\YDN\V201911\Label\LabelOperation' => __DIR__ .'/LabelOperation.php',
        'Jp\YahooApis\YDN\V201911\Label\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\Label\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\Label\LabelReturnValue' => __DIR__ .'/LabelReturnValue.php',
        'Jp\YahooApis\YDN\V201911\Label\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\Label\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\Label\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\Label\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e99a104baf78303b643ffc4961a1f2d5');

// Do nothing. The rest is just leftovers from the code generation.
{
}
