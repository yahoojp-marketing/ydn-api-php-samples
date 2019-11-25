<?php


 function autoload_17982878a0fe5fec1854530a16a0e510($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\FeedSet\FeedSetService' => __DIR__ .'/FeedSetService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\FeedSetSelector' => __DIR__ .'/FeedSetSelector.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\FeedSet' => __DIR__ .'/FeedSet.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\ConditionSet' => __DIR__ .'/ConditionSet.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\Condition' => __DIR__ .'/Condition.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\FeedSetPage' => __DIR__ .'/FeedSetPage.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\FeedSetValues' => __DIR__ .'/FeedSetValues.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\FeedSetOperation' => __DIR__ .'/FeedSetOperation.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\FeedSetReturnValue' => __DIR__ .'/FeedSetReturnValue.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\ConditionType' => __DIR__ .'/ConditionType.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\CompareOperator' => __DIR__ .'/CompareOperator.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\FeedSet\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_17982878a0fe5fec1854530a16a0e510');

// Do nothing. The rest is just leftovers from the code generation.
{
}
