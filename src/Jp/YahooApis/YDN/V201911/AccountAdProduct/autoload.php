<?php


 function autoload_b77e998276617675973503f8c584e8ee($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\AccountAdProduct\AccountAdProductService' => __DIR__ .'/AccountAdProductService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\AccountAdProduct\AccountAdProductSelector' => __DIR__ .'/AccountAdProductSelector.php',
        'Jp\YahooApis\YDN\V201911\AccountAdProduct\AccountAdProductPage' => __DIR__ .'/AccountAdProductPage.php',
        'Jp\YahooApis\YDN\V201911\AccountAdProduct\AccountAdProductValues' => __DIR__ .'/AccountAdProductValues.php',
        'Jp\YahooApis\YDN\V201911\AccountAdProduct\AccountAdProduct' => __DIR__ .'/AccountAdProduct.php',
        'Jp\YahooApis\YDN\V201911\AccountAdProduct\AdProduct' => __DIR__ .'/AdProduct.php',
        'Jp\YahooApis\YDN\V201911\AccountAdProduct\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\AccountAdProduct\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_b77e998276617675973503f8c584e8ee');

// Do nothing. The rest is just leftovers from the code generation.
{
}
