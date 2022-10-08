<?php
require_once "data/Person.php";

$users = [
  "firstname" => "Agung",
  "lastname" => "Kurniawan"
];

$object = (object)$users;

var_dump($object);

echo "first name $object->firstname" . PHP_EOL;
echo "Last Name $object->lastname" . PHP_EOL;

$aray = (array)$object;

var_dump($aray);

$person = new Person("Agung", "West Java");

var_dump($person);

$personarray = (array)$person;
var_dump($personarray);
