<?php

class DinerMenuIterator implements Iterator {
    protected $list = array();
    protected $pos = 0;

    public function __construct($list) {
        $this->list = $list;
    }

    public function current() {
        return $this->list[$this->pos];
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
        return isset($this->list[$this->pos]);
    }

    public function remove() {
        if ($this->pos <= 0) {
            throw new Exception("You can't remove an item until you've done  at least one next()");
        }

        array_splice($this->list, $this->pos, 1);
    }
}
