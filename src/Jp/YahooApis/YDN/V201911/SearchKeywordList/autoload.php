<?php


 function autoload_f1ed2dfaf1876dd17124cee73d133176($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordListService' => __DIR__ .'/SearchKeywordListService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordListSelector' => __DIR__ .'/SearchKeywordListSelector.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordListPage' => __DIR__ .'/SearchKeywordListPage.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordListReturnValue' => __DIR__ .'/SearchKeywordListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordListValues' => __DIR__ .'/SearchKeywordListValues.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordList' => __DIR__ .'/SearchKeywordList.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeyword' => __DIR__ .'/SearchKeyword.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\SearchKeywordListOperation' => __DIR__ .'/SearchKeywordListOperation.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\DeliveryStatus' => __DIR__ .'/DeliveryStatus.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\KeywordRecency' => __DIR__ .'/KeywordRecency.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\KeywordFrequency' => __DIR__ .'/KeywordFrequency.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordList\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f1ed2dfaf1876dd17124cee73d133176');

// Do nothing. The rest is just leftovers from the code generation.
{
}
