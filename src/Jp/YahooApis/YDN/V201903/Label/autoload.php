<?php


 function autoload_de4c2941c89c8ed50d7d59854aee2038($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\Label\LabelService' => __DIR__ .'/LabelService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Label\LabelSelector' => __DIR__ .'/LabelSelector.php',
        'Jp\YahooApis\YDN\V201903\Label\Label' => __DIR__ .'/Label.php',
        'Jp\YahooApis\YDN\V201903\Label\LabelPage' => __DIR__ .'/LabelPage.php',
        'Jp\YahooApis\YDN\V201903\Label\LabelValues' => __DIR__ .'/LabelValues.php',
        'Jp\YahooApis\YDN\V201903\Label\LabelOperation' => __DIR__ .'/LabelOperation.php',
        'Jp\YahooApis\YDN\V201903\Label\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\Label\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\Label\LabelReturnValue' => __DIR__ .'/LabelReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Label\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\Label\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\Label\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\Label\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_de4c2941c89c8ed50d7d59854aee2038');

// Do nothing. The rest is just leftovers from the code generation.
{
}
