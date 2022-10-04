<?php
require_once "data/SayGoodBye.php";

use Data\Traits\{Person, sayWellcome, sayGoodBye};

$person = new Person();
$person->welcome("Agung");
$person->goodbye("Agung");

$person->name = "Harist";
// var_dump($person);

$person->run();
