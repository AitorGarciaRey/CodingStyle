<?php

declare(strict_types=1);

use AitorGarciaRey\CodingStyle;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([__DIR__ . '/src']);

    $ecsConfig->sets([CodingStyle::DEFAULT]);
};