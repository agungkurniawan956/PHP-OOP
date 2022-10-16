<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Agung";
$student1->value = 99;

$string = (string) $student1;
var_dump($string) . PHP_EOL;


echo $student1 . PHP_EOL;
