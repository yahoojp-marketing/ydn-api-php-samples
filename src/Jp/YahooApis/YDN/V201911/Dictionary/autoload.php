<?php


 function autoload_1ced832e54144ec434d28c5e3bc828b8($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201911\Dictionary\DictionaryService' => __DIR__ .'/DictionaryService.php',
        'Jp\YahooApis\YDN\V201911\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201911\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201911\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201911\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201911\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201911\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201911\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201911\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\DisapprovalReasonSelector' => __DIR__ .'/DisapprovalReasonSelector.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\DisapprovalReasonPage' => __DIR__ .'/DisapprovalReasonPage.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\DisapprovalReasonValues' => __DIR__ .'/DisapprovalReasonValues.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\DisapprovalReason' => __DIR__ .'/DisapprovalReason.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\GeographicLocationSelector' => __DIR__ .'/GeographicLocationSelector.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\GeographicLocationPage' => __DIR__ .'/GeographicLocationPage.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\GeographicLocationValues' => __DIR__ .'/GeographicLocationValues.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\GeographicLocation' => __DIR__ .'/GeographicLocation.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\GeographicLocationType' => __DIR__ .'/GeographicLocationType.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\CategorySelector' => __DIR__ .'/CategorySelector.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\CategoryPage' => __DIR__ .'/CategoryPage.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\CategoryValues' => __DIR__ .'/CategoryValues.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\Category' => __DIR__ .'/Category.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\CategoryChildValues' => __DIR__ .'/CategoryChildValues.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategoryPage' => __DIR__ .'/AudienceCategoryPage.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategoryValues' => __DIR__ .'/AudienceCategoryValues.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategory' => __DIR__ .'/AudienceCategory.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\AudienceCategoryType' => __DIR__ .'/AudienceCategoryType.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\DictionaryLang' => __DIR__ .'/DictionaryLang.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getDisapprovalReason' => __DIR__ .'/getDisapprovalReason.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getDisapprovalReasonResponse' => __DIR__ .'/getDisapprovalReasonResponse.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getGeographicLocation' => __DIR__ .'/getGeographicLocation.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getGeographicLocationResponse' => __DIR__ .'/getGeographicLocationResponse.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getInterestCategory' => __DIR__ .'/getInterestCategory.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getInterestCategoryResponse' => __DIR__ .'/getInterestCategoryResponse.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getSiteCategory' => __DIR__ .'/getSiteCategory.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getSiteCategoryResponse' => __DIR__ .'/getSiteCategoryResponse.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getAudienceCategory' => __DIR__ .'/getAudienceCategory.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getAudienceCategoryResponse' => __DIR__ .'/getAudienceCategoryResponse.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getOsVersion' => __DIR__ .'/getOsVersion.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getOsVersionResponse' => __DIR__ .'/getOsVersionResponse.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\OsVersionSelector' => __DIR__ .'/OsVersionSelector.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\OsVersionPage' => __DIR__ .'/OsVersionPage.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\OsVersionValues' => __DIR__ .'/OsVersionValues.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\OsVersion' => __DIR__ .'/OsVersion.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\DeviceOsType' => __DIR__ .'/DeviceOsType.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getMediaAdFormat' => __DIR__ .'/getMediaAdFormat.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getMediaAdFormatResponse' => __DIR__ .'/getMediaAdFormatResponse.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\MediaAdFormatPage' => __DIR__ .'/MediaAdFormatPage.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\MediaAdFormatValues' => __DIR__ .'/MediaAdFormatValues.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\MediaAdFormat' => __DIR__ .'/MediaAdFormat.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getThirdPartyTrackingDomain' => __DIR__ .'/getThirdPartyTrackingDomain.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getThirdPartyTrackingDomainResponse' => __DIR__ .'/getThirdPartyTrackingDomainResponse.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\ThirdPartyTrackingDomainPage' => __DIR__ .'/ThirdPartyTrackingDomainPage.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\ThirdPartyTrackingDomainValues' => __DIR__ .'/ThirdPartyTrackingDomainValues.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\ThirdPartyTrackingDomain' => __DIR__ .'/ThirdPartyTrackingDomain.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getFeedItemGoogleProductCategory' => __DIR__ .'/getFeedItemGoogleProductCategory.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\getFeedItemGoogleProductCategoryResponse' => __DIR__ .'/getFeedItemGoogleProductCategoryResponse.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategorySelector' => __DIR__ .'/FeedItemGoogleProductCategorySelector.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategoryPage' => __DIR__ .'/FeedItemGoogleProductCategoryPage.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategoryValues' => __DIR__ .'/FeedItemGoogleProductCategoryValues.php',
        'Jp\YahooApis\YDN\V201911\Dictionary\FeedItemGoogleProductCategory' => __DIR__ .'/FeedItemGoogleProductCategory.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_1ced832e54144ec434d28c5e3bc828b8');

// Do nothing. The rest is just leftovers from the code generation.
{
}
