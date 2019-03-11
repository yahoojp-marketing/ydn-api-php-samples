<?php


 function autoload_27e3ee49155288259c6800e1c1c4c5d1($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\PlacementUrlIdea\PlacementUrlIdeaService' => __DIR__ .'/PlacementUrlIdeaService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlIdea\PlacementUrlIdeaSelector' => __DIR__ .'/PlacementUrlIdeaSelector.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlIdea\AdFormatConditions' => __DIR__ .'/AdFormatConditions.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlIdea\PlacementUrlIdeaPage' => __DIR__ .'/PlacementUrlIdeaPage.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlIdea\PlacementUrlIdeaValues' => __DIR__ .'/PlacementUrlIdeaValues.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlIdea\PlacementUrlIdea' => __DIR__ .'/PlacementUrlIdea.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlIdea\AdFormat' => __DIR__ .'/AdFormat.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlIdea\Type' => __DIR__ .'/Type.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlIdea\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlIdea\getResponse' => __DIR__ .'/getResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_27e3ee49155288259c6800e1c1c4c5d1');

// Do nothing. The rest is just leftovers from the code generation.
{
}
