<?php


 function autoload_814d69f85b31aff37415288a4c5bda10($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlListService' => __DIR__ .'/PlacementUrlListService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlListSelector' => __DIR__ .'/PlacementUrlListSelector.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlListPage' => __DIR__ .'/PlacementUrlListPage.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlListReturnValue' => __DIR__ .'/PlacementUrlListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlListValues' => __DIR__ .'/PlacementUrlListValues.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlList' => __DIR__ .'/PlacementUrlList.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\UrlList' => __DIR__ .'/UrlList.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\UnknownDomainFlg' => __DIR__ .'/UnknownDomainFlg.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\UrlActiveFlg' => __DIR__ .'/UrlActiveFlg.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\PlacementUrlListOperation' => __DIR__ .'/PlacementUrlListOperation.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\PlacementUrlList\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_814d69f85b31aff37415288a4c5bda10');

// Do nothing. The rest is just leftovers from the code generation.
{
}
