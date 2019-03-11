<?php


 function autoload_ba05d8a4954c50980c7c6c2f7caee807($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\Location\LocationService' => __DIR__ .'/LocationService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Location\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\Location\LocationReturnValue' => __DIR__ .'/LocationReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Location\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ba05d8a4954c50980c7c6c2f7caee807');

// Do nothing. The rest is just leftovers from the code generation.
{
}
