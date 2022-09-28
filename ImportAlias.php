<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\Conflict as Conflict1; // untuk menggunakan alias  cukup menggunakan "as" lalu buat aliasnya
use Data\Two\Conflict as Conflict2;
use function Helper\Helpme as Help;
use const Helper\APLICATION as App;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

Help();
echo App . PHP_EOL;
