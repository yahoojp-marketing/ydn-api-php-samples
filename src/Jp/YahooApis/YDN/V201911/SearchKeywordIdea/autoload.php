<?php


 function autoload_b4f11d8e46f200e16b6539e18a4d336a($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\SearchKeywordIdeaService' => __DIR__ .'/SearchKeywordIdeaService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\SearchKeywordIdeaSelector' => __DIR__ .'/SearchKeywordIdeaSelector.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\SearchKeywordIdeaPage' => __DIR__ .'/SearchKeywordIdeaPage.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\SearchKeywordIdeaValues' => __DIR__ .'/SearchKeywordIdeaValues.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\SearchKeywordIdea' => __DIR__ .'/SearchKeywordIdea.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\KeywordRecency' => __DIR__ .'/KeywordRecency.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\KeywordFrequency' => __DIR__ .'/KeywordFrequency.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\SortField' => __DIR__ .'/SortField.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\SortType' => __DIR__ .'/SortType.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\MatchType' => __DIR__ .'/MatchType.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\SearchKeywordIdea\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_b4f11d8e46f200e16b6539e18a4d336a');

// Do nothing. The rest is just leftovers from the code generation.
{
}
