<?php


 function autoload_fe0cd9333591b59e4de6d036aa9c0aea($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\CampaignLabel\CampaignLabelService' => __DIR__ .'/CampaignLabelService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\CampaignLabel\CampaignLabel' => __DIR__ .'/CampaignLabel.php',
        'Jp\YahooApis\YDN\V201903\CampaignLabel\CampaignLabelValues' => __DIR__ .'/CampaignLabelValues.php',
        'Jp\YahooApis\YDN\V201903\CampaignLabel\CampaignLabelOperation' => __DIR__ .'/CampaignLabelOperation.php',
        'Jp\YahooApis\YDN\V201903\CampaignLabel\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\CampaignLabel\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\CampaignLabel\CampaignLabelReturnValue' => __DIR__ .'/CampaignLabelReturnValue.php',
        'Jp\YahooApis\YDN\V201903\CampaignLabel\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\CampaignLabel\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_fe0cd9333591b59e4de6d036aa9c0aea');

// Do nothing. The rest is just leftovers from the code generation.
{
}
