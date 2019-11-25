<?php


 function autoload_b67d7be16997b6033f0df540e87ea294($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\RetargetingTag\RetargetingTagService' => __DIR__ .'/RetargetingTagService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\RetargetingTagOperation' => __DIR__ .'/RetargetingTagOperation.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\RetargetingTagReturnValue' => __DIR__ .'/RetargetingTagReturnValue.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\RetargetingTagSelector' => __DIR__ .'/RetargetingTagSelector.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\RetargetingTagApprovalStatus' => __DIR__ .'/RetargetingTagApprovalStatus.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\RetargetingTag' => __DIR__ .'/RetargetingTag.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\RetargetingTagPage' => __DIR__ .'/RetargetingTagPage.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\RetargetingTagValues' => __DIR__ .'/RetargetingTagValues.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\mutateResponse' => __DIR__ .'/mutateResponse.php',
        'Jp\YahooApis\YDN\V201911\RetargetingTag\Operator' => __DIR__ .'/Operator.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_b67d7be16997b6033f0df540e87ea294');

// Do nothing. The rest is just leftovers from the code generation.
{
}
