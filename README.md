# CodingStyle

## 📥 Installation

```sh
composer require --dev aitorgarciarey/coding-style
```

## 💻 Usage

```php
<?php

use AitorGarciaRey\CodingStyle;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([__DIR__ . '/src']);
    $ecsConfig->sets([CodingStyle::DEFAULT]);
};
```