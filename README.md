# GoogleTranslateForFree
Packagist: https://packagist.org/packages/dejurin/php-google-translate-for-free

![version](https://img.shields.io/github/release/dejurin/php-google-translate-for-free.svg?style=flat)
[![downloads](https://img.shields.io/packagist/dt/dejurin/php-google-translate-for-free.svg?style=flat)](https://packagist.org/packages/dejurin/php-google-translate-for-free)
[![travis](https://img.shields.io/travis/dejurin/php-google-translate-for-free.svg?style=flat)](https://travis-ci.org/dejurin/php-google-translate-for-free)
[![StyleCI](https://github.styleci.io/repos/123622379/shield?branch=master)](https://github.styleci.io/repos/123622379)

Library for free use Google Translator. With attempts connecting on failure and array support.

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
$target = 'ru';
$attempts = 5;
$text = 'Hello';

$tr = new GoogleTranslateForFree();
$result = $tr->translate($source, $target, $text, $attempts);

var_dump($result); 

/* 
	string(24) "Здравствуйте" 
*/
```

## Array

```php
$source = 'en';
$target = 'ru';
$attempts = 5;
$arr = ['hello','world'];

$tr = new GoogleTranslateForFree();
$result = $tr->translate($source, $target, $arr, $attempts);

var_dump($result); 

/*
	array(2) {
	  [0]=>
	  string(24) "Здравствуйте"
	  [1]=>
	  string(6) "Мир"
	}

*/
```

### License ###
This widget is distributed under [MIT](https://choosealicense.com/licenses/mit/) license.
*You can use this widget for free on your sites. Nevertheless, due to the fact that we take on all the workload (third-party server), we need to pay for the equipment and we would like to receive from you, something in replacement, for example, DO NOT delete the backlink in the widget.*

___
Powered by [CurrencyRate.Today](https://currencyrate.today) ![CurrencyRate.Today](./cr-danger.svg "CurrencyRate.Today")

## Sponsors ##
### https://fx-w.io/ ###
