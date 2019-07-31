<?php


 function autoload_89ae4daee2dc7031f12b8a343b841169($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaService' => __DIR__ .'/SearchKeywordIdeaService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaSelector' => __DIR__ .'/SearchKeywordIdeaSelector.php',
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaPage' => __DIR__ .'/SearchKeywordIdeaPage.php',
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdeaValues' => __DIR__ .'/SearchKeywordIdeaValues.php',
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SearchKeywordIdea' => __DIR__ .'/SearchKeywordIdea.php',
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\KeywordRecency' => __DIR__ .'/KeywordRecency.php',
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\KeywordFrequency' => __DIR__ .'/KeywordFrequency.php',
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SortField' => __DIR__ .'/SortField.php',
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\SortType' => __DIR__ .'/SortType.php',
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\MatchType' => __DIR__ .'/MatchType.php',
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\SearchKeywordIdea\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_89ae4daee2dc7031f12b8a343b841169');

// Do nothing. The rest is just leftovers from the code generation.
{
}
