<?php


 function autoload_93b37daff602dfb3ee10ce3a6c3dac94($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\Video\VideoService' => __DIR__ .'/VideoService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\Video\VideoSelector' => __DIR__ .'/VideoSelector.php',
        'Jp\YahooApis\YDN\V201907\Video\VideoPage' => __DIR__ .'/VideoPage.php',
        'Jp\YahooApis\YDN\V201907\Video\VideoValues' => __DIR__ .'/VideoValues.php',
        'Jp\YahooApis\YDN\V201907\Video\Video' => __DIR__ .'/Video.php',
        'Jp\YahooApis\YDN\V201907\Video\VideoSetting' => __DIR__ .'/VideoSetting.php',
        'Jp\YahooApis\YDN\V201907\Video\UploadVideo' => __DIR__ .'/UploadVideo.php',
        'Jp\YahooApis\YDN\V201907\Video\UploadUrlPage' => __DIR__ .'/UploadUrlPage.php',
        'Jp\YahooApis\YDN\V201907\Video\UploadUrlValues' => __DIR__ .'/UploadUrlValues.php',
        'Jp\YahooApis\YDN\V201907\Video\UploadUrlValue' => __DIR__ .'/UploadUrlValue.php',
        'Jp\YahooApis\YDN\V201907\Video\VideoOperation' => __DIR__ .'/VideoOperation.php',
        'Jp\YahooApis\YDN\V201907\Video\VideoReturnValue' => __DIR__ .'/VideoReturnValue.php',
        'Jp\YahooApis\YDN\V201907\Video\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\Video\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\Video\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201907\Video\ApprovalStatus' => __DIR__ .'/ApprovalStatus.php',
        'Jp\YahooApis\YDN\V201907\Video\VideoProcessStatus' => __DIR__ .'/VideoProcessStatus.php',
        'Jp\YahooApis\YDN\V201907\Video\VideoFileType' => __DIR__ .'/VideoFileType.php',
        'Jp\YahooApis\YDN\V201907\Video\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\Video\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201907\Video\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\Video\mutateResponse' => __DIR__ .'/mutateResponse.php',
        'Jp\YahooApis\YDN\V201907\Video\getUploadUrl' => __DIR__ .'/getUploadUrl.php',
        'Jp\YahooApis\YDN\V201907\Video\getUploadUrlResponse' => __DIR__ .'/getUploadUrlResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_93b37daff602dfb3ee10ce3a6c3dac94');

// Do nothing. The rest is just leftovers from the code generation.
{
}
