<?php

require_once ('GoogleTranslateForFree.php');

//Single
$source = 'en';
$target = 'ru';
$attempts = 5;
$text = 'Hello';

$tr = new GoogleTranslateForFree();
$result = $tr->translate($source, $target, $text, $attempts);

var_dump($result); 

//Array
$source = 'en';
$target = 'ru';
$attempts = 5;
$arr = array('hello','world');

$tr = new GoogleTranslateForFree();
$result = $tr->translate($source, $target, $arr, $attempts);

var_dump($result);
