# CodingStyle

## 📥 Instalación
1. Instalar dependencias
```sh
composer require --dev aitorgarciarey/coding-style
```
## 💻 Modo uso
1. Añadir fichero `ecs.php`
```php
<?php

use AitorGarciaRey\CodingStyle;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([__DIR__ . '/src']);
    $ecsConfig->sets([CodingStyle::DEFAULT]);
};
```
2. Ejecutar:
    ```sh
    /vendor/bin/ecs check
    ```
    ```sh
    /vendor/bin/ecs check --fix
    ```