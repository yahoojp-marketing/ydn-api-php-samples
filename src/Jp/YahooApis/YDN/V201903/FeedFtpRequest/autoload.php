<?php


 function autoload_5c8025de0a7b168c3fa8568d880b2d6d($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\FeedFtpRequest\FeedFtpRequestService' => __DIR__ .'/FeedFtpRequestService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\FeedFtpRequest\FeedFtpRequest' => __DIR__ .'/FeedFtpRequest.php',
        'Jp\YahooApis\YDN\V201903\FeedFtpRequest\FeedFtpRequestValues' => __DIR__ .'/FeedFtpRequestValues.php',
        'Jp\YahooApis\YDN\V201903\FeedFtpRequest\FeedFtpRequestOperation' => __DIR__ .'/FeedFtpRequestOperation.php',
        'Jp\YahooApis\YDN\V201903\FeedFtpRequest\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\FeedFtpRequest\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\FeedFtpRequest\FeedFtpRequestReturnValue' => __DIR__ .'/FeedFtpRequestReturnValue.php',
        'Jp\YahooApis\YDN\V201903\FeedFtpRequest\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\FeedFtpRequest\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5c8025de0a7b168c3fa8568d880b2d6d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
