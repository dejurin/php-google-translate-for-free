# GoogleTranslateForFree
Packagist: https://packagist.org/packages/dejurin/php-google-translate-for-free

![version](https://img.shields.io/github/release/dejurin/php-google-translate-for-free.svg?style=flat)
[![downloads](https://img.shields.io/packagist/dt/dejurin/php-google-translate-for-free.svg?style=flat)](https://packagist.org/packages/dejurin/php-google-translate-for-free)
[![StyleCI](https://github.styleci.io/repos/123622379/shield?branch=master)](https://github.styleci.io/repos/123622379)

Library for free use Google Translator. With attempts connecting on failure and array support.

---

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://buymeacoffee.com/deyurii)

---

## Installation

Install this package via [Composer](https://getcomposer.org/).

```
composer require dejurin/php-google-translate-for-free
```

Or edit your project's `composer.json` to require `dejurin/php-google-translate-for-free` and then run `composer update`.

```json
"require": {
    "dejurin/php-google-translate-for-free": "^1.0"
}
```

## Usage

```php
require_once ('vendor/autoload.php');
use \Dejurin\GoogleTranslateForFree;
```

## Single

```php
$source = 'en';
$target = 'ro';
$attempts = 5;
$text = 'Hello';

$tr = new GoogleTranslateForFree();
$result = $tr->translate($source, $target, $text, $attempts);

var_dump($result); 

/* 
	string(24) "Salut"
*/
```

## Array

```php
$source = 'en';
$target = 'uk';
$attempts = 5;
$arr = ['hello','world'];

$tr = new GoogleTranslateForFree();
$result = $tr->translate($source, $target, $arr, $attempts);

var_dump($result); 

/*
	array(2) {
	  [0]=>
	  string(24) "salut"
	  [1]=>
	  string(6) "lume"
	}

*/
```

### License ###
This source code is distributed under [MIT](https://choosealicense.com/licenses/mit/) license.

___

## Sponsors ##
### https://currencyrate.today ###
### https://moneyconvert.net/ ### 
### https://co-w.io/ ###
### https://co-in.io/ ###
### https://fx-w.io/ ###
