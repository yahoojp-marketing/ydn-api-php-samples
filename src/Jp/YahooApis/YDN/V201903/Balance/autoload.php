<?php


 function autoload_fa4642edcaa05700c03409101917599f($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\Balance\BalanceService' => __DIR__ .'/BalanceService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Balance\BalanceSelector' => __DIR__ .'/BalanceSelector.php',
        'Jp\YahooApis\YDN\V201903\Balance\BalancePage' => __DIR__ .'/BalancePage.php',
        'Jp\YahooApis\YDN\V201903\Balance\BalanceValues' => __DIR__ .'/BalanceValues.php',
        'Jp\YahooApis\YDN\V201903\Balance\Balance' => __DIR__ .'/Balance.php',
        'Jp\YahooApis\YDN\V201903\Balance\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\Balance\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_fa4642edcaa05700c03409101917599f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
