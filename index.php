<?php
include 'Circle.php';
include 'Rectangle.php';
include 'Square.php';

$circle = new Circle2(5);
$doublePercent = rand(1, 100);
$circle->resize($doublePercent);
echo "<br>";

$rectangle = new Rectangle2(11, 20);
$doublePercent = rand(1, 100);
$rectangle->resize($doublePercent);
echo "<br>";

$square = new Square(6);
$doublePercent = rand(1, 100);
$square->resize($doublePercent);
?>