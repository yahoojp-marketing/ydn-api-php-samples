<?php


 function autoload_3a9344cca925ea03ac32669b373067e5($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderService' => __DIR__ .'/FeedHolderService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderSelector' => __DIR__ .'/FeedHolderSelector.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderPage' => __DIR__ .'/FeedHolderPage.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderRecord' => __DIR__ .'/FeedHolderRecord.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderOperation' => __DIR__ .'/FeedHolderOperation.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderReturnValue' => __DIR__ .'/FeedHolderReturnValue.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\FeedHolderValues' => __DIR__ .'/FeedHolderValues.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\FeedHolder\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_3a9344cca925ea03ac32669b373067e5');

// Do nothing. The rest is just leftovers from the code generation.
{
}
