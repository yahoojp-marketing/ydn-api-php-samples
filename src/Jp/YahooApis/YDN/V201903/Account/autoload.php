<?php


 function autoload_dbf3bea8d3c9671ff5841b6bea06233e($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\Account\AccountService' => __DIR__ .'/AccountService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Account\AccountSelector' => __DIR__ .'/AccountSelector.php',
        'Jp\YahooApis\YDN\V201903\Account\AccountPage' => __DIR__ .'/AccountPage.php',
        'Jp\YahooApis\YDN\V201903\Account\AccountOperation' => __DIR__ .'/AccountOperation.php',
        'Jp\YahooApis\YDN\V201903\Account\AccountReturnValue' => __DIR__ .'/AccountReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Account\Account' => __DIR__ .'/Account.php',
        'Jp\YahooApis\YDN\V201903\Account\AccountValues' => __DIR__ .'/AccountValues.php',
        'Jp\YahooApis\YDN\V201903\Account\AccountBudget' => __DIR__ .'/AccountBudget.php',
        'Jp\YahooApis\YDN\V201903\Account\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\Account\LimitChargeType' => __DIR__ .'/LimitChargeType.php',
        'Jp\YahooApis\YDN\V201903\Account\AccountType' => __DIR__ .'/AccountType.php',
        'Jp\YahooApis\YDN\V201903\Account\AccountStatus' => __DIR__ .'/AccountStatus.php',
        'Jp\YahooApis\YDN\V201903\Account\DeliveryStatus' => __DIR__ .'/DeliveryStatus.php',
        'Jp\YahooApis\YDN\V201903\Account\AutoTaggingEnabled' => __DIR__ .'/AutoTaggingEnabled.php',
        'Jp\YahooApis\YDN\V201903\Account\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\Account\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\Account\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\Account\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\Account\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_dbf3bea8d3c9671ff5841b6bea06233e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
