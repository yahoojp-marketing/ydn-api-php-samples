<?php


 function autoload_27c3b50c539cc1c6c9c1d69a667ffcda($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\Balance\BalanceService' => __DIR__ .'/BalanceService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\Balance\BalanceSelector' => __DIR__ .'/BalanceSelector.php',
        'Jp\YahooApis\YDN\V201907\Balance\BalancePage' => __DIR__ .'/BalancePage.php',
        'Jp\YahooApis\YDN\V201907\Balance\BalanceValues' => __DIR__ .'/BalanceValues.php',
        'Jp\YahooApis\YDN\V201907\Balance\Balance' => __DIR__ .'/Balance.php',
        'Jp\YahooApis\YDN\V201907\Balance\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\Balance\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_27c3b50c539cc1c6c9c1d69a667ffcda');

// Do nothing. The rest is just leftovers from the code generation.
{
}
