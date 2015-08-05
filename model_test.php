<?php
require_once "model.php";

$chicken = new Model();
echo $chicken->sauce = 'bbq' . PHP_EOL;
echo $chicken->type = 'free-range' . PHP_EOL;


?>