<?php
require_once 'Duck.class.php';
require_once 'DuckAdapter.class.php';

$duck = new MallardDuck();
$duckAdapter = new DuckAdapter($duck);

for ($i=0; $i<10; $i++) {
    echo "The DucAdapter says...", PHP_EOL;
    $duckAdapter->gobble();
    $duckAdapter->fly();
}
