<?php
require_once 'MenuComponent.class.php';
require_once 'CompositeIterator.class.php';

class Menu extends MenuComponent {
    private $menuComponents = array();
    private $name;
    private $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent) {
        $this->menuComponents[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent) {
        foreach ($this->menuComponents as $k=>$v) {
            if ($v == $menuComponent) {
                unset($this->menuComponents[$k]);
                break;
            }
        }
    }

    public function getChild($i) {
        return $this->menuComponents[$i];
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function createIterator() {
        $arrayobject = new ArrayObject($this->menuComponents);
        $iterator = $arrayobject->getIterator();
        return new CompositeIterator($iterator);
    }

    public function printv() {
        echo "\n" . $this->getName();
        echo ", " . $this->getDescription(), PHP_EOL;
        echo "---------------------", PHP_EOL;

        $arrayobject = new ArrayObject($this->menuComponents);
        $iterator = $arrayobject->getIterator();

        while ($iterator->valid()) {
            $menuComponent = $iterator->current();
            $menuComponent->printv();

            $iterator->next();

        }
    }
}
