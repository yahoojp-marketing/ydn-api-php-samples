<?php


 function autoload_907a8d124b2a541740ff74f2cdcb58f9($class)
{
    $classes = array(
        'Jp\YahooApis\YDN\V201907\RetargetingList\RetargetingListService' => __DIR__ .'/RetargetingListService.php',
        'Jp\YahooApis\YDN\V201907\SoapHeader' => __DIR__ .'/../SoapHeader.php',
        'Jp\YahooApis\YDN\V201907\SoapResponseHeader' => __DIR__ .'/../SoapResponseHeader.php',
        'Jp\YahooApis\YDN\V201907\Paging' => __DIR__ .'/../Paging.php',
        'Jp\YahooApis\YDN\V201907\Error' => __DIR__ .'/../Error.php',
        'Jp\YahooApis\YDN\V201907\ErrorDetail' => __DIR__ .'/../ErrorDetail.php',
        'Jp\YahooApis\YDN\V201907\Page' => __DIR__ .'/../Page.php',
        'Jp\YahooApis\YDN\V201907\ReturnValue' => __DIR__ .'/../ReturnValue.php',
        'Jp\YahooApis\YDN\V201907\ListReturnValue' => __DIR__ .'/../ListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\RetargetingListSelector' => __DIR__ .'/RetargetingListSelector.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\TargetListType' => __DIR__ .'/TargetListType.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\RetargetingList' => __DIR__ .'/RetargetingList.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\RetargetingTargetList' => __DIR__ .'/RetargetingTargetList.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\RuleTargetList' => __DIR__ .'/RuleTargetList.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\Rule' => __DIR__ .'/Rule.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\RuleCondition' => __DIR__ .'/RuleCondition.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\CombinationTargetList' => __DIR__ .'/CombinationTargetList.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\Combination' => __DIR__ .'/Combination.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\TargetListData' => __DIR__ .'/TargetListData.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\SimilarityTargetList' => __DIR__ .'/SimilarityTargetList.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\TargetListSizeReaches' => __DIR__ .'/TargetListSizeReaches.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\CustomAudienceTargetList' => __DIR__ .'/CustomAudienceTargetList.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\TargetListSize' => __DIR__ .'/TargetListSize.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\DeliveryStatus' => __DIR__ .'/DeliveryStatus.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\IsPreset' => __DIR__ .'/IsPreset.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\IsOpen' => __DIR__ .'/IsOpen.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\RuleType' => __DIR__ .'/RuleType.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\CompareOperator' => __DIR__ .'/CompareOperator.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\LogicalOperator' => __DIR__ .'/LogicalOperator.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\RetargetingListPage' => __DIR__ .'/RetargetingListPage.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\RetargetingListValues' => __DIR__ .'/RetargetingListValues.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\RetargetingListOperation' => __DIR__ .'/RetargetingListOperation.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\Operation' => __DIR__ .'/Operation.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\Operator' => __DIR__ .'/Operator.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\RetargetingListReturnValue' => __DIR__ .'/RetargetingListReturnValue.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\get' => __DIR__ .'/get.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\getResponse' => __DIR__ .'/getResponse.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\mutate' => __DIR__ .'/mutate.php',
        'Jp\YahooApis\YDN\V201907\RetargetingList\mutateResponse' => __DIR__ .'/mutateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_907a8d124b2a541740ff74f2cdcb58f9');

// Do nothing. The rest is just leftovers from the code generation.
{
}
