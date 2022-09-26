<?php
require "data/Person.php";

$person = new Person("Agung", "Kuningan");
$person->name = "Agung";
$person->address = "West Java";

echo "name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;
var_dump($person);

$person2 = new Person("Harist", "Brebes");
$person2->name = "Harist";

var_dump($person2);
