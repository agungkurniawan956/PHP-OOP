<?php
require "data/Person.php";

$person = new Person();
$person->name = "Agung";
$person->address = "West Java";
$person->country = "Indonesia";

echo "name : $person->name" . PHP_EOL;
echo "name : $person->address" . PHP_EOL;
echo "name : $person->country" . PHP_EOL;
//var_dump($person);
