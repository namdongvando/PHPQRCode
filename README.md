## Project Overview
## System Requirements
PHP >= 7.0
## Installation Instructions
Composer is the easiest way to manage dependencies in your project. Create a file named composer.json with the following:
```json
{
    "require": {
       "namdongvando/phpqrcode": "^1.16"
    }
}
```
And run Composer to install phpqrcode:

```bash
composer require namdongvando/phpqrcode
``` 
## Code Samples

```php

<?php
use PHPQRCODE\QRCODECLASSS;
include("src/QRCODECLASSS.php");
$qrcode = new QRCODECLASSS();
$qrcode->data = "namdong92@gmail.com";
$qrcode->size = "7";
$qrcode->level = 1;
$qrcode->Images((array) $qrcode);
 
```
