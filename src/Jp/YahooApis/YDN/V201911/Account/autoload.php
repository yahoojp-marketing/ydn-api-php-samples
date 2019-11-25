<?php


 function autoload_c3380da87b4fd8617249962cb8274296($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\Account\AccountService' => __DIR__ .'/AccountService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\Account\AccountSelector' => __DIR__ .'/AccountSelector.php',
        'Jp\YahooApis\YDN\V201911\Account\AccountPage' => __DIR__ .'/AccountPage.php',
        'Jp\YahooApis\YDN\V201911\Account\AccountOperation' => __DIR__ .'/AccountOperation.php',
        'Jp\YahooApis\YDN\V201911\Account\AccountReturnValue' => __DIR__ .'/AccountReturnValue.php',
        'Jp\YahooApis\YDN\V201911\Account\Account' => __DIR__ .'/Account.php',
        'Jp\YahooApis\YDN\V201911\Account\AccountValues' => __DIR__ .'/AccountValues.php',
        'Jp\YahooApis\YDN\V201911\Account\AccountBudget' => __DIR__ .'/AccountBudget.php',
        'Jp\YahooApis\YDN\V201911\Account\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\Account\LimitChargeType' => __DIR__ .'/LimitChargeType.php',
        'Jp\YahooApis\YDN\V201911\Account\AccountType' => __DIR__ .'/AccountType.php',
        'Jp\YahooApis\YDN\V201911\Account\AccountStatus' => __DIR__ .'/AccountStatus.php',
        'Jp\YahooApis\YDN\V201911\Account\DeliveryStatus' => __DIR__ .'/DeliveryStatus.php',
        'Jp\YahooApis\YDN\V201911\Account\AutoTaggingEnabled' => __DIR__ .'/AutoTaggingEnabled.php',
        'Jp\YahooApis\YDN\V201911\Account\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\Account\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\Account\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\Account\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\Account\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_c3380da87b4fd8617249962cb8274296');

// Do nothing. The rest is just leftovers from the code generation.
{
}
