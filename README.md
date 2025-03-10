# CodingStyle

## 📥 Installation

```sh
composer require --dev rotia80/coding-style
```

## 💻 Usage

```php
<?php

use Rotia80\CodingStyle;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([__DIR__ . '/src']);
    $ecsConfig->sets([CodingStyle::DEFAULT]);
};
```