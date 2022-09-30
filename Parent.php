<?php
require_once "data/Shape.php";

use data\{Shape, Rectangel};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangel = new Rectangel();
echo $rectangel->getCorner() . PHP_EOL;
echo $rectangel->getPerentCorner() . PHP_EOL;

echo $rectangel->getCorner() . PHP_EOL;
