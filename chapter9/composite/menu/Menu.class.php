<?php

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

    public function getNae() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function prt() {
        echo "\n" . $this->getName(), PHP_EOL;
        echo ", " . $this->getDescription(), PHP_EOL;
        echo "--------------------", PHP_EOL;
    }
}
