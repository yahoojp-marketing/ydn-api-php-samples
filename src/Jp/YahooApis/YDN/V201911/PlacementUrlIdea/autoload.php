<?php


 function autoload_23948d04f828c0e9f01fd4f9c5322d2e($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\PlacementUrlIdea\PlacementUrlIdeaService' => __DIR__ .'/PlacementUrlIdeaService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlIdea\PlacementUrlIdeaSelector' => __DIR__ .'/PlacementUrlIdeaSelector.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlIdea\AdFormatConditions' => __DIR__ .'/AdFormatConditions.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlIdea\PlacementUrlIdeaPage' => __DIR__ .'/PlacementUrlIdeaPage.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlIdea\PlacementUrlIdeaValues' => __DIR__ .'/PlacementUrlIdeaValues.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlIdea\PlacementUrlIdea' => __DIR__ .'/PlacementUrlIdea.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlIdea\AdFormat' => __DIR__ .'/AdFormat.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlIdea\Type' => __DIR__ .'/Type.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlIdea\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlIdea\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_23948d04f828c0e9f01fd4f9c5322d2e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
