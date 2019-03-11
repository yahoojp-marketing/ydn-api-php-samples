<?php


 function autoload_bdfef954a73fe66878ef634b9a44d8b6($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\PlacementUrlListService' => __DIR__ .'/PlacementUrlListService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\PlacementUrlListSelector' => __DIR__ .'/PlacementUrlListSelector.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\PlacementUrlListPage' => __DIR__ .'/PlacementUrlListPage.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\PlacementUrlListReturnValue' => __DIR__ .'/PlacementUrlListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\PlacementUrlListValues' => __DIR__ .'/PlacementUrlListValues.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\PlacementUrlList' => __DIR__ .'/PlacementUrlList.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\UrlList' => __DIR__ .'/UrlList.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\UnknownDomainFlg' => __DIR__ .'/UnknownDomainFlg.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\UrlActiveFlg' => __DIR__ .'/UrlActiveFlg.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\PlacementUrlListOperation' => __DIR__ .'/PlacementUrlListOperation.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\PlacementUrlList\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_bdfef954a73fe66878ef634b9a44d8b6');

// Do nothing. The rest is just leftovers from the code generation.
{
}
