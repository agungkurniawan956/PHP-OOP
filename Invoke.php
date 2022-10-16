<?php
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Agung";
$student1->value = 99;

$student1("1", "Agung", "2", "Kurniawan");
