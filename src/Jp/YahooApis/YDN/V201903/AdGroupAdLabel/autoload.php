<?php


 function autoload_8189bd64f477e13856413ec641d097ea($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\AdGroupAdLabel\AdGroupAdLabelService' => __DIR__ .'/AdGroupAdLabelService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAdLabel\AdGroupAdLabel' => __DIR__ .'/AdGroupAdLabel.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAdLabel\AdGroupAdLabelValues' => __DIR__ .'/AdGroupAdLabelValues.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAdLabel\AdGroupAdLabelOperation' => __DIR__ .'/AdGroupAdLabelOperation.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAdLabel\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAdLabel\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAdLabel\AdGroupAdLabelReturnValue' => __DIR__ .'/AdGroupAdLabelReturnValue.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAdLabel\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\AdGroupAdLabel\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_8189bd64f477e13856413ec641d097ea');

// Do nothing. The rest is just leftovers from the code generation.
{
}
