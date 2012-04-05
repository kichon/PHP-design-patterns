<?php
require_once 'Tea.class.php';
require_once 'Coffee.class.php';

$tea = new Tea();
$coffee = new Coffee();

echo "Making tea...", PHP_EOL;
$tea->prepareRecipe();

echo "Making coffee...", PHP_EOL;
$coffee->prepareRecipe();
