<?php
require_once 'CaffeineBeverage.class.php';
require_once 'TeaWithHook.class.php';
require_once 'CoffeeWithHook.class.php';

$tea = new Tea();
$coffee = new Coffee();

echo "\nMaking tea...", PHP_EOL;
$tea->prepareRecipe();

echo "\nMaking coffee...", PHP_EOL;
$coffee->prepareRecipe();


$teaHook = new TeaWithHook();
$coffeeHook = new CoffeeWithHook();

echo "\nMaking tea...", PHP_EOL;
$teaHook->prepareRecipe();

echo "\nMaking coffee...", PHP_EOL;
$coffeeHook->prepareRecipe();
