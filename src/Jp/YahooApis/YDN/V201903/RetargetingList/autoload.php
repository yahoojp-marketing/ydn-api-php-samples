<?php


 function autoload_0c37a74eb97d7ed677bfbb716bc4b7ac($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingListService' => __DIR__ .'/RetargetingListService.php',
        'Jp\YahooApis\YDN\V201903\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201903\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201903\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201903\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201903\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201903\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201903\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201903\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingListSelector' => __DIR__ .'/RetargetingListSelector.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\TargetListType' => __DIR__ .'/TargetListType.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingList' => __DIR__ .'/RetargetingList.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingTargetList' => __DIR__ .'/RetargetingTargetList.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\RuleTargetList' => __DIR__ .'/RuleTargetList.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\Rule' => __DIR__ .'/Rule.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\RuleCondition' => __DIR__ .'/RuleCondition.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\CombinationTargetList' => __DIR__ .'/CombinationTargetList.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\Combination' => __DIR__ .'/Combination.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\TargetListData' => __DIR__ .'/TargetListData.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\SimilarityTargetList' => __DIR__ .'/SimilarityTargetList.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\TargetListSizeReaches' => __DIR__ .'/TargetListSizeReaches.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\CustomAudienceTargetList' => __DIR__ .'/CustomAudienceTargetList.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\TargetListSize' => __DIR__ .'/TargetListSize.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\DeliveryStatus' => __DIR__ .'/DeliveryStatus.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\IsPreset' => __DIR__ .'/IsPreset.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\IsOpen' => __DIR__ .'/IsOpen.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\RuleType' => __DIR__ .'/RuleType.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\CompareOperator' => __DIR__ .'/CompareOperator.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\LogicalOperator' => __DIR__ .'/LogicalOperator.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingListPage' => __DIR__ .'/RetargetingListPage.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingListValues' => __DIR__ .'/RetargetingListValues.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingListOperation' => __DIR__ .'/RetargetingListOperation.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\RetargetingListReturnValue' => __DIR__ .'/RetargetingListReturnValue.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201903\RetargetingList\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_0c37a74eb97d7ed677bfbb716bc4b7ac');

// Do nothing. The rest is just leftovers from the code generation.
{
}
