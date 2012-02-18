<?php
require 'PizzaStore.class.php';

$ny_ps = new NYPizzaStore();

$ny_ps->order('plain');
$ny_ps->order('seafood');

//$la_ps = new LAPizzaStore();

//$la_ps->order('seafood');
//$la_ps->order('cheese');
