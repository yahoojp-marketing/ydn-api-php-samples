<?php


 function autoload_d06caebf8fb6df5f0cf23fa5405af867($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\LocationService_sandbox.wsdl\LocationService' => __DIR__ .'/LocationService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\LocationService_sandbox.wsdl\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\LocationService_sandbox.wsdl\LocationReturnValue' => __DIR__ .'/LocationReturnValue.php',
        'Jp\YahooApis\YDN\V201903\LocationService_sandbox.wsdl\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d06caebf8fb6df5f0cf23fa5405af867');

// Do nothing. The rest is just leftovers from the code generation.
{
}
