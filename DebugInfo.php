<?php
require_once "data/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Agung";
$student->value = 99;
$student->setPass("12345");


var_dump($student);
