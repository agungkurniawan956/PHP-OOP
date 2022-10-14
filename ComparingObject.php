<?php
require_once "data/Student.php";


$student1 = new Student();
$student1->id = "1";
$student1->name = "Agung";
$student1->value = 99;

$student2 = new Student();
$student2->id = "1";
$student2->name = "Agung";
$student2->value = "99";

var_dump($student1 == $student2); // membandingkan properties pada object
var_dump($student1 === $student2); // membandingkan obbject
