<?php
require 'PizzaStore.class.php';

$ps = new PizzaStore();

$ps->order('plain');
$ps->order('seafood');
