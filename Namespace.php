<?php
require_once "data/Conflit.php";
require_once "data/Helper.php";

// jika tidak membuat namespace itu artinya kita dibuatkan namespace global secara otomatis 

$conflict1 = new Data\one\Conflict;
$conflict2 = new \Data\Two\conflict;

echo Helper\APLICATION;

Helper\Helpme();
