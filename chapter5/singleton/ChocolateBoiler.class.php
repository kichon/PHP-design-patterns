<?php

class ChocolateBoiler {
    private $emp;
    private $boiled;
    private static $ins;

    private function __construct() {
        $this->emp = true;
        $this->boilded = false;
    }

    public static function getInstance() {
        if (is_null(self::$ins)) {
            self::$ins = new ChocolateBoiler();
        }
        return self::$ins;
    }

    public function fill() {
        if ($this->isEmpty()) {
            echo "ボイラーを満たします", PHP_EOL;
            $this->emp = false;
            $this->boiled = false;
        } else {
            echo "ボイラーは既にいっぱいです", PHP_EOL;
        }
    }

    public function drain() {
        if (! $this->isEmpty() && $this->isBoiled()) {
            echo "沸いたので中身をだして空にします", PHP_EOL;
            $this->emp = true;
        } else {
            echo "まだだせる状態ではありません", PHP_EOL;
        }
    }

    public function boil() {
        if (! $this->isEmpty() && ! $this->isBoiled()) {
            echo "ボイルを沸かします", PHP_EOL;
            $this->boiled = true;
        } else {
            echo "まだ沸かせる状態ではありません", PHP_EOL;
        }
    }

    public function isEmpty() {
        return $this->emp;
    }
    public function isBoiled() {
        return $this->boiled;
    }
}
