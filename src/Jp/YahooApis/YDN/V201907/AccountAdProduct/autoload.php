<?php


 function autoload_7ee90e2eff427294a3e4dd99a0515288($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\AccountAdProduct\AccountAdProductService' => __DIR__ .'/AccountAdProductService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\AccountAdProduct\AccountAdProductSelector' => __DIR__ .'/AccountAdProductSelector.php',
        'Jp\YahooApis\YDN\V201907\AccountAdProduct\AccountAdProductPage' => __DIR__ .'/AccountAdProductPage.php',
        'Jp\YahooApis\YDN\V201907\AccountAdProduct\AccountAdProductValues' => __DIR__ .'/AccountAdProductValues.php',
        'Jp\YahooApis\YDN\V201907\AccountAdProduct\AccountAdProduct' => __DIR__ .'/AccountAdProduct.php',
        'Jp\YahooApis\YDN\V201907\AccountAdProduct\AdProduct' => __DIR__ .'/AdProduct.php',
        'Jp\YahooApis\YDN\V201907\AccountAdProduct\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\AccountAdProduct\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_7ee90e2eff427294a3e4dd99a0515288');

// Do nothing. The rest is just leftovers from the code generation.
{
}
