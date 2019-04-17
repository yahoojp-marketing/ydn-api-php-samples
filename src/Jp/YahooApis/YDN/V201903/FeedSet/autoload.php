<?php


 function autoload_6e3708fea8864ef1d677b514062d9b57($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\FeedSet\FeedSetService' => __DIR__ .'/FeedSetService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\FeedSetSelector' => __DIR__ .'/FeedSetSelector.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\FeedSet' => __DIR__ .'/FeedSet.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\ConditionSet' => __DIR__ .'/ConditionSet.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\Condition' => __DIR__ .'/Condition.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\FeedSetPage' => __DIR__ .'/FeedSetPage.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\FeedSetValues' => __DIR__ .'/FeedSetValues.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\FeedSetOperation' => __DIR__ .'/FeedSetOperation.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\FeedSetReturnValue' => __DIR__ .'/FeedSetReturnValue.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\ConditionType' => __DIR__ .'/ConditionType.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\CompareOperator' => __DIR__ .'/CompareOperator.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\FeedSet\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_6e3708fea8864ef1d677b514062d9b57');

// Do nothing. The rest is just leftovers from the code generation.
{
}
