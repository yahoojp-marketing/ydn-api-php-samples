<?php


 function autoload_a5fd9881eefaeb20561c032d8d2747d3($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\Media\MediaService' => __DIR__ .'/MediaService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Media\MediaSelector' => __DIR__ .'/MediaSelector.php',
        'Jp\YahooApis\YDN\V201903\Media\MediaPage' => __DIR__ .'/MediaPage.php',
        'Jp\YahooApis\YDN\V201903\Media\MediaValues' => __DIR__ .'/MediaValues.php',
        'Jp\YahooApis\YDN\V201903\Media\MediaRecord' => __DIR__ .'/MediaRecord.php',
        'Jp\YahooApis\YDN\V201903\Media\Media' => __DIR__ .'/Media.php',
        'Jp\YahooApis\YDN\V201903\Media\ImageMedia' => __DIR__ .'/ImageMedia.php',
        'Jp\YahooApis\YDN\V201903\Media\LogoFlg' => __DIR__ .'/LogoFlg.php',
        'Jp\YahooApis\YDN\V201903\Media\ThumbnailFlg' => __DIR__ .'/ThumbnailFlg.php',
        'Jp\YahooApis\YDN\V201903\Media\UserStatus' => __DIR__ .'/UserStatus.php',
        'Jp\YahooApis\YDN\V201903\Media\MediaFileType' => __DIR__ .'/MediaFileType.php',
        'Jp\YahooApis\YDN\V201903\Media\MediaType' => __DIR__ .'/MediaType.php',
        'Jp\YahooApis\YDN\V201903\Media\MediaApprovalStatus' => __DIR__ .'/MediaApprovalStatus.php',
        'Jp\YahooApis\YDN\V201903\Media\MediaOperation' => __DIR__ .'/MediaOperation.php',
        'Jp\YahooApis\YDN\V201903\Media\MediaReturnValue' => __DIR__ .'/MediaReturnValue.php',
        'Jp\YahooApis\YDN\V201903\Media\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\Media\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\Media\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\Media\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\Media\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\Media\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a5fd9881eefaeb20561c032d8d2747d3');

// Do nothing. The rest is just leftovers from the code generation.
{
}
