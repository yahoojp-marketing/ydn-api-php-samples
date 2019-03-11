<?php


 function autoload_40ce4cade31f3c170abc8ff5924570fa($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\RetargetingTag\RetargetingTagService' => __DIR__ .'/RetargetingTagService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\RetargetingTagOperation' => __DIR__ .'/RetargetingTagOperation.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\RetargetingTagReturnValue' => __DIR__ .'/RetargetingTagReturnValue.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\RetargetingTagSelector' => __DIR__ .'/RetargetingTagSelector.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\RetargetingTagApprovalStatus' => __DIR__ .'/RetargetingTagApprovalStatus.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\RetargetingTag' => __DIR__ .'/RetargetingTag.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\RetargetingTagPage' => __DIR__ .'/RetargetingTagPage.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\RetargetingTagValues' => __DIR__ .'/RetargetingTagValues.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\mutateResponse' => __DIR__ .'/mutateResponse.php',
        'Jp\YahooApis\YDN\V201903\RetargetingTag\Operator' => __DIR__ .'/Operator.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_40ce4cade31f3c170abc8ff5924570fa');

// Do nothing. The rest is just leftovers from the code generation.
{
}
