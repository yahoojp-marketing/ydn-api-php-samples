<?php


 function autoload_368750d657be777a8f041428e00c4097($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTagService' => __DIR__ .'/RetargetingTagService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTagOperation' => __DIR__ .'/RetargetingTagOperation.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTagReturnValue' => __DIR__ .'/RetargetingTagReturnValue.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTagSelector' => __DIR__ .'/RetargetingTagSelector.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTagApprovalStatus' => __DIR__ .'/RetargetingTagApprovalStatus.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTag' => __DIR__ .'/RetargetingTag.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTagPage' => __DIR__ .'/RetargetingTagPage.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\RetargetingTagValues' => __DIR__ .'/RetargetingTagValues.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\mutateResponse' => __DIR__ .'/mutateResponse.php',
        'Jp\YahooApis\YDN\V201907\RetargetingTag\Operator' => __DIR__ .'/Operator.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_368750d657be777a8f041428e00c4097');

// Do nothing. The rest is just leftovers from the code generation.
{
}
