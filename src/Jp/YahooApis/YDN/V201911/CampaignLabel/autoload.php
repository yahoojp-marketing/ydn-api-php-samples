<?php


 function autoload_ee671adc92fd16c3722bc858e48ef9ba($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\CampaignLabel\CampaignLabelService' => __DIR__ .'/CampaignLabelService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\CampaignLabel\CampaignLabel' => __DIR__ .'/CampaignLabel.php',
        'Jp\YahooApis\YDN\V201911\CampaignLabel\CampaignLabelValues' => __DIR__ .'/CampaignLabelValues.php',
        'Jp\YahooApis\YDN\V201911\CampaignLabel\CampaignLabelOperation' => __DIR__ .'/CampaignLabelOperation.php',
        'Jp\YahooApis\YDN\V201911\CampaignLabel\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\CampaignLabel\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\CampaignLabel\CampaignLabelReturnValue' => __DIR__ .'/CampaignLabelReturnValue.php',
        'Jp\YahooApis\YDN\V201911\CampaignLabel\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\CampaignLabel\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ee671adc92fd16c3722bc858e48ef9ba');

// Do nothing. The rest is just leftovers from the code generation.
{
}
