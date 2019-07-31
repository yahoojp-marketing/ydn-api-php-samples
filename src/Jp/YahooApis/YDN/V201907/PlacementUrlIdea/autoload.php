<?php


 function autoload_d32bd38be456230fa497a39d2e1e5b37($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdeaService' => __DIR__ .'/PlacementUrlIdeaService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdeaSelector' => __DIR__ .'/PlacementUrlIdeaSelector.php',
        'Jp\YahooApis\YDN\V201907\PlacementUrlIdea\AdFormatConditions' => __DIR__ .'/AdFormatConditions.php',
        'Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdeaPage' => __DIR__ .'/PlacementUrlIdeaPage.php',
        'Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdeaValues' => __DIR__ .'/PlacementUrlIdeaValues.php',
        'Jp\YahooApis\YDN\V201907\PlacementUrlIdea\PlacementUrlIdea' => __DIR__ .'/PlacementUrlIdea.php',
        'Jp\YahooApis\YDN\V201907\PlacementUrlIdea\AdFormat' => __DIR__ .'/AdFormat.php',
        'Jp\YahooApis\YDN\V201907\PlacementUrlIdea\Type' => __DIR__ .'/Type.php',
        'Jp\YahooApis\YDN\V201907\PlacementUrlIdea\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\PlacementUrlIdea\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d32bd38be456230fa497a39d2e1e5b37');

// Do nothing. The rest is just leftovers from the code generation.
{
}
