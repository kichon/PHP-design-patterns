<?php
require 'ChocolateBoiler.class.php';

$choco1 = ChocolateBoiler::getInstance();
$choco2 = ChocolateBoiler::getInstance();

// まだだせる状態ではありません
$choco2->drain();

// ボイラーを満たします
$choco1->fill();

// ボイラーは既にいっぱいです
$choco2->fill();

// ボイルを沸かします
$choco2->boil();

// ボイラーは既にいっぱいです
$choco1->fill();

// まだ沸かせる状態ではありません
$choco1->boil();

// 沸いたので中身をだして空にします
$choco1->drain();

// まだ沸かせる状態ではありません
$choco1->boil();

// ボイラーを満たします
$choco1->fill();

