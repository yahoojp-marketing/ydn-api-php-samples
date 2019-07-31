<?php


 function autoload_73209d074b69b8a698be588360a7335f($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\FeedFtpRequest\FeedFtpRequestService' => __DIR__ .'/FeedFtpRequestService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\FeedFtpRequest\FeedFtpRequest' => __DIR__ .'/FeedFtpRequest.php',
        'Jp\YahooApis\YDN\V201907\FeedFtpRequest\FeedFtpRequestValues' => __DIR__ .'/FeedFtpRequestValues.php',
        'Jp\YahooApis\YDN\V201907\FeedFtpRequest\FeedFtpRequestOperation' => __DIR__ .'/FeedFtpRequestOperation.php',
        'Jp\YahooApis\YDN\V201907\FeedFtpRequest\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\FeedFtpRequest\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\FeedFtpRequest\FeedFtpRequestReturnValue' => __DIR__ .'/FeedFtpRequestReturnValue.php',
        'Jp\YahooApis\YDN\V201907\FeedFtpRequest\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\FeedFtpRequest\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_73209d074b69b8a698be588360a7335f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
