<?php
require_once "data/Car.php";

use Data\{Pajero};

$car = new Pajero();
$car->drive();
$car->rate();
$car->getBrand();
