<?php

require_once 'rectangle.php';
require_once 'square.php';


$rectangle = new Rectangle(5,6);
echo $rectangle->area() . PHP_EOL;

$square = new Square(4);
echo $square->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;

?>