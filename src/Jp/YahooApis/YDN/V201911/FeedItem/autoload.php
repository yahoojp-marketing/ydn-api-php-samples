<?php


 function autoload_d74a37002d91b1d477b3e1459abdcfbd($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\FeedItem\FeedItemService' => __DIR__ .'/FeedItemService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\FeedItem\FeedItemValues' => __DIR__ .'/FeedItemValues.php',
        'Jp\YahooApis\YDN\V201911\FeedItem\FeedItem' => __DIR__ .'/FeedItem.php',
        'Jp\YahooApis\YDN\V201911\FeedItem\isRemoveFlg' => __DIR__ .'/isRemoveFlg.php',
        'Jp\YahooApis\YDN\V201911\FeedItem\Availability' => __DIR__ .'/Availability.php',
        'Jp\YahooApis\YDN\V201911\FeedItem\FeedItemOperation' => __DIR__ .'/FeedItemOperation.php',
        'Jp\YahooApis\YDN\V201911\FeedItem\FeedItemReturnValue' => __DIR__ .'/FeedItemReturnValue.php',
        'Jp\YahooApis\YDN\V201911\FeedItem\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\FeedItem\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\FeedItem\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\FeedItem\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d74a37002d91b1d477b3e1459abdcfbd');

// Do nothing. The rest is just leftovers from the code generation.
{
}
