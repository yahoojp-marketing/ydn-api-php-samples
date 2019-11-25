<?php


 function autoload_cdd470aa238e2fef6127a8722a364297($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\Video\VideoService' => __DIR__ .'/VideoService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\Video\VideoSelector' => __DIR__ .'/VideoSelector.php',
        'Jp\YahooApis\YDN\V201911\Video\VideoPage' => __DIR__ .'/VideoPage.php',
        'Jp\YahooApis\YDN\V201911\Video\VideoValues' => __DIR__ .'/VideoValues.php',
        'Jp\YahooApis\YDN\V201911\Video\Video' => __DIR__ .'/Video.php',
        'Jp\YahooApis\YDN\V201911\Video\VideoSetting' => __DIR__ .'/VideoSetting.php',
        'Jp\YahooApis\YDN\V201911\Video\UploadVideo' => __DIR__ .'/UploadVideo.php',
        'Jp\YahooApis\YDN\V201911\Video\UploadUrlPage' => __DIR__ .'/UploadUrlPage.php',
        'Jp\YahooApis\YDN\V201911\Video\UploadUrlValues' => __DIR__ .'/UploadUrlValues.php',
        'Jp\YahooApis\YDN\V201911\Video\UploadUrlValue' => __DIR__ .'/UploadUrlValue.php',
        'Jp\YahooApis\YDN\V201911\Video\VideoOperation' => __DIR__ .'/VideoOperation.php',
        'Jp\YahooApis\YDN\V201911\Video\VideoReturnValue' => __DIR__ .'/VideoReturnValue.php',
        'Jp\YahooApis\YDN\V201911\Video\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201911\Video\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201911\Video\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201911\Video\ApprovalStatus' => __DIR__ .'/ApprovalStatus.php',
        'Jp\YahooApis\YDN\V201911\Video\VideoProcessStatus' => __DIR__ .'/VideoProcessStatus.php',
        'Jp\YahooApis\YDN\V201911\Video\VideoFileType' => __DIR__ .'/VideoFileType.php',
        'Jp\YahooApis\YDN\V201911\Video\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201911\Video\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201911\Video\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201911\Video\mutateResponse' => __DIR__ .'/mutateResponse.php',
        'Jp\YahooApis\YDN\V201911\Video\getUploadUrl' => __DIR__ .'/getUploadUrl.php',
        'Jp\YahooApis\YDN\V201911\Video\getUploadUrlResponse' => __DIR__ .'/getUploadUrlResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_cdd470aa238e2fef6127a8722a364297');

// Do nothing. The rest is just leftovers from the code generation.
{
}
