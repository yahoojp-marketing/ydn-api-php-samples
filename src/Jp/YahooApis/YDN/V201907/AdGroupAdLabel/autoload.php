<?php


 function autoload_f14653bf5500778620789fafadf2d5a1($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\AdGroupAdLabel\AdGroupAdLabelService' => __DIR__ .'/AdGroupAdLabelService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAdLabel\AdGroupAdLabel' => __DIR__ .'/AdGroupAdLabel.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAdLabel\AdGroupAdLabelValues' => __DIR__ .'/AdGroupAdLabelValues.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAdLabel\AdGroupAdLabelOperation' => __DIR__ .'/AdGroupAdLabelOperation.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAdLabel\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAdLabel\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAdLabel\AdGroupAdLabelReturnValue' => __DIR__ .'/AdGroupAdLabelReturnValue.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAdLabel\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\AdGroupAdLabel\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f14653bf5500778620789fafadf2d5a1');

// Do nothing. The rest is just leftovers from the code generation.
{
}
