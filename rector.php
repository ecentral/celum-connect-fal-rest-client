<?php

declare(strict_types=1);

/*
 * This file is part of the "celum_connect_fal_rest_client" package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use Rector\Config\RectorConfig;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;
use Rector\Php70\Rector\Ternary\TernaryToNullCoalescingRector;
use Rector\Php71\Rector\List_\ListToArrayDestructRector;
use Rector\Php74\Rector\Closure\ClosureToArrowFunctionRector;
use Rector\Php80\Rector\Catch_\RemoveUnusedVariableInCatchRector;
use Rector\Php80\Rector\Class_\StringableForToStringRector;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use Rector\Php80\Rector\NotIdentical\StrContainsRector;
use Rector\Php80\Rector\Switch_\ChangeSwitchToMatchRector;
use Rector\Php74\Rector\If_\IfToNullCoalescingAssignRector;
use Rector\Php83\Rector\ClassConst\AddTypeToConstRector;
use Rector\Php84\Rector\MethodCall\NewMethodCallWithoutParenthesesRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/lib',
        __DIR__ . '/test',
    ])
    ->withPhpVersion(PhpVersion::PHP_84)
    ->withSets([
        LevelSetList::UP_TO_PHP_84,
    ])
    ->withSkip([
        AddTypeToConstRector::class,
        ChangeSwitchToMatchRector::class,
        ClassPropertyAssignToConstructorPromotionRector::class,
        ClosureToArrowFunctionRector::class,
        IfToNullCoalescingAssignRector::class,
        ListToArrayDestructRector::class,
        NewMethodCallWithoutParenthesesRector::class,
        RemoveUnusedVariableInCatchRector::class,
        StrContainsRector::class,
        StringableForToStringRector::class,
        StringClassNameToClassConstantRector::class,
        TernaryToNullCoalescingRector::class,
    ])
    ->withCache(cacheDirectory: __DIR__ . '/var/cache/rector');
