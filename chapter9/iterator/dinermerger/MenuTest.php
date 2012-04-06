<?php
require_once 'Menu.class.php';
require_once 'Waitress.class.php';

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu = new DinerMenu();
$cafeMenu = new CafeMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu, $cafeMenu);

$waitress->printMenu();
$waitress->printVegetarianMenu();

echo "\nCustomer asks, is the Hotdog vegetarian?", PHP_EOL;
echo "Waitress says: ", PHP_EOL;
if ($waitress->isItemVegetarian("Hotdog")) {
    echo "Yes", PHP_EOL;
} else {
    echo "No", PHP_EOL;
}

echo "\nCustomer asks, are the Waffles vegetarian?", PHP_EOL;
echo "Waitress says: ", PHP_EOL;
if ($waitress->isItemVegetarian("Waffles")) {
    echo "Yes", PHP_EOL;
} else {
    echo "No", PHP_EOL;
}
