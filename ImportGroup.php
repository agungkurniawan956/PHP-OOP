<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\{Conflict as Conflict1, Sample, Dummy}; // untuk menggunakan import group cukup menggunakan kurung kurawal
use Data\Two\{Conflict as Conflict2};
use function Helper\{Helpme as Help};

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
$dum = new Dummy();
$sample = new Sample();

Help();
