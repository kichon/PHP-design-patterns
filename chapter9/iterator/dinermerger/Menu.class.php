<?php
require_once 'MenuItem.class.php';
require_once 'DinerMenuIterator.class.php';

interface Menu {
    public function createIterator();
}

class PancakeHouseMenu implements Menu {
    protected $menuItems = array();

    public function __construct() {

        $this->addItem(
            "K&B's Pancake Breakfast",
            "Pancakes with scrambled eggs, and toast",
            true,
            2.99
        );

        $this->addItem(
            "Regular Pancake Breakfast",
            "Pancakes with fried eggs, sausage",
            false,
            2.99
        );

        $this->addItem(
            "Blueberry Pancakes",
            "Pancakes made with fresh blueberries, and blueberry syrup",
            true,
            3.49
        );

        $this->addItem(
            "Waffles",
            "Waffles, with your choice of blueberries or strawberries",
            true,
            3.59
        );
    }

    public function addItem($name, $description, $vegetarian, $price) {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems[] = $menuItem;
    }

    public function getMenuItems() {
        return $this->menuItems;
    }

    public function createIterator() {
        $arrayobject = new ArrayObject($this->menuItems);
        return $arrayobject->getIterator();
    }
}

class DinerMenu implements Menu {
    const MAX_ITEMS = 6;
    protected $numberOfItems = 0;
    protected $menuItems;

    public function __construct() {
        //$this->menuItems[] = new MenuItem(self::MAX_ITEMS);

        $this->addItem(
            "Vegetarian BLT",
            "(Fakin') Bacon with lettuce & tomato on whole wheat",
            true,
            2.99
        );

        $this->addItem(
            "BLT",
            "Bacon with lettuce & tomato on whole wheat",
            false,
            2.99
        );

        $this->addItem(
            "Soup of the day",
            "Soup of the day, with a side of potato salad",
            false,
            3.29
        );

        $this->addItem(
            "Hotdog",
            "A hot dog, with saurkraut, relish, onions, topped with cheese",
            false,
            3.05
        );

        $this->addItem(
            "Steamed Veggies and Brown Rice",
            "Steamed vegetables over brown rice",
            true,
            3.99
        );

        $this->addItem(
            "Pasta",
            "Spaghetti with Marinara Sauce, and a slice of sourdough bread",
            true,
            3.89
        );
    }

    public function addItem($name, $description, $vegetarian, $price) {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);

        if ($this->numberOfItems >= self::MAX_ITEMS) {
            echo "Sorry, menu is full! Can't add item to menu", PHP_EOL;
        } else {
            $this->menuItems[$this->numberOfItems] = $menuItem;
            $this->numberOfItems += 1;
        }
    }

    public function getMenuItems() {
        return $this->menuItems;
    }

    public function createIterator() {
        return new DinerMenuIterator($this->menuItems);
    }
}

class CafeMenu implements Menu {
    protected $menuItems;

    public function __construct() {
        $this->addItem(
            "Veggie Burger and Air Fries",
            "Veggie burger on a whole wheat bun, lettuce, tomato, and fries",
            true,
            3.99
        );

        $this->addItem(
            "Soup of the day",
            "A cup of the soup of the day, with a side salad",
            false,
            3.69
        );

        $this->addItem(
            "Burrito",
            "A large burrito, with whole pinto beans, salsa, guacamole",
            true,
            4.29
        );
    }

    public function addItem($name, $description, $vegetarian, $price) {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems[$menuItem->getName()] = $menuItem;
    }

    public function getItems() {
        return $this->menuItems;
    }

    public function createIterator() {
        $arrayobject = new ArrayObject($this->menuItems);
        return $arrayobject->getIterator();
    }
}

