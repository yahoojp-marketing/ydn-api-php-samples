<?php


 function autoload_30c85a6251b9091d653aa9de3b1cb013($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\FeedSet\FeedSetService' => __DIR__ .'/FeedSetService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\FeedSetSelector' => __DIR__ .'/FeedSetSelector.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\FeedSet' => __DIR__ .'/FeedSet.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\ConditionSet' => __DIR__ .'/ConditionSet.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\Condition' => __DIR__ .'/Condition.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\FeedSetPage' => __DIR__ .'/FeedSetPage.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\FeedSetValues' => __DIR__ .'/FeedSetValues.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\FeedSetOperation' => __DIR__ .'/FeedSetOperation.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\FeedSetReturnValue' => __DIR__ .'/FeedSetReturnValue.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\ConditionType' => __DIR__ .'/ConditionType.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\CompareOperator' => __DIR__ .'/CompareOperator.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\FeedSet\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_30c85a6251b9091d653aa9de3b1cb013');

// Do nothing. The rest is just leftovers from the code generation.
{
}
