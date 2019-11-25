<?php


 function autoload_3c078552ac64642dc4634657c15066b8($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\Balance\BalanceService' => __DIR__ .'/BalanceService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\Balance\BalanceSelector' => __DIR__ .'/BalanceSelector.php',
        'Jp\YahooApis\YDN\V201911\Balance\BalancePage' => __DIR__ .'/BalancePage.php',
        'Jp\YahooApis\YDN\V201911\Balance\BalanceValues' => __DIR__ .'/BalanceValues.php',
        'Jp\YahooApis\YDN\V201911\Balance\Balance' => __DIR__ .'/Balance.php',
        'Jp\YahooApis\YDN\V201911\Balance\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\Balance\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_3c078552ac64642dc4634657c15066b8');

// Do nothing. The rest is just leftovers from the code generation.
{
}
