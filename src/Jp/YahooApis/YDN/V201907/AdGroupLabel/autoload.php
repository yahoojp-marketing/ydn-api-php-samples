<?php


 function autoload_beacafcb2c5d0ef042dad5d8f946f170($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\AdGroupLabel\AdGroupLabelService' => __DIR__ .'/AdGroupLabelService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\AdGroupLabel\AdGroupLabel' => __DIR__ .'/AdGroupLabel.php',
        'Jp\YahooApis\YDN\V201907\AdGroupLabel\AdGroupLabelValues' => __DIR__ .'/AdGroupLabelValues.php',
        'Jp\YahooApis\YDN\V201907\AdGroupLabel\AdGroupLabelOperation' => __DIR__ .'/AdGroupLabelOperation.php',
        'Jp\YahooApis\YDN\V201907\AdGroupLabel\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\AdGroupLabel\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\AdGroupLabel\AdGroupLabelReturnValue' => __DIR__ .'/AdGroupLabelReturnValue.php',
        'Jp\YahooApis\YDN\V201907\AdGroupLabel\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\AdGroupLabel\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_beacafcb2c5d0ef042dad5d8f946f170');

// Do nothing. The rest is just leftovers from the code generation.
{
}
