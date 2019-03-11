<?php


 function autoload_80ea34be64ea0fec1f2720d567d43ca7($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\SearchKeywordIdeaService' => __DIR__ .'/SearchKeywordIdeaService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\SearchKeywordIdeaSelector' => __DIR__ .'/SearchKeywordIdeaSelector.php',
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\SearchKeywordIdeaPage' => __DIR__ .'/SearchKeywordIdeaPage.php',
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\SearchKeywordIdeaValues' => __DIR__ .'/SearchKeywordIdeaValues.php',
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\SearchKeywordIdea' => __DIR__ .'/SearchKeywordIdea.php',
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\KeywordRecency' => __DIR__ .'/KeywordRecency.php',
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\KeywordFrequency' => __DIR__ .'/KeywordFrequency.php',
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\SortField' => __DIR__ .'/SortField.php',
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\SortType' => __DIR__ .'/SortType.php',
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\MatchType' => __DIR__ .'/MatchType.php',
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\SearchKeywordIdea\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_80ea34be64ea0fec1f2720d567d43ca7');

// Do nothing. The rest is just leftovers from the code generation.
{
}
