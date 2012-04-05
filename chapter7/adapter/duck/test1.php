<?php
require_once 'Duck.class.php';
require_once 'Turkey.class.php';
require_once 'TurkeyAdapter.class.php';

$duck = new MallardDuck();

$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

echo "The Turkey says...",PHP_EOL;
$turkey->gobble();
$turkey->fly();


echo "\nThe Duck says...",PHP_EOL;
testDuck($duck);

echo "\nThe TurkeyAdapter says...",PHP_EOL;
testDuck($turkeyAdapter);


function testDuck(Duck $duck) {
    $duck->quack();
    $duck->fly();
}
