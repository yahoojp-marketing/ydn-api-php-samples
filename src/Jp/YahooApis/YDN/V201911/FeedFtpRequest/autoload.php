<?php


 function autoload_ecfc2381d7e792dc326dd36328ad1772($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\FeedFtpRequest\FeedFtpRequestService' => __DIR__ .'/FeedFtpRequestService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\FeedFtpRequest\FeedFtpRequest' => __DIR__ .'/FeedFtpRequest.php',
        'Jp\YahooApis\YDN\V201911\FeedFtpRequest\FeedFtpRequestValues' => __DIR__ .'/FeedFtpRequestValues.php',
        'Jp\YahooApis\YDN\V201911\FeedFtpRequest\FeedFtpRequestOperation' => __DIR__ .'/FeedFtpRequestOperation.php',
        'Jp\YahooApis\YDN\V201911\FeedFtpRequest\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\FeedFtpRequest\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\FeedFtpRequest\FeedFtpRequestReturnValue' => __DIR__ .'/FeedFtpRequestReturnValue.php',
        'Jp\YahooApis\YDN\V201911\FeedFtpRequest\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\FeedFtpRequest\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ecfc2381d7e792dc326dd36328ad1772');

// Do nothing. The rest is just leftovers from the code generation.
{
}
