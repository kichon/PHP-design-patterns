<?php
require_once 'GumballMachine.class.php';

$gumballMachine = new GumballMachine(5);

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine;
