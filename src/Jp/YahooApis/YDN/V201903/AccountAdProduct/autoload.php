<?php


 function autoload_1b8b5ac6bd9c6c3d6c7d9f58c9d08559($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\AccountAdProduct\AccountAdProductService' => __DIR__ .'/AccountAdProductService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AccountAdProduct\AccountAdProductSelector' => __DIR__ .'/AccountAdProductSelector.php',
        'Jp\YahooApis\YDN\V201903\AccountAdProduct\AccountAdProductPage' => __DIR__ .'/AccountAdProductPage.php',
        'Jp\YahooApis\YDN\V201903\AccountAdProduct\AccountAdProductValues' => __DIR__ .'/AccountAdProductValues.php',
        'Jp\YahooApis\YDN\V201903\AccountAdProduct\AccountAdProduct' => __DIR__ .'/AccountAdProduct.php',
        'Jp\YahooApis\YDN\V201903\AccountAdProduct\AdProduct' => __DIR__ .'/AdProduct.php',
        'Jp\YahooApis\YDN\V201903\AccountAdProduct\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\AccountAdProduct\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_1b8b5ac6bd9c6c3d6c7d9f58c9d08559');

// Do nothing. The rest is just leftovers from the code generation.
{
}
