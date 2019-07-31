<?php


 function autoload_6a90195bf146d7cae7dd1d7ae3f92709($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\Dictionary\DictionaryService' => __DIR__ .'/DictionaryService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\ColorSetSelector' => __DIR__ .'/ColorSetSelector.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\ColorSetPage' => __DIR__ .'/ColorSetPage.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\ColorSetValues' => __DIR__ .'/ColorSetValues.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\ColorSet' => __DIR__ .'/ColorSet.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\DisapprovalReasonSelector' => __DIR__ .'/DisapprovalReasonSelector.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\DisapprovalReasonPage' => __DIR__ .'/DisapprovalReasonPage.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\DisapprovalReasonValues' => __DIR__ .'/DisapprovalReasonValues.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\DisapprovalReason' => __DIR__ .'/DisapprovalReason.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\GeographicLocationSelector' => __DIR__ .'/GeographicLocationSelector.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\GeographicLocationPage' => __DIR__ .'/GeographicLocationPage.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\GeographicLocationValues' => __DIR__ .'/GeographicLocationValues.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\GeographicLocation' => __DIR__ .'/GeographicLocation.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\CategorySelector' => __DIR__ .'/CategorySelector.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\CategoryPage' => __DIR__ .'/CategoryPage.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\CategoryValues' => __DIR__ .'/CategoryValues.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\Category' => __DIR__ .'/Category.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\CategoryChildValues' => __DIR__ .'/CategoryChildValues.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\DictionaryLang' => __DIR__ .'/DictionaryLang.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getDisapprovalReason' => __DIR__ .'/getDisapprovalReason.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getDisapprovalReasonResponse' => __DIR__ .'/getDisapprovalReasonResponse.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getGeographicLocation' => __DIR__ .'/getGeographicLocation.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getGeographicLocationResponse' => __DIR__ .'/getGeographicLocationResponse.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getInterestCategory' => __DIR__ .'/getInterestCategory.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getInterestCategoryResponse' => __DIR__ .'/getInterestCategoryResponse.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getSiteCategory' => __DIR__ .'/getSiteCategory.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getSiteCategoryResponse' => __DIR__ .'/getSiteCategoryResponse.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getColorSet' => __DIR__ .'/getColorSet.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getColorSetResponse' => __DIR__ .'/getColorSetResponse.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getOsVersion' => __DIR__ .'/getOsVersion.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getOsVersionResponse' => __DIR__ .'/getOsVersionResponse.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\OsVersionSelector' => __DIR__ .'/OsVersionSelector.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\OsVersionPage' => __DIR__ .'/OsVersionPage.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\OsVersionValues' => __DIR__ .'/OsVersionValues.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\OsVersion' => __DIR__ .'/OsVersion.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\DeviceOsType' => __DIR__ .'/DeviceOsType.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getMediaAdFormat' => __DIR__ .'/getMediaAdFormat.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\getMediaAdFormatResponse' => __DIR__ .'/getMediaAdFormatResponse.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormatPage' => __DIR__ .'/MediaAdFormatPage.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormatValues' => __DIR__ .'/MediaAdFormatValues.php',
        'Jp\YahooApis\YDN\V201907\Dictionary\MediaAdFormat' => __DIR__ .'/MediaAdFormat.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_6a90195bf146d7cae7dd1d7ae3f92709');

// Do nothing. The rest is just leftovers from the code generation.
{
}
