<?php

class CompositeIterator implements Iterator {
    protected $stack = array();
    protected $pos = 0;

    public function __construct(Iterator $iterator) {
        $this->stack[] = $iterator;
    }

    public function current() {
        if ($this->valid()) {
            $iterator = array_shift($this->stack);
            $component = $iterator->current();
            $iterator->next();
            if ($component instanceof Menu) {
                $this->stack[] = $component->createIterator();
            }
            return $component;
        } else {
            return null;
        }
    }

    public function key() {
        return $this->pos;
    }

    public function next() {
        return $this->pos++;
    }

    public function rewind() {
        return $this->pos = 0;
    }

    public function valid() {
        if (empty($this->stack)) {
            return false;
        } else {
            $iterator = $this->stack[$this->pos];
            if (!$iterator->valid()) {
                array_shift($this->stack);
                return $this->valid();
            } else {
                return true;
            }
        }

    }

    public function hasnext() {
        if (empty($this->stack)) {
            return false;
        } else {
            $iterator = $this->stack[$this->pos];
            if (!$iterator->valid()) {
                return $this->valid();
            } else {
                return true;
            }
        }
    }


    public function remove() {
        throw new Exception();
    }
}
