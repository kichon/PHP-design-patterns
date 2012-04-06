<?php

class MenuItem {
    protected $name;
    protected $description;
    protected $vegetarian;
    protected $price;

    public function __construct($name, $description, $vegetarian, $price) {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function __call($name, $params) {
        if (strpos($name, 'get') === 0) {
            $attr = substr($name, 3);
            if (strlen($attr) > 0) {
                $attr = lcfirst($attr);
                if ($this->hasClassVar($attr)) {
                    return $this->$attr;
                }
                throw new Exception(sprintf('No such field "%s"', $attr));
            }
        }
        throw new Exception(sprintf('No such method "%s"', $name));
    }

    public function hasClassVar($attr) {
        static $vars = null;

        if ($vars === null) {
            $vars = get_class_vars(__CLASS__);
        }
        return array_key_exists($attr, $vars);
    }

    public function isVegetarian() {
        return $this->vegetarian;
    }

}
