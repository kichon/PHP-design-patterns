<?php

class NullIterator implements Iterator {

    public function current() {
        return false;
    }

    public function key() {
        return false;
    }

    public function next() {
        return false;
    }

    public function rewind() {
        return false;
    }

    public function valid() {
        return false;
    }

    public function remove() {
        return false;
    }
}
