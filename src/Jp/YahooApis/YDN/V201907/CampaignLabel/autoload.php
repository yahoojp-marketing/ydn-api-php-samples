<?php


 function autoload_fbb139cc945ef493b6d9793dc3a5fd3d($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\CampaignLabel\CampaignLabelService' => __DIR__ .'/CampaignLabelService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\CampaignLabel\CampaignLabel' => __DIR__ .'/CampaignLabel.php',
        'Jp\YahooApis\YDN\V201907\CampaignLabel\CampaignLabelValues' => __DIR__ .'/CampaignLabelValues.php',
        'Jp\YahooApis\YDN\V201907\CampaignLabel\CampaignLabelOperation' => __DIR__ .'/CampaignLabelOperation.php',
        'Jp\YahooApis\YDN\V201907\CampaignLabel\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\CampaignLabel\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\CampaignLabel\CampaignLabelReturnValue' => __DIR__ .'/CampaignLabelReturnValue.php',
        'Jp\YahooApis\YDN\V201907\CampaignLabel\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\CampaignLabel\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_fbb139cc945ef493b6d9793dc3a5fd3d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
