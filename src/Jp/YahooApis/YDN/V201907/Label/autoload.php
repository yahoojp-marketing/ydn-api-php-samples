<?php


 function autoload_a3c53269981dc575ed6373a078b47872($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\Label\LabelService' => __DIR__ .'/LabelService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\Label\LabelSelector' => __DIR__ .'/LabelSelector.php',
        'Jp\YahooApis\YDN\V201907\Label\Label' => __DIR__ .'/Label.php',
        'Jp\YahooApis\YDN\V201907\Label\LabelPage' => __DIR__ .'/LabelPage.php',
        'Jp\YahooApis\YDN\V201907\Label\LabelValues' => __DIR__ .'/LabelValues.php',
        'Jp\YahooApis\YDN\V201907\Label\LabelOperation' => __DIR__ .'/LabelOperation.php',
        'Jp\YahooApis\YDN\V201907\Label\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\Label\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\Label\LabelReturnValue' => __DIR__ .'/LabelReturnValue.php',
        'Jp\YahooApis\YDN\V201907\Label\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\Label\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201907\Label\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\Label\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a3c53269981dc575ed6373a078b47872');

// Do nothing. The rest is just leftovers from the code generation.
{
}
